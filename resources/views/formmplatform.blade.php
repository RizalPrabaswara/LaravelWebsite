@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Form Master Platform</h1>
@stop

@section('content')
    <p></p>
        <div class="panel panel-default">
            <div class="panel-heading">
            Tambah Data Master Platform
            </div>
            <div class="panel-body">
                    {{ Form::open(['url'=>'/prosestambah2']) }}
                    <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> -->
                    {!! Form::hidden('idplatform', '',['placeholder'=>'idplatform','class'=>'form-control']) !!}
                    Nama Platform :
                    {!! Form::text('namaplatform','',['placeholder'=>'namaplatform','class'=>'form-control']) !!}
                    Device :
                    {!! Form::text('device','',['placeholder'=>'device','class'=>'form-control']) !!}
                    Pengembang :
                    {!! Form::text('pengembang','',['placeholder'=>'pengembang','class'=>'form-control']) !!}
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