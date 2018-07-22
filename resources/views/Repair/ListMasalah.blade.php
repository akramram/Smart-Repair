@extends('layouts.master')

@section('title')
Smart Repair
@endsection
@section('content')
<div class="vertical-center">
  <div class="container">
    <h2 class="page-header text-center" style="margin-top:20px;">Masalah</h2>

    <table class="table table-hover">
      <thead>
      </thead>
      <tbody>
        @foreach($masalah as $d)
        <tr>
          <td><a href="/Summary/{{$d->id}}"> {{ $d->deskripsi }}</a></td>
          <td><a href=""> {{ $d->nama_komponen }}</a></td>
          <td><a href="">Rp {{ $d->harga }}</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

        {{$masalah->render()}}
    <!--div class="container-fluid">
      <div class="col-md-12 text-center">
        <a  href="{{url('Tipe')}}"><button class="btn btn-danger"><< Back</button></a>
        <a  href="{{url('/')}}"><button class="btn btn-danger">Home</button></a>
        <a  href="{{url('/Summary')}}"><button class="btn btn-danger">Next >></button></a>
      </div>
    </div-->
  </div>
</div>
@endsection
