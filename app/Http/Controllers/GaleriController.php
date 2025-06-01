<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Gallery::all()->where('status', true);
        return view('pages.galeri', compact('galeri'));
    }

    public function ekstra()
    {
        $perPage = 10;
        $galeri = Gallery::Active()
            ->Ekstra()
            ->paginate($perPage);
        return \view('pages.galeri', \compact('galeri'));
    }
    public function akademik()
    {
        $perPage = 10;
        $galeri = Gallery::Active()
            ->Akademik()
            ->paginate($perPage);
        return \view('pages.galeri', \compact('galeri'));
    }
    public function event()
    {
        $perPage = 10;
        $galeri = Gallery::Active()
            ->Event()
            ->paginate($perPage);
        return \view('pages.galeri', \compact('galeri'));
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
