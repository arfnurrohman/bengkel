<?php

namespace App\Http\Controllers;

use App\Models\bengkel;
use Illuminate\Http\Request;

class PesanControlle extends Controller
{
    public function index($id)
    {
    	$datauser = bengkel::where('id', $id)->first();

        return view("halaman/pesan",["datauser" => $datauser]);
}
}