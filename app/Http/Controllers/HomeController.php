<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pengguna.dashboard', [
            'dataBuku' => Buku::paginate(12)
        ]);
    }
    public function buku()
    {
        return view('pengguna.buku', [
            'dataBuku' => Buku::all()
        ]);
    }
    public function detailBuku($id)
    {
        return view('pengguna.detailbuku', [
            'detailBuku' => Buku::find($id)
        ]);
    }
    public function like($id)
    {
        // ddd(Auth::user());
        if (Koleksi::where('buku_id', $id) && Koleksi::where('user_id', Auth::user()->id)) {
            return back()->with('isLike', 'bi-heart-fill');
        } else {
            Koleksi::create([
                'buku_id' => $id,
                'user_id' => Auth::user()->id
            ]);
            return back()->with('pesan', 'Buku di tambahkan ke favorite');
        }
    }
}
