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
    </section>
    <section class="container">
        <div class="row gap-4 mx-auto ">
            @foreach ($dataBuku as $item)
                <div class="card col-3 p-0 text-decoration-none z-1" style="width: 12rem;">
                    <div class="position-relative">
                        <form action="{{ route('user.like', $item->id) }}" method="post">
                            @csrf
                            <button type="submit"
                                class="btn btn-light m-2 position-absolute bottom-0 end-0 rounded-5 z-3 ">
                                <i class="bi bi-heart"></i>
                            </button>
                        </form>
                        <img src="/coverBuku/{{ $item->cover }}" class="card-img-top object-fit-cover overflow-hidden"
                            alt="coverBuku" style="height:13rem">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title m-0 fs-4">
                            <span>{{ $item->judul }}</span>
                        </h5>
                        <p class="card-text">{{ $item->penulis }} | 4</p>
                        <div class="d-flex justify-content-end ">
                            <a href="{{ route('user.like', $item->id) }}" class="btn btn-primary  rounded-1">Pinjam</i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center ">
            <a href="{{ route('user.buku') }}" class="btn btn-primary btn-sm my-4">See More</a>
        </div>
    </section>
    <div class="container mt-5">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-youtube"></i></a></li>
            </ul>
        </footer>
    </div>
@endsection
