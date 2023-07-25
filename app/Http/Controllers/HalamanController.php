<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\USER;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
  public function halaman1()
  {
    $datauser = DB::table('bengkels')->get();
  return view("halaman/halaman1",["datauser" => $datauser]);
}
  

public function halaman2()
  {
    $datauser = DB::table('users')->get();
    return view("halaman/halaman2",["datauser" => $datauser]);
}



 public function HALAMAN4()
 {
   $user = User::where('id', Auth::user()->id)->first();

   return view("halaman/halaman4", compact('user'));
 }
}
