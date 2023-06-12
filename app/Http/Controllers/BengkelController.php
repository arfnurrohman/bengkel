<?php

namespace App\Http\Controllers;


use App\Models\bengkel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class BengkelController extends Controller
{
    public function databengkel()
    {
        $databengkel = DB::table('bengkels')->get();
        //dd($datauser);
        return view('bengkel.databengkel', ['databengkel' => $databengkel]);
    }
    public function formbengkel()
    {
        return view('bengkel.formbengkel');
    }
    public function addbengkel(Request $request)
    {
        $bengkel = new bengkel;
        $bengkel->nama = $request->nama;
        $bengkel->jenis = $request->jenis;
        $bengkel->harga = $request->harga;
        $bengkel->keterangan = $request->keterangan;
        
        if($request->hasFile('foto')){
            $destination_path = 'public/images';

            $bengkel->image = $request->file('foto')->getClientOriginalName();
            $image = $request->file('foto');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAs($destination_path,$image_name);
            
        }
        $bengkel->save();
        $datauser = DB::table('users')->get();
        return redirect('/datauser')->with('status', 'Data Berhasil Ditambahkan!');
    }
}