@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Form Master Game</h1>
@stop

@section('content')
    <p></p>
        <div class="panel panel-default">
            <div class="panel-heading">
            Tambah Data Master Game
            </div>
            <div class="panel-body">
                    {{ Form::open(['url'=>'/prosestambah']) }}
                    <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> -->
                    {!! Form::hidden('idgame', '',['placeholder'=>'idgame','class'=>'form-control']) !!}
                    Nama Game :
                    {!! Form::text('namagame','',['placeholder'=>'namagame','class'=>'form-control']) !!}
                    Genre :
                    {!! Form::text('genre','',['placeholder'=>'genre','class'=>'form-control']) !!}
                    Tahun Rilis :
                    {!! Form::text('tahunrilis','',['placeholder'=>'tahunrilis','class'=>'form-control']) !!}
                    Deskripsi :
                    {!! Form::text('deskripsi','',['placeholder'=>'deskripsi','class'=>'form-control']) !!}
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