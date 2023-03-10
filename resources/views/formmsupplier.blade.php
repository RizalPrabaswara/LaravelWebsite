@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Form Master Supplier</h1>
@stop

@section('content')
    <p></p>
        <div class="panel panel-default">
            <div class="panel-heading">
            Tambah Data Master Supplier
            </div>
            <div class="panel-body">
                    {{ Form::open(['url'=>'/prosestambah3']) }}
                    <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> -->
                    {!! Form::hidden('idsupplier', '',['placeholder'=>'idsupplier','class'=>'form-control']) !!}
                    Nama Supplier :
                    {!! Form::text('namasupplier','',['placeholder'=>'namasupplier','class'=>'form-control']) !!}
                    No Telepon :
                    {!! Form::text('notelepon','',['placeholder'=>'notelepon','class'=>'form-control']) !!}
                    Nama Barang :
                    {!! Form::text('namabarang','',['placeholder'=>'namabarang','class'=>'form-control']) !!}
                    Harga :
                    {!! Form::text('harga','',['placeholder'=>'harga','class'=>'form-control']) !!}
                    <p></p>
                    {!! Form::submit('Tambah Data', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close()!!}
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