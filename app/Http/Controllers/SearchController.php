<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merek;

class SearchController extends Controller
{
  public function search()
  {
      return view('Merek');
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function autocomplete(Request $request)
  {
      $data = mereks::select("nama")->where("nama","LIKE","%{$request->input('query')}%")->get();
      return response()->json($data);
  }
}
