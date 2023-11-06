<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function list(){
        return view('category.list', [
            'categories' => Media::paginate(12)
        ]);

    }

    // public function listAdmin(Request $request)
    // {
    //     if (isset($request->search)) {
    //         $categories  = Media::where('name', 'LIKE', '%' . $request->search . '%')->paginate(30);
    //     } else {
    //         $categories  = Media::paginate(30);
    //     }
    //     return view('category.list-admin', [
    //         'categories' => $categories
    //     ]);
    // }


    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:60',
            'image' => 'image|mimes:jpeg,png,jpg,gif' // validate each image
        ]);

        $file = $request->file('image');
        $path = $file->store('public/img');
        $url = Storage::url($path);

        Media::create([
            'name' => $request->input('name'),
            'image' => $url
        ]);

        return redirect()->route('category.list.admin')->with(['message' => "Catégorie créée avec succès."]);
    }



    public function update(Media $category){
        return view('category.update', [
            'category' => $category
        ]);
    }


    public function updateStore(Request $request, Media $category){

        $data = ['name' => $request->input('name')];

        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $url = Storage::url($file->store('public/category'));
            $data = array_merge($data, ['image' => $url]);
        }
        $category->update($data);
        return redirect()->route('category.list.admin')->with(['message' => "Catégorie mise à jour avec succès."]);
    }

    public function delete(Media $category){
        $category->delete();
        return redirect()->route('category.list.admin')->with(['message' => "Catégorie supprimée avec succès."]);
    }

    public function category(Media $category){
        return view('category.category', [
            "products" => Product::where('category', $category->id)->paginate(13)
        ]);
    }


    public function deleteMultiple(Request $request){
        $categories = $request->input('category', []);
        Media::whereIn('id', $categories)->delete();
        return response()->json(['message' => 'The images were successfully deleted!']);

    }
}
