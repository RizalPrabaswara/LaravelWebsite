@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')

<h1>Transaksi Game</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Tambah Data
</button>
@stop

@section('content')
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Transaksi Game</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                Tambah Data Master Game
                </div>
                <div class="panel-body">
                        {{ Form::open(['url'=>'/prosestambah4']) }}
                        <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> -->
                        {!! Form::hidden('idtransaksi', '',['placeholder'=>'idtransaksi','class'=>'form-control']) !!}
                        ID Game :
                        <select name="idgame" id="" class="form-control">
                            @foreach($dropdowngame as $item)
                                <option value="{{$item->Idgame}}">{{$item->Namagame}}</option>
                            @endforeach
                        </select>
                        <p></p>
                        Nama Game :
                        <select name="namagame" id="" class="form-control">
                            @foreach($dropdowngame as $item)
                                <option value="{{$item->Namagame}}">{{$item->Namagame}}</option>
                            @endforeach
                        </select>
                        <p></p>
                        ID Supplier :
                        <select name="idsupplier" id="" class="form-control">
                            @foreach($dropdownsupplier as $item)
                                <option value="{{$item->Idsupplier}}">{{$item->Namasupplier}}</option>
                            @endforeach
                        </select>
                        <p></p>
                        Nama Supplier :
                        <select name="namasupplier" id="" class="form-control">
                            @foreach($dropdownsupplier as $item)
                                <option value="{{$item->Namasupplier}}">{{$item->Namasupplier}}</option>
                            @endforeach
                        </select>
                        <p></p>
                        Harga :
                        {!! Form::number('harga','',['placeholder'=>'harga','class'=>'form-control']) !!}
                        Jumlah :
                        {!! Form::number('jumlah','',['placeholder'=>'jumlah','class'=>'form-control']) !!}
                        Tanggal Pembelian :
                        {!! Form::date('tanggaltransaksi','',['placeholder'=>'tanggaltransaksi','class'=>'form-control']) !!}
                        <p></p>
                        {!! Form::submit('Tambah Data', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<p></p>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>ID Game</th>
            <th>Nama Game</th>
            <th>ID Supplier</th>
            <th>Nama Supplier</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Tanggal Transaksi</th>
            <th>Action</th>
        </tr>
        <?php $no=1; ?>
        @foreach($transaksi as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->Idgame }}</td>
            <td>{{ $data->Namagame }}</td>
            <td>{{ $data->Idsupplier }}</td>
            <td>{{ $data->Namasupplier }}</td>
            <td>{{ $data->Harga }}</td>
            <td>{{ $data->Jumlah }}</td>
            <td>{{ $data->Tanggaltransaksi }}</td>
            <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#detailTransaksi">Proses</a>
            </button>
            ||<a class="btn btn-warning" href="formdetailttransaksi/{{ $data->Idtransaksi }}">Detail</a></td>
        </tr>
        @endforeach
    </table>
</div>
<!-- Modal -->
            <div class="modal fade" id="detailTransaksi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailTransaksiLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailTransaksiLabel"> Detail Transaksi Game</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Ingin Memproses Transaksi ?
                        (Transaksi akan dihapus dari table jika sudah di proses)
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success"><a href="hapus4/{{ $data->Idtransaksi }}">Proses</a></button>
                        <button type="button" class="btn btn-danger"><a href="/uasrizal/public/ttransaksi">Tidak</a></button>
                    </div>
                    </div>
                </div>
            </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@stop