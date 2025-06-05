<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\School;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Gallery::all()->where('status', true);
        $fasilitas = Fasilitas::all()->where('is_aktif', true)->last()->take(4)->get();
        $berita = Post::active()->latest()->take(3)->get();
        $school = School::all()->first();
        return view('pages.home', compact('school', 'fasilitas', 'berita', 'galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

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
    public function destroy(string $id)
    {
        //
    }
}
