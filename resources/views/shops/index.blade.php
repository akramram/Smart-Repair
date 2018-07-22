@extends('layouts.master')

@section('title')
  Smart Repair
@endsection
@section('content')
<div class="vertical-center text-center">
  <div class="container">
    <img src="storage/logo.png" class="img-responsive" style="max-width: 300px"></br>
    <p style="size:5em;">Smart Repair</p>

    @if(session()->has('alert'))
        <div class="alert alert-success">
            <h4 class="alert-heading">Berhasil !</h4>
          <p>{{ session()->get('alert') }}</p>
        </div>
    @endif

    <div class="container-fluid">
      <div class="col-md-12 text-center">
        <a  href="{{url('Merek')}}"><button class="btn btn-danger">Repair Now!</button></a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
