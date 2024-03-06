<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('petugas.buku.index', [
            'buku' => Buku::with(['Kategori'])->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect()->route('buku.index')->with('pesan', 'Data Buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the spreturn view('petugas.buku.update', [
            'buku' => Buku::find($id),
        ]);ecified resource.
     */
    public function edit(string $id)
    {
        return view('petugas.buku.update', [
            'buku' => Buku::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Buku::find($id)->update($request->all());
        return redirect()->route('buku.index')->with('pesan', 'Data Buku Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Buku::find($id)->delete();
        return redirect()->route('buku.index')->with('pesan', 'Data Buku Berhasil Dihapus');
    }
}
