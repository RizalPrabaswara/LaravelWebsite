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
            <th>Nama Supplier</th>
            <th>No Telepon</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
        <?php $no=1; ?>
        @foreach($supplier as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->Namasupplier }}</td>
            <td>{{ $data->Notelepon }}</td>
            <td>{{ $data->Namabarang }}</td>
            <td>Rp. {{ $data->Harga }}</td>
            <td><button type="button" class="btn btn-danger"><a href="hapus3/{{ $data->Idsupplier }}">Hapus</a></button>||
            <button type="button" class="btn btn-warning"><a href="formeditmsupplier/{{ $data->Idsupplier }}">Edit</a></button>
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