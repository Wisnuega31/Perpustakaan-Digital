<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('petugas.kategori.index', [
            'dataKategori' => Kategori::paginate(10),
            'method' => 'POST'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kategori::create([
            'nama_kategori' => $request->nama_kategori,

        ]);
        return redirect()->route('kategori.index')->with('pesan', 'Data User Berhasil Ditambahkan');
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
        return view('petugas.kategori.index', [
            'dataKategori' => Kategori::paginate(10),
            'kategori' => Kategori::findOrFail($id),
            'url' => 'petugas/kategori/' . $id,
            'method' => 'PATCH'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Kategori::find($id)->update($request->all());
        return redirect()->route('kategori.index')->with('pesan', 'Data Kategori Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::find($id)->delete();
        return redirect()->route('kategori.index')->with('pesan', 'Data Kategori Berhasil Dihapus');
    }
}
