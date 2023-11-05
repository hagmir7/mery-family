<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::paginate(2);
        return view('media.show', compact('comments'));
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
        // Validate the incoming data
        $request->validate([
            'comment' => 'required|string',
            'media_id' => 'required|exists:media,id',
        ]);

        // Create a new comment
        if (auth()->check()) {
            Comment::create([
                'comment' => $request->input('comment'),
                'media_id' => $request->input('media_id'),
                'user_id' => auth()->user()->id,
            ]);
        } else {
            return redirect()->route('login');
        }
        return redirect()->back()->with('success', 'Comment added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return redirect()->back()->with('error', 'Comment not found');
        }

        // Vérifiez si l'utilisateur actuel est autorisé à supprimer le commentaire
        if (auth()->user() && (auth()->user()->id === $comment->user_id || auth()->user()->role === 1)) {
            $comment->delete();
            return redirect()->back()->with('success', 'Comment deleted successfully');
        } else {
            return redirect()->back()->with('error', 'You are not authorized to delete this comment');
        }
    }


}
