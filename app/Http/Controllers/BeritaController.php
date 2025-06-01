<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Category::all();
        $berita = Post::all()
            ->where('status', true);
        return view('pages.berita', compact('berita', 'kategori'));
    }

    public function kategoriberita($slug)
    {
        $kategori = Category::all();
        $ktgr = Category::where('slug', $slug)
            ->firstOrFail();
        $berita = Post::Active()
            ->where('category_id', $ktgr->id)
            ->get();
        return view('pages.berita', compact('berita', 'kategori'));
    }

    public function detailBerita($slug)
    {
        $berita = Post::where('slug', $slug)->first();
        return view('pages.detailberita', compact('berita'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

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
