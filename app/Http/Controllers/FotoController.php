<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['fotos'] = Foto::paginate(5);
        return view('fotos.index', $datos);
        //return view('fotos.index');
        /* $fotos = Foto::latest()->paginate(5); // paginar 
        return view('fotos.index', ['fotos' => $fotos]); */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('fotos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);

        $imagenes = $request->file('file')->store('public/imagenes');

        $url = Storage::url($imagenes);

        Foto::create([
            'url' => $url
        ]);

        return redirect('fotos');
    }

    /**
     * Display the specified resource.
     */
    public function show(foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(foto $foto)
    {
        //
        return view('fotos.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(foto $foto)
    {
        //
    }
}
