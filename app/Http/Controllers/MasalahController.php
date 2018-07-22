<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masalah;
use App\Merek;
use App\Tipe;
use App\Summary;
use App\Pemesanan;
use DB;
use Session;
use Auth;

class MasalahController extends Controller
{
    public function index(){
      $masalah = Masalah::paginate(6);
      return view('Repair.ListMasalah', compact('masalah'));
    }

    public function pilih(Request $request,$id){
      $data = $request->session()->all();
      $request->session()->put('id_tipe',$id);
      $request->session()->put('id_masalah',$id);
      $masalah = Masalah::paginate(6);
      // $request->id_merek = $id;
      return view('Repair.ListMasalah', compact('masalah'));
    }

}
