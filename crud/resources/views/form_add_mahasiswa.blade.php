@extends('master')
@section('konten')
    <form method="POST" action="{{ route('simpan.mahasiswa') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">nim</label>
            <input type="text" maxlength="8" name="nim" class="form-control">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jk" checked value="Laki-laki">
            <label class="form-check-label">
                Laki Laki
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jk" value="Perempuan">
            <label class="form-check-label">
                Perempuan
            </label>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
        </div>
    </form>
@endsection
