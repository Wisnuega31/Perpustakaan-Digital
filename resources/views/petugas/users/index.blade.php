@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center px-4">
                    <h5>Data Users</h5>
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah</a>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Alamat</th>
                                @if (Auth::user()->role == 'admin')
                                    <th scope="col">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($users as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    @if (Auth::user()->role == 'admin')
                                        <td class="d-flex gap-2">
                                            <a href="{{ route('users.edit', $item->id) }}"
                                                class="btn btn-sm  btn-warning ">edit</a>
                                            <form action="{{ route('users.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger  ">hapus</button>
                                            </form>
                                        </td>
                                    @endif

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $users->onEachSide(0)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
