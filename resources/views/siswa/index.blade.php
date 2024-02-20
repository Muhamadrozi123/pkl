@extends('layout.index')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('siswa.create') }}" class="btn btn-md btn-success mb-3">TAMBAH SISWA</a>
                        <a href="{{ route('dudi.index') }}" class="btn btn-md btn-success mb-3">DATA DUDI</a>
                        <a href="{{ route('pkl.index') }}" class="btn btn-md btn-success mb-3">DATA PKL</a>
                        {{-- <a href="{{ route('pengajar.index') }}" class="btn btn-md btn-success mb-3">DATA PENGAJAR</a> --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">KELAS</th>
                                    <th scope="col" class="text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($siswas as $key => $siswa)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $siswa->nama }}</td>
                                        <td>{!! $siswa->kelas !!}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                                                <a href="{{ route('siswa.edit', $siswa->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data guru belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $siswas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
