@extends('layout.index')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('pkl.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_siswa">Siswa</label>
                            <select name="id_siswa" id="id_siswa" class="form-control">
                                @foreach ($siswas as $siswa)
                                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_dudi">Dudi</label>
                            <select name="id_dudi" id="id_dudi" class="form-control">
                                @foreach ($dudis as $dudi)
                                    <option value="{{ $dudi->id }}">{{ $dudi->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_masuk">Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tgl_keluar">Tanggal Keluar</label>
                            <input type="date" name="tgl_keluar" id="tgl_keluar" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
