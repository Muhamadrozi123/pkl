@extends('layout.index')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf


                        <div class="form-group">
                            <label class="font-weight-bold">NAMA</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="nama" value="{{ old('title') }}" placeholder="Masukan Nama Siswa ">
                        
                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Kelas</label>
                            <select class="form-control" name="kelas">
                                <option value="">Select Kelas</option>
                                <option value="X PPLG ">X PPLG </option>
                                <option value="XI PPLG ">XI PPLG </option>
                                <option value="XII PPLG">XII PPLG </option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
