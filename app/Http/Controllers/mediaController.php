<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class mediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $photos = Media::whereHas('user', function($user) use ($search) {
                $user->where('role', 0)->where('last_name', 'LIKE', '%' . $search . '%');
            })->paginate(15);
        } else {
            $photos = Media::whereHas('user', function($user) {
                $user->where('role', 1);
            })->paginate(15);
        }
        return view('media.list', compact('photos'))->with(['message' => 'Aucun utilisateur trouvé']);
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
            'file' => $url,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->back()->with(['message' => "The image has been created successfully."]);

    }

    public function listAdmin(Request $request)
    {
        if (!auth()->user()->role) {
            $categories  = Media::where('user_id', auth()->user()->id)->paginate(30);
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
    public function edit($id)
    {
        $category = Media::findOrFail($id);
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     */
/**
 * Update the specified resource in storage.
 */
public function update(Request $request, $id)
{
    $category = Media::findOrFail($id);

    $request->validate([
        'description' => 'required|max:255',
        'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $input = $request->all();
    if ($request->hasFile('file')) {
        Storage::delete($category->file);

        // Store the new file
        $path = $request->file('file')->store('public/Media');
        $input['file'] = Storage::url($path);
    }

    $category->update($input);

    return redirect()->back()->with(['message' => "The photo has been updated successfully."]);
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Media::findOrFail($id);

        // Delete the file from the filesystem
        $file = str_replace('/storage', 'public', $category->file);
        Storage::delete($file);

        // Delete the photo record
        $category->delete();

        return redirect()->back()->with('message', 'Photo deleted successfully.');
    }


}
