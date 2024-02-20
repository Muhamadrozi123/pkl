@extends('layout.index')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('pkl.create') }}" class="btn btn-success mb-2">TAMBAH PKL</a>
                    <a href="{{ route('siswa.index') }}" class="btn btn-success mb-2">DATA SISWA</a>
                    <a href="{{ route('dudi.index') }}" class="btn btn-success mb-2">DATA DUDI</a>
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama Dudi</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Keluar</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pkls as $index => $pkl)
                                    <tr>
                                        <td>{{ $pkls->firstItem() + $index }}</td>
                                        <td>{{ $pkl->siswa->nama }}</td>
                                        <td>{{ $pkl->dudi->alamat }}</td>
                                        <td>{{ $pkl->tgl_masuk }}</td>
                                        <td>{{ $pkl->tgl_keluar }}</td>
                                        <td>
                                            <a href="{{ route('pkl.edit', $pkl->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('pkl.destroy', $pkl->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- <div class="alert alert-danger">
                                    Data Post belum Tersedia.
                                </div> --}}
                        </tbody>
                    </table>

                    {{-- {{ $pkls->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
