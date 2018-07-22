@extends('layouts.master')

@section('title')
Smart Repair
@endsection
@section('content')
<div class="vertical-center text-center">
  <div class="container">
    <h2 class="page-header text-center" style="margin-top:20px;">Merek</h2>

    @foreach($merek->chunk(3) as $merekchunk)
    <div class="row">
      @foreach($merekchunk as $mereks)
      <div class="col-sm-4">
        <a class="block-link" href="/tipe/{{ $mereks->id }}">
          <div class="card">
            <div class="thumbnail">
              <img src="{{ $mereks->imagePath }}">
              <div class="caption">
                <h4>{{ $mereks->nama }}</h4>
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    @endforeach

      {{$merek->links()}}
  </div>
</div>
@endsection
