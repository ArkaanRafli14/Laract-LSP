@extends('main.layout')
@section('content')
    <center>
        <br>
            <h2>Tambah Data Nilai</h2>
            <form action="/nilai/update/{{ $nilai->id }}" method="POST">
            @csrf
                <table width="50%">
                    <tr>
                        <td width="25%">Guru Mapel</td>
                        <td width="25%">
                            <select name="guru_id">
                                <option></option>
                                @foreach ($mengajar as $each)
                                    <option value="{{ $each->id }}" @if ($each->id == $nilai->mengajar_id) selected @endif>
                                        {{ $each->guru->nama_guru }} {{ $each->mapel->nama_mapel }} {{ $each->kelas->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">Siswa</td>
                        <td width="25%">
                            <select name="mapel_id">
                                <option></option>
                                @foreach ($siswa as $each)
                                    <option value="{{ $each->id }}" @if ($each->id == $nilai->siswa_id) selected @endif>
                                        {{ $each->nama_siswa }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">UH</td>
                        <td width="25%"><input type="number" name="uh" value="{{ $nilai->uh }}"></td>
                    </tr>
                    <tr>
                        <td width="25%">UTS</td>
                        <td width="25%"><input type="number" name="uts" value="{{ $nilai->uts }}"></td>
                    </tr>
                    <tr>
                        <td width="25%">UAS</td>
                        <td width="25%"><input type="number" name="uas" value="{{ $nilai->uas }}"></td>
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