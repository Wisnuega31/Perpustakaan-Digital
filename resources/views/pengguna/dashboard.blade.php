@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="px-4 vh-100 text-center d-flex align-items-center" style="margin-top: -5rem">
            <div class="">
                <h3 class="display-6 fw-bold text-body-emphasis">Selamat Datang Di Perpustakaan Digital</h3>
                <div class="col-lg-8 mx-auto">
                    <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et commodi atque voluptatum
                        magnam odio itaque, animi a voluptatem excepturi laudantium tempore minima ducimus debitis quis
                        numquam quod vero maiores praesentium?</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gap-4 mx-auto ">
            @foreach ($dataBuku as $item)
                <a href="{{ route('user.detailbuku', $item->id) }}" class="card col-2 p-0 text-decoration-none "
                    style="width: 10rem;">
                    <img src="/coverBuku/{{ $item->cover }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title m-0 fs-4">
                            <span>{{ $item->judul }}</span>
                        </h5>
                        <p class="card-text">{{ $item->penulis }} | 4</p>
                    </div>
                </a>
            @endforeach
        </div>
        <footer>
            ini footer
        </footer>
    </section>
@endsection
