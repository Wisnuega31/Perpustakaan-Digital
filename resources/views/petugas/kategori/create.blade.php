@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="card" style="width: 40rem;">
                <div class="card-header d-flex justify-content-between align-items-center px-4">
                    <h5>Tambah Data User</h5>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid  @enderror"
                                    name="username" id="username" aria-label="First name">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid  @enderror"
                                    name="nama_lengkap" id="nama_lengkap" aria-label="First name">
                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="email" class="form-label ">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid  @enderror"
                                    name="email" id="email" aria-label="First name">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="password" class="form-label ">Password</label>
                                <input type="text" class="form-control @error('password') is-invalid  @enderror"
                                    name="password" id="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label ">Role</label>
                            <select id="role"name="role" class="form-select">
                                <option selected>Choose...</option>
                                <option value="user">User</option>
                                <option value="petugas">Petugas</option>
                                <option value="admin">Admin</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('tahun_terbit') is-invalid @enderror" id="alamat" name="alamat" rows="3"></textarea>
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
