@extends('main.layout')
@section('content')
    <center>
        <br>
            <h2>Tambah Data Mengajar</h2>
            <form action="/mengajar/store" method="POST">
            @csrf
                <table width="50%">
                    <tr>
                        <td class="25%">Guru</td>
                        <td class="25%">
                            <select name="guru_id">
                                <option></option>
                                @foreach ($guru as $g)
                                    <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="25%">Mata Pelajaran</td>
                        <td class="25%">
                            <select name="mapel_id">
                                <option></option>
                                @foreach ($mapel as $m)
                                    <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="25%">Kelas</td>
                        <td class="25%">
                            <select name="kelas_id">
                                <option></option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </td>
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