@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Detail Transaksi Top-up/Saldo</h1>
@stop

@section('content')
    <p></p>
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Top-up/Saldo
            </div>
            <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                            @forelse($topup as $data)
                                <tr>
                                    <th scope="row">ID Top-up</th>
                                    <td>{{ $data->Idtopup }}</td>
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
                                    <th scope="row">ID Platform</th>
                                    <td>{{ $data->Idplatform }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Platform</th>
                                    <td>{{ $data->Namaplatform }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nominal</th>
                                    <td>{{ $data->Nominal }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah</th>
                                    <td>{{ $data->Jumlah }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Harga</th>
                                    <td>{{ $data->Harga }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Top-up</th>
                                    <td>{{ $data->Tanggaltopup }}</td>
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