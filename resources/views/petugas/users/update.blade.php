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
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid  @enderror"
                                    name="username" id="username" value="{{ $user->username }}">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid  @enderror"
                                    name="nama_lengkap" id="nama_lengkap" value="{{ $user->nama_lengkap }}">
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
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{ $user->email }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="password" class="form-label ">Password</label>
                                <input type="text" class="form-control @error('password') is-invalid  @enderror"
                                    name="password" id="password" value="{{ $user->password }}">
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
                                <option value="user"
                                    @if ($user->role == 'user') @selected(true) @endif>User</option>
                                <option value="petugas"
                                    @if ($user->role == 'petugas') @selected(true) @endif>Petugas</option>
                                <option value="admin"
                                    @if ($user->role == 'admin') @selected(true) @endif>Admin</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('tahun_terbit') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ $user->alamat }}</textarea>
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
