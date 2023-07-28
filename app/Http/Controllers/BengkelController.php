<?php

namespace App\Http\Controllers;


use App\Models\bengkel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BengkelController extends Controller

{



    public function databengkel()
    {
       
        $datauser = DB::table('bengkels')->paginate(5);

        return view('bengkel.databengkel', ['databengkel' => $datauser]);
    }
    public function formbengkel()
    {
        return view('bengkel.formbengkel');
    }
    public function addbengkel(Request $request)
    {
        $user = new bengkel;
        $user->nama = $request->nama;
        $user->jenis = $request->jenis;
        $user->harga = $request->harga;
        $user->keterangan = $request->keterangan;
        if($request->hasFile('foto')){
            $destination_path = 'public/images';

            $user->image = $request->file('foto')->getClientOriginalName();
            $image = $request->file('foto');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAs($destination_path,$image_name);
            
        }
        $user->save();
        $datauser = DB::table('bengkels')->get();
        return redirect('/databengkel')->with('status', 'Data Berhasil Ditambahkan!');
    }
    public function editbengkel($id)
    {
        $user = DB::table('bengkels')->find($id);
        return view('bengkel.editbengkel', ["bengkel" => $user]);
    }
    
    public function updatebengkel(Request $request)
    {
        $user = bengkel::find($request->id);
        $user->nama = $request->nama;
        $user->jenis = $request->jenis;
        $user->harga = $request->harga;
        $user->keterangan = $request->keterangan;
        if($request->hasFile('foto')){
            if(Storage::exists('public/images/'.$user->image)){
                Storage::delete('public/images/'.$user->image);
                
    
            }
            $destination_path = 'public/images';
            $user->image = $request->file('foto')->getClientOriginalName();
            $image = $request->file('foto');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAs($destination_path,$image_name);
            // $destination_path = 'public/images';
            // $user->image = $request->file('foto')->getClientOriginalName();
            // $user = $request->file('foto');
            // $gambar_name = $user->getClientOriginalName();
            // $request->file('foto')->storeAs($destination_path, $gambar_name);
        }
        $user->save();
        return redirect("/databengkel");
    }
    public function deletebengkel($id)
    {
        $user = bengkel::find($id);
        if(Storage::exists('public/images/'.$user->image)){
            Storage::delete('public/images/'.$user->image);
            $user->delete();

        }else{
            $user->delete();
        }
        return redirect("/databengkel");
    }


}