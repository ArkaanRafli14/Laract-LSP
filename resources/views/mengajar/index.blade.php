@extends('main.layout') 
@section('content')
<center>
    <b>
        <h2>List Data Mengajar</h2>
        <a href="/mengajar/create" class="button-primary">Tambah Data</a>
        @if (session('success'))
        <p class="text-success">{{ session('success') }}</p>    
        @endif

        @if (session('error'))
        <p class="text-danger">{{ session('error') }}</p>
        @endif
        <table cellpadding="10">
            <tr>
                <th>No</th>
                <th>Guru</th>
                <th>Mata Pelajaran</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
            @foreach ($mengajar as $mr)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $mr->guru->nama_guru }}</td>
                <td>{{ $mr->mapel->nama_mapel }}</td>
                <td>{{ $mr->kelas->nama_kelas }}</td>
                <td>
                    <a href="/mengajar/edit/{{ $mr->id }}" class="button-warning">Edit</a>
                    <a href="/mengajar/destroy/{{ $mr->id }}" class="button-danger" onclick="return confirm ('Yakin Hapus')">Hapus</a>
                </td>
            </tr>
                
            @endforeach
        </table>
    </b>
</center>
@endsection