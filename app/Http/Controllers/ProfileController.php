<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_address;
use DB;
use Auth;

class ProfileController extends Controller
{
    public function index(){
      return view('profil.user_profile');
    }
    public function simpanAlamat(Request $request)
    {
      $this->validate($request, [
        'nama_penerima'=>'required',
        'nomor_hp'=>'required',
        'alamat'=>'required'
      ]);

      $User_address = new User_address;
      $User_address->id_user = auth::user()->id;
      $User_address->nama_penerima = $request->input('nama_penerima');
      $User_address->nomor_hp = $request->input('nomor_hp');
      $User_address->alamat = $request->input('alamat');
      $User_address->save();
      return redirect('/')->with('success','Address Saved');
    }
}
