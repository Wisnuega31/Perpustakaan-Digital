<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

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
        return view('pengguna.dashboard',[
            'dataBuku' => Buku::paginate(12)
        ]);
    }
    public function buku()
    {
        return view('pengguna.buku', [
            'dataBuku' => Buku::all()
        ]);
    }
    public function detailBuku($id){
        return view('pengguna.detailbuku',[
            'detailBuku' => Buku::find($id)
        ]);
    }

}
