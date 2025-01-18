<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Store a New Comment
    public function store(Request $request, $ariticleId) {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        $article = Article::findOrFail($ariticleId);

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = Auth::id(); // User ID dari pengguna yang sedang login
        $comment->article_id = $article->id;
        $comment->save();

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }

    // Update an Existing Comment
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        $comment = Comment::findOrFail($id);

        // Pastikan hanya pemilik komentar yang bisa mengedit
        if ($comment->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Silakah login untuk mengedit komentar.');
        }

        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->back()->with('success', 'Komentar berhasil diperbarui!');
    }

    // Delete a Comment
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        // Pastikan hanya pemilik komentar yang bisa menghapus
        if ($comment->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Silahkan login untuk menghapus komentar.');
        }

        $comment->delete();

        return redirect()->back()->with('success', 'Komentar berhasil dihapus!');
    }
}
