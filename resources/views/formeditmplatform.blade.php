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
                    {{ Form::open(['url'=>'/prosesedit2']) }}
                    <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> -->
                    {!! Form::hidden('idplatform',$platform->Idplatform, ['class'=>'form-control']) !!}
                    Nama Platform :
                    {!! Form::text('namaplatform',$platform->Namaplatform,['class'=>'form-control']) !!}
                    Device :
                    {!! Form::text('device',$platform->Device,['class'=>'form-control']) !!}
                    Pengembang :
                    {!! Form::text('pengembang',$platform->Pengembang,['class'=>'form-control']) !!}
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