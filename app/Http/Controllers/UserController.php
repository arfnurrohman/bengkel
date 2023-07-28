<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function datauser()
    {
        $datauser = DB::table('users')->paginate(5);
        //dd($datauser);
        return view('user.datauser', ['datauser' => $datauser]);
    }
    public function mencari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$datauser = DB::table('users')
		->where('name','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
            return view('user.datauser', ['datauser' => $datauser]);
    }

    public function formuser()
    {
        return view('user.formuser');
    }
    public function adduser(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
      
        if($request->hasFile('foto')){
            $destination_path = 'public/images';

            $user->image = $request->file('foto')->getClientOriginalName();
            $image = $request->file('foto');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAs($destination_path,$image_name);
            
        }
        $user->save();
        $datauser = DB::table('users')->get();
        return redirect('/datauser')->with('status', 'Data Berhasil Ditambahkan!');
    }
    public function edituser($id)
    {
        $user = DB::table('users')->find($id);
        return view('user.edituser', ["user" => $user]);
    }
    
    public function updateuser(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
	if ($request->password != "" && !is_null($request->password)) {
            $user->password = bcrypt($request->password);
        }

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
        return redirect("/datauser");
    }
    public function deleteuser($id)
    {
        $user = User::find($id);
        if(Storage::exists('public/images/'.$user->image)){
            Storage::delete('public/images/'.$user->image);
            $user->delete();

        }else{
            $user->delete();
        }
        return redirect("/datauser");
    }


}