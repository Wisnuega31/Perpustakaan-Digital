@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
            <a href="" class="col-2 text-decoration-none mb-4">
                <div class="card p-0 overflow-hidden">
                    <img src="/coverBuku/hah_240315-091818.png" class="card-img-top object-fit-cover" alt="coverBuku"
                        style="width: 10.5rem;height: 11rem;">
                    <div class="card-body">
                        <h5 class="card-title m-0 fs-4">
                            <span>{{ __('Judul') }}</span>
                        </h5>
                        <p class="card-text">{{ __('penulis') }} | 4</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
@endsection
