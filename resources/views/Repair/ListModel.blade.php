@extends('layouts.master')

@section('title')
Smart Repair
@endsection
@section('content')

<div class="vertical-center text-center">
  <div class="container">
    <h2 class="page-header text-center" style="margin-top:20px;">Tipe</h2>


    <table class="table table-hover">
      <thead>
        <tr>
        </tr>
      </thead>
      <tbody>
        @foreach($mer as $d)
        <tr>
          <td><a href="/Masalah/{{ $d->id }}"> {{ $d->nama }}</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

    {{$mer->render()}}
    <!--div class="container-fluid">
      <div class="col-md-12 text-center">
        <a  href="{{url('Merek')}}"><button class="btn btn-danger"><< Back</button></a>
        <a  href="{{url('/')}}"><button class="btn btn-danger">Home</button></a>
        <a  href="{{url('/Masalah')}}"><button class="btn btn-danger">Next >></button></a>
      </div>
    </div-->
  </div>
</div>
@endsection
