<?php

namespace App\Http\Controllers;

use App\Models\bengkel;
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
public function halaman3()
  {
  return view("halaman/halaman3");
}
public function halaman4()
  {
  return view("halaman/halaman4"); 
}
}
