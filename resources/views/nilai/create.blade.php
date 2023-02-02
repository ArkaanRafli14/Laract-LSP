@extends('main.layout')
@section('content')
    <center>
        <br>
            <h2>Tambah Data Nilai</h2>
            <form action="/nilai/store" method="POST">
            @csrf
                <table width="50%">
                    <tr>
                        <td class="bar">Guru Mapel</td>
                        <td class="bar">
                            <select name="mengajar_id">
                                <option></option>
                                @foreach ($mengajar as $each)
                                    <option value="{{ $each->id }}">{{ $each->guru->nama_guru }} {{ $each->mapel->nama_mapel }} {{ $each->kelas->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">Siswa</td>
                        <td class="bar">
                            <select name="siswa_id">
                                <option></option>
                                @foreach ($siswa as $each)
                                    <option value="{{ $each->id }}">{{ $each->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">UH</td>
                        <td width="25%"><input type="number" name="uh"></td>
                    </tr>
                    <tr>
                        <td width="25%">UTS</td>
                        <td width="25%"><input type="number" name="uts"></td>
                    </tr>
                    <tr>
                        <td width="25%">UAS</td>
                        <td width="25%"><input type="number" name="uas"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><button class="button-primary" type="submit">Simpan</button></center>
                        </td>
                    </tr>
                </table>
            </form>
    </center>
@endsection