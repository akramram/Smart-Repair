@extends('layouts.master')

@section('title')
Smart Repair
@endsection
@section('content')
<div class="vertical-center text-center">
  <div class="container">
    <h2 class="page-header text-center" style="margin-top:20px;">Summary</h2>
    <div class="row">
      <div class="col-sm-12 border border-warning rounded-top">
        <div style="padding:20px;">
          <div class="row">
            <div class="col-sm-6">
              {{$addresses[0]->nama_penerima}}
            </div>
            <div class="col-sm-6">
              {{$addresses[0]->nomor_hp}}
            </div>
          </div>
          <div class="col-sm-12">
            {{$addresses[0]->alamat}}
          </div>
        </div>
      </div>

      <div class="col-sm-12 border">
        <div style="padding:20px;">
          <div class="row">
            <div class="col-sm-6">
              {{$merek->nama}}
            </div>
            <div class="col-sm-6">
              {{$tipe->nama}}
            </div>
          </div>
          <div class="col-sm-12 text-left">
            Kerusakan
            <div class="row">
              <div class="col-sm-6">
                {{$masalah->deskripsi}}
              </div>
              <div class="col-sm-6 text-right">
                Rp {{$masalah->harga}}
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 text-left border">
        Pengiriman
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Jemput
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Kirim
          </label>
        </div>
      </div>

      <div class="col-sm-6 text-left">
        Harga Total Komponen
      </div>
      <div class="col-sm-6 text-right">
        Rp {{$masalah->harga}}
      </div>

      <div class="col-sm-6 text-left">
        Harga Jasa
      </div>

      <div class="col-sm-6 text-right">
        Rp <?php
        if($masalah->harga > 100000){
          $hargakomponen = 50000;
          echo $hargakomponen;
        }?>
      </div>

      <div class="col-sm-6 text-left">
        Biaya Pengiriman
      </div>

      <div class="col-sm-6 text-right">
        Rp <?php
        echo "0";
         ?>
      </div>

    </div>

    <div class="container-fluid">
      <div class="row border border-primary" style="margin-top:25px; padding:10px;">
        <div class="col-sm-6 text-left">
          Total : Rp <?php
          $total = $hargakomponen + $masalah->harga;
          echo $total;
           ?>
        </div>
        <div class="col-sm-6 text-right">
          <a  href="{{action('SummaryController@SimpanTransaksi')}}"><button class="btn btn-danger">Bayar Sekarang</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
