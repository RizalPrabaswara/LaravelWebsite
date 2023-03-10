@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Master Game</h1>
<!-- <button href="{{ url('/formmgame') }}" type="button" class="btn btn-primary">Tambah Data</button> -->
@stop

@section('content')
<p></p>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Genre</th>
            <th>Tahun Rilis</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
        <?php $no=1; ?>
        @foreach($game as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->Namagame }}</td>
            <td>{{ $data->Genre }}</td>
            <td>{{ $data->Tahunrilis }}</td>
            <td>{{ $data->Deskripsi }}</td>
            <td><button type="button" class="btn btn-danger"><a href="hapus/{{ $data->Idgame }}">Hapus</a></button>||
            <button type="button" class="btn btn-warning"><a href="formeditmgame/{{ $data->Idgame }}">Edit</a></button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop