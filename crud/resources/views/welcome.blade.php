@extends('master')
@section('konten')
    <h1>Data Mahasiswa</h1>
    <a class="btn btn-sm btn-success" href="{{ route('tambah.mahasiswa') }}">Tambah Mahasiswa</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $k => $m)
                <tr>
                    <th>{{ $k + 1 }}</th>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->jk }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('detail.mahasiswa', $m->id) }}">Detail</a>
                        <a class="btn btn-sm btn-warning" href="">Edit</a>
                        <a class="btn btn-sm btn-danger" href="">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
