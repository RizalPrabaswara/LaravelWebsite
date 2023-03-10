@extends('adminlte::page')

@section('title', 'Profile')

@section('content')
    <div class="container">
    <p></p>
        <div class="panel panel-default">
            <div class="panel-heading">
            Ubah Data
            </div>
            <div class="panel-body">
                    {{ Form::open(['url'=>'/prosesedit3']) }}
                    <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> -->
                    {!! Form::hidden('idsupplier',$supplier->Idsupplier, ['class'=>'form-control']) !!}
                    Nama Supplier :
                    {!! Form::text('namasupplier',$supplier->Namasupplier,['class'=>'form-control']) !!}
                    No Telepon :
                    {!! Form::text('notelepon',$supplier->Notelepon,['class'=>'form-control']) !!}
                    Pengembang :
                    {!! Form::text('namabarang',$supplier->Namabarang,['class'=>'form-control']) !!}
                    Harga :
                    {!! Form::text('harga',$supplier->Harga,['class'=>'form-control']) !!}
                    <p></p>
                    {!! Form::submit('Ubah Data', ['class'=>'btn btn-danger']) !!}
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