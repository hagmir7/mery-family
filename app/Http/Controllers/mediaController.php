<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class mediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos= Media::paginate(15);
        return view('media.list' , compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:60',
            'file' => 'image|mimes:jpeg,png,jpg,gif' // validate each image
        ]);

        $file = $request->file('file');
        $path = $file->store('public/Media');
        $url = Storage::url($path);

        Media::create([
            'description' => $request->input('description'),
            'file' => $url
        ]);

        return redirect()->back()->with(['message' => "The image has been created successfully."]);

    }

    public function listAdmin(Request $request)
    {
        if (isset($request->search)) {
            $categories  = Media::where('name', 'LIKE', '%' . $request->search . '%')->paginate(30);
        } else {
            $categories  = Media::paginate(30);
        }
        return view('media.list-admin', [
            'categories' => $categories
        ]);
    }

    public function deleteMultiple(Request $request){
        $categories = $request->input('category', []);
        Media::whereIn('id', $categories)->delete();
        return response()->json(['message' => 'The images were successfully deleted!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $photo = Media::findOrFail($id);
       return view('media.show' , compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
