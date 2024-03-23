@extends('master')
@section('konten')
    <h1> Detail Mahasiswa Atas Nama <span class="text-warning">{{ $mahasiswa->nama }}</span> dan nim <span
            class="text-danger">{{ $mahasiswa->nim }}</span>
    </h1>
@endsection
