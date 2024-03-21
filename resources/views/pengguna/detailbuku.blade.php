@extends('layouts.app')

@section('content')
    <div class="container d-flex gap-4 ">
        <div>

            <img src="/coverBuku/{{ $detailBuku->cover }}" class="img-fluid" alt="Cover Buku" style="width: 20rem;height: 20rem;">
            <div>
                <h1>juduk</h1>
                <h5>Penulis</h5>
                <h5>Penerbit</h5>x
            </div>
        </div>
        <div>
            
        </div>
    </div>
@endsection
