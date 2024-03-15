@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="card" style="width: 40rem;">
                <div class="card-header d-flex justify-content-between align-items-center px-4">
                    <h5>Tambah Data Buku</h5>
                    <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid  @enderror"
                                    name="judul" id="judul" aria-label="First name">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="kategori" class="form-label ">Kategori</label>
                                <select id="kategori"name="kategori" class="form-select">
                                    <option selected>Choose...</option>
                                    <option value=""></option>
                                </select>
                                @error('kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="penulis" class="form-label ">Penulis</label>
                                <input type="text" class="form-control @error('penulis') is-invalid  @enderror"
                                    name="penulis" id="penulis" aria-label="First name">
                                @error('penulis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="penerbit" class="form-label ">Penerbit</label>
                                <input type="text" class="form-control @error('penerbit') is-invalid  @enderror"
                                    name="penerbit" id="penerbit">
                                @error('penerbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" class="form-control @error('tahun_terbit') is-invalid  @enderror"
                                    id="tahun_terbit" name="tahun_terbit">
                                @error('tahun_terbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="stok" class="form-label ">Stok</label>
                                <input type="number" class="form-control @error('stok') is-invalid  @enderror"
                                    name="stok" id="stok">
                                @error('penerbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">

                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover Buku</label>
                            <input type="file" class="form-control @error('cover') is-invalid  @enderror" id="cover"
                                name="cover" multiple>
                            @error('cover')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-end ">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
