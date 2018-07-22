<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;

class ListModelController extends Controller
{
  public function index(){
    $products=Tipe::paginate(3);
    return view('Repair.Masalah',['tipe'=>$products]);
  }
  public function simpan(Request $request, $id){

        $data = $request->session()->all();
        // $request->session()->put('id_tipe',$id);
        $request->session()->put('id_merek',$id);
        // $tipes = Tipe::find($id);
        $mer = Tipe::where('id_merek','=',$id)->paginate(8);
        return view('Repair/ListModel', compact('tipe', 'mer'));


  }

    public function cari($id){

      $tipes = Tipe::find($id);
      $mer = Tipe::where('id_merek','=',$id)->paginate(8);
      return view('Repair/ListModel', compact('tipe', 'mer'));

    }
/*
  public function getModel($id_model){
    $id_model = modelhp::find($id_model);
    if($id_model !== null){
      $posts = $category->posts;
      return view('Repair.ListModel',['posts'=>$posts]);
    }*/
}
