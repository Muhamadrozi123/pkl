@extends('layout.index')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('dudi.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DUDI</a>
                    <a href="{{ route('siswa.index') }}" class="btn btn-md btn-success mb-3">DATA SISWA</a>
                    <a href="{{ route('pkl.index') }}" class="btn btn-md btn-success mb-3">DATA PKL</a>
                    {{-- <a href="{{ route('barang.index') }}" class="btn btn-md btn-success mb-3">BARANG</a> --}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col" class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dudi as $index => $dudi1)
                            <tr>
                                <td>{{ $dudi->firstItem() + $index }}</td>
                                <td>{{ $dudi1->nama }}</td>
                                <td>{!! $dudi1->alamat !!}</td>
                                <td class="text-center"> <!-- Menambahkan kelas text-center -->
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('dudi.destroy', $dudi1->id) }}" method="POST">
                                        <a href="{{ route('dudi.edit', $dudi1->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            
                            @empty
                                <div class="alert alert-danger">
                                    Data Post belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- {{ $dudi->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
