<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\USER;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class HalamanController extends Controller
{
  public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$datauser = DB::table('bengkels')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
        return view("halaman/halaman1",["datauser" => $datauser]);
 
	}
  public function halaman1()
  {
    $datauser = DB::table('bengkels')->paginate(8);
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
 public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
      
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
        return redirect("/halaman4");
    }
    public function halaman3()
    {
    
    return view("halaman/halaman3");
  }
    
  }