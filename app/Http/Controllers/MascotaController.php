<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascotas.create');
    }

    public function store(Request $request)
    {
        $mascota = Mascota::create($request->all());
        return redirect()->route('mascotas.index');
    }

    public function show(Mascota $mascota)
    {
        return view('mascotas.show', compact('mascota'));
    }

    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));
    }

    public function update(Request $request, Mascota $mascota)
    {
        $mascota->update($request->all());
        return redirect()->route('mascotas.index');
    }

    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->route('mascotas.index');
    }
}
