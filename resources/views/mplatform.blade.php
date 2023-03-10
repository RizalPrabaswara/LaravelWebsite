@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Master Platform</h1>
<!-- <button href="{{ url('/formmgame') }}" type="button" class="btn btn-primary">Tambah Data</button> -->
@stop

@section('content')
<p></p>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama Platform</th>
            <th>Device</th>
            <th>Pengembang</th>
            <th>Action</th>
        </tr>
        <?php $no=1; ?>
        @foreach($platform as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->Namaplatform }}</td>
            <td>{{ $data->Device }}</td>
            <td>{{ $data->Pengembang }}</td>
            <td><button type="button" class="btn btn-danger"><a href="hapus2/{{ $data->Idplatform }}">Hapus</a></button>||
            <button type="button" class="btn btn-warning"><a href="formeditmplatform/{{ $data->Idplatform }}">Edit</a></button>
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