@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center px-4">
                    <h5>Data Kategori</h5>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ url($url ?? 'petugas/kategori') }}" method="POST">
                                        @method($method)
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama_kategori" class="form-label ">Nama Kategori</label>
                                            <input type="text"
                                                class="form-control @error('nama_kategori') is-invalid @enderror"
                                                name="nama_kategori" id="nama_kategori"
                                                value="{{ $kategori->nama_kategori ?? '' }}">
                                            @error('nama_kategori')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 d-flex justify-content-end ">
                                            <button type="submit" class="btn btn-primary form-control ">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($dataKategori as $item)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $item->nama_kategori }}</td>
                                            <td class="d-flex gap-2">
                                                <a href="{{ route('kategori.edit', $item->id) }}"
                                                    class="btn btn-sm  btn-warning ">edit</a>
                                                <form action="{{ route('kategori.destroy', $item->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger  ">hapus</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $dataKategori->onEachSide(0)->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
