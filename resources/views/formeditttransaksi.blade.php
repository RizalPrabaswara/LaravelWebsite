@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Detail Transaksi Game</h1>
@stop

@section('content')
    <p></p>
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Transaksi
            </div>
            <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                            @forelse($transaksi as $data)
                                <tr>
                                    <th scope="row">ID Transaksi</th>
                                    <td>{{ $data->Idtransaksi }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">ID Game</th>
                                    <td>{{ $data->Idgame }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Game</th>
                                    <td>{{ $data->Namagame }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">ID Supplier</th>
                                    <td>{{ $data->Idsupplier }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Supplier</th>
                                    <td>{{ $data->Namasupplier }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Harga</th>
                                    <td>{{ $data->Harga }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah</th>
                                    <td>{{ $data->Jumlah }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Transaksi</th>
                                    <td>{{ $data->Tanggaltransaksi }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total</th>
                                    <?php
                                    $jumlah = $data->Jumlah;
                                    $harga = $data->Harga;
                                    $total = $jumlah*$harga;
                                    ?>
                                    <td>{{ $total }}</td>
                                </tr>
                                @empty
                            @endforelse
                            </table>
                        </div>
                    @stop
            </div>
        </div>
    </div>

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop