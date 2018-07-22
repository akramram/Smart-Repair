<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_address;
use App\Pemesanan;
use App\Merek;
use Session;
use DB;
use Auth;
use Alert;

class SummaryController extends Controller
{
    public function index(){
      // $addresses = User_address::all();
      // return view('Repair.Summary',['address'=>$user_addresses]);
      $user_id =  Auth::id();
      $merek = Pemesanan::where('id_user','=',$user_id)->get('id');
      $addresses = DB::table('user_addresses')->where('id_user','=',$user_id)->get();
      return view('Repair.Summary');
    }

    public function simpan(Request $request, $id){
      $addresses = DB::table('user_addresses')->where('id_user','=',Auth::id())->get();

      $data = $request->session()->all();
      $request->session()->put('id_masalah',$id);
      return view('Repair.Summary', compact('summary','addresses'));
    }

    public function getSession(Request $request,$id){
      $addresses = DB::table('user_addresses')->where('id_user','=',Auth::id())->get();

      $data = $request->session()->all();
      $request->session()->put('id_masalah',$id);

      // $data = $request->session()->all();
      // $user_id = DB::table('users')->where('id_user','=',Session::get('id_user'))->get();
      $merek = DB::table('mereks')->where('id','=',Session::get('id_merek'))->first();
      $tipe = DB::table('tipes')->where('id','=',Session::get('id_tipe'))->first();
      $masalah = DB::table('masalahs')->where('id','=',Session::get('id_masalah'))->first();
      // $request->session()->flush();


      return view('Repair.Summary', compact('summary','addresses','user_id','merek','tipe','masalah'));
    }

    public function SimpanTransaksi(){
      $merek = DB::table('mereks')->where('id','=',Session::get('id_merek'))->first();
      $tipe = DB::table('tipes')->where('id','=',Session::get('id_tipe'))->first();
      $masalah = DB::table('masalahs')->where('id','=',Session::get('id_masalah'))->first();

      $terpilih = new Pemesanan;
      $terpilih->id_user = Auth::user()->id;
      $terpilih->id_tipe = $tipe->id;
      $terpilih->id_merek = $merek->id;
      $terpilih->id_masalah = $masalah->id;
      $terpilih->total_harga_komponen = $masalah->harga;
      $terpilih->total_harga_jasa = 50000;
      $terpilih->harga_pengiriman = 0;
      $terpilih->total_harga= $masalah->harga+50000+0;
      $terpilih->save();
      return redirect('/')->with('alert','Transaksi akan Segera di Proses');

    }

}
