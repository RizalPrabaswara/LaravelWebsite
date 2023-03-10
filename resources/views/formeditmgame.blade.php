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
                    {{ Form::open(['url'=>'/prosesedit']) }}
                    <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> -->
                    {!! Form::hidden('idgame',$game->Idgame, ['class'=>'form-control']) !!}
                    Nama Game :
                    {!! Form::text('namagame',$game->Namagame,['class'=>'form-control']) !!}
                    Genre :
                    {!! Form::text('genre',$game->Genre,['class'=>'form-control']) !!}
                    Tahun Rilis :
                    {!! Form::text('tahunrilis',$game->Tahunrilis,['class'=>'form-control']) !!}
                    Deskripsi :
                    {!! Form::text('deskripsi',$game->Deskripsi,['class'=>'form-control']) !!}
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