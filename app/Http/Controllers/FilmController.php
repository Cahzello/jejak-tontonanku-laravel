<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $dataFilms = $user->films()->latest()->get();
        
        return view('film.index', compact('dataFilms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('film.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dump($request);
        $validated = $request->validate([
            'judul' => 'required',
            'tahun' => 'required|numeric',
            'isCompleted' => 'nullable|boolean',
        ]);
        
        $validated['user_id'] = Auth::id();

        Films::create($validated);
        
        return redirect()->route('film.index')->with('success', 'Film berhasil ditambahkan.');
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
