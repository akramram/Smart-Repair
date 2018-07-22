@extends('layouts.master')

@section('title')
Smart Repair
@endsection
@section('content')
<div class="vertical-center text-left">
  <div class="container">
    <h1 class="text-center">Tambah Alamat</h1>
    {!! Form::open(['action' => 'ProfileController@simpanAlamat']) !!}
      <div class="form-group">
        {{form::label('nama_penerima','Nama Penerima')}}
        {{form::text('nama_penerima','',['class'=>'form-control','placeholder'=>'Nama Penerima'])}}
      </div>
      <div class="form-group">
        {{form::label('nomor_hp','Nomor HP')}}
        {{form::text('nomor_hp','',['class'=>'form-control','placeholder'=>'Nomor HP'])}}
      </div>
      <div class="form-group">
        {{form::label('alamat','Alamat Lengkap')}}
        {{form::textarea('alamat','',['class'=>'form-control','placeholder'=>'Alamat Lengkap'])}}
      </div>
      {{form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
</div>
</div>

@endsection
