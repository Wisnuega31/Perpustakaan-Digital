@extends('layouts.app')

@section('content')
    <div class="container ">
        <img src="/coverBuku/{{ $detailBuku->cover }}" class="img-fluid" alt="Cover Buku" style=" height: 20rem;">
    </div>
@endsection
