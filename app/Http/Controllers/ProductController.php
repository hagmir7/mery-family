<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Media;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{


    public function list(){
       
//
    }

    public function listAdmin(Request $request){
        !auth()->user()->role && abort(404);
        if(isset($request->search)){
            $products  = Product::where('name', 'LIKE', '%' . $request->search . '%')->paginate(20);
        }else{
            $products  = Product::paginate(20);
        }
        return view('product.list-admin', [
            'products' => $products
        ]);
    }

    public function create() {
        !auth()->user()->role && abort(404);
        return view('product.create', [
            'category' => Category::all(),
            'sizes' => Size::all(),
            'colors' => Color::all()
        ]);
    }

    public function product(Product $product){
        return view('product.product',[
            'product' => $product
        ] );
    }


    public function store(Request $request) {
        !auth()->user()->role && abort(404);
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'old_price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'category' => 'required|exists:categories,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // validate each image
        ]);

        $data = array_merge($validation, [
            'user' => auth()->user()->id
        ]);




        $product = Product::create($data);
        foreach ($request->file('images') as $file) {
            $path = $file->store('public/product');
            $url = Storage::url($path);

            ProductImages::create([
                "image" => $url,
                "product" => $product->id
            ]);
        }


        // Update colors
        $product->colors()->sync($request->input('color', []));

        // Update sizes
        $product->sizes()->sync($request->input('size', []));

        return redirect()->route('product.list')->with(['message' => 'Produit créé avec succès.']);
    }


    public function update(Product $product){

        return view('product.update', [
            'category' => Category::all(),
            'product' => $product,
            'sizes' => Size::all(),
            'colors' => Color::all()
        ]);
    }






    public function updateStore(Request $request, Product $product) {
        !auth()->user()->role && abort(404);
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'old_price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'category' => 'required|exists:categories,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // validate each image
        ]);


        $product->update($validation);

        // Update images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('public/product');
                $url = Storage::url($path);

                ProductImages::create([
                    "image" => $url,
                    "product" => $product->id
                ]);
            }
        }

        // Update colors
        $product->colors()->sync($request->input('color', []));

        // Update sizes
        $product->sizes()->sync($request->input('size', []));

        return redirect()->route('product', $product->id)->with(['message' => 'Produit mis à jour avec succès.']);
    }



    public function delete(Product $product){
        !auth()->user()->role && abort(404);
        $product->delete();
        return redirect()->route('product.list')->with(['message' => 'Produit créé avec succès.']);
    }

    public function deleteMultiple(Request $request){
        !auth()->user()->role && abort(404);
        $products = $request->input('product', []);
        Product::whereIn('id', $products)->delete();
        return response()->json(['message' => 'Les produits ont été supprimés avec succès!']);

    }
}
