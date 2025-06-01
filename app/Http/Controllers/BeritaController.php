<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): view
    {
        $perPage = 10;
        $searchQuery = $request->query('search');

        $berita = Post::active();
        $searchQuery = $request->Query('search');
        if ($searchQuery) {
            $berita->query($searchQuery);  // <--- Panggil scope 'query' di sini
        }

        $berita = $berita->latest()->paginate($perPage);

        $kategori = Category::all();

        return view('pages.berita', compact('berita', 'kategori', 'searchQuery'));
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
        $beritaBaru = Post::latest()->take(4)->get();
        $berita = Post::where('slug', $slug)->first();
        return view('pages.detailberita', compact('berita','beritaBaru'));
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
