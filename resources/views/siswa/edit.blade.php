@extends('layout.index')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                <form action="{{ route('siswa.update', $siswa->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama', $siswa->nama) }}"
                                placeholder="Ubah Nama Anda">
                            <!-- error message untuk title -->
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Kelas</label>
                            <select class="form-control" name="kelas">
                                <option value="X PPLG" {{ $siswa->kelas == 'X PPLG' ? 'selected' : '' }}>X PPLG </option>
                                <option value="XI PPLG" {{ $siswa->kelas == 'XI PPLG' ? 'selected' : '' }}>XI RPL </option>
                                <option value="XII PPLG" {{ $siswa->kelas == 'XII PPLG' ? 'selected' : '' }}>XII RPL </option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end "> <!-- Added class justify-content-end -->
                            <button type="submit" class="btn btn-md btn-primary mx-1">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning mx-1">RESET</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
