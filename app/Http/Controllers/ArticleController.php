<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // Menampilkan semua artikel
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Menampilkan formulir untuk membuat artikel baru
    public function create()
    {
        return view('articles.create');
    }

    // Menyimpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'image' => $imagePath,
            'author_id' => Auth::id(),
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dibuat!');
    }

    // Menampilkan artikel berdasarkan ID
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    // Menampilkan formulir untuk mengedit artikel
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    // Memperbarui artikel
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $article = Article::findOrFail($id);

        $imagePath = $article->image;
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($imagePath) {
                // \Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('articles', 'public');
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    // Menghapus artikel
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        if ($article->image) {
            // \Storage::disk('public')->delete($article->image);
        }
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
