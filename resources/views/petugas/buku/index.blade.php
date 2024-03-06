@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center px-4">
                    <h5>Data Buku</h5>
                    <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($buku as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $item->judul }}</td>
                                    <td>
                                        @foreach ($item->kategori as $kategori)
                                            <span>{{ $kategori->nama_kategori }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $item->penulis }}</td>
                                    <td>{{ $item->penerbit }}</td>
                                    <td>{{ $item->tahun_terbit }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('buku.edit', $item->id) }}"
                                            class="btn btn-sm  btn-warning ">edit</a>
                                        <form action="{{ route('buku.destroy', $item->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger  ">hapus</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $buku->onEachSide(0)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
