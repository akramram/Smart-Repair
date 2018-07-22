<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merek;
use App\Tipe;
use App\Summary;
use App\Pemesanan;
use DB;
use Session;
use Auth;
//use App\Simpan;

class ListMerekController extends Controller
{
  public function index(){
    $products=merek::paginate(9);
    return view('Repair.ListMerek',['merek'=>$products]);
  }


  public function cari($id){

    $tipes = Tipe::find($id);
    $mer = Tipe::where('id_merek','=',$id)->paginate(8);
    return view('Repair/ListModel', compact('tipes', 'mer'));

  }

  public function pilih(Request $request,$id){
    // $terpilih = new Pemesanan;
    // $terpilih->id_user = Auth::user()->id;
    // $terpilih->id_merek =  $id;
    // $terpilih->save();
    // $tipes = Tipe::find($id);
    // $mer = Tipe::where('id_merek','=',$id)->paginate(8);
    // return view('Repair/ListModel', compact('tipes', 'mer'));

    $data = $request->session()->all();
    $request->session()->put('id_merek',$id);

    // $request->id_merek = $id;
    // $tipes = Tipe::find($id);
    // $mer = Tipe::where('id_merek','=',$id)->paginate(8);
    return view('Repair/ListModel', compact('tipe'));
  }
}
