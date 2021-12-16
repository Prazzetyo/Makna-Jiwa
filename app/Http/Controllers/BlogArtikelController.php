<?php

namespace App\Http\Controllers;

use App\Models\BlogArtikel; // load BlogArtikel model
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogArtikelController extends Controller
{
    public function index()
    {
        $artikels = BlogArtikel::latest()->get();
        return view('artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_artikel' => 'required|string|max:155',
            'deskripsi' => 'required',
            'content' => 'required',
            'gambar' => 'required',
            'penulis' => 'required'
        ]);

        $post = BlogArtikel::create([
            'judul_artikel' => $request->judul_artikel,
            'deskripsi' => $request->deskripsi,
            'content' => $request->content,
            'gambar' => $request->gambar,
            'penulis' => $request->penulis
        ]);

        if ($post) {
            return redirect()
                ->route('blogartikel.index')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function edit($id_artikel)
    {
        $post = BlogArtikel::findOrFail($id_artikel);
        return view('artikel.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_artikel' => 'required|string|max:155',
            'deskripsi' => 'required',
            'content' => 'required',
            'gambar' => 'required',
            'penulis' => 'required'
        ]);

        $post = BlogArtikel::findOrFail($id);

        $post->update([
            'judul_artikel' => $request->judul_artikel,
            'deskripsi' => $request->deskripsi,
            'content' => $request->content,
            'gambar' => $request->gambar,
            'penulis' => $request->penulis
        ]);

        if ($post) {
            return redirect()
                ->route('blogartikel.index')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    public function destroy($id_artikel)
    {
        $post = BlogArtikel::findOrFail($id_artikel);
        $post->delete();

        if ($post) {
            return redirect()
                ->route('blogartikel.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('blogartikel.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}