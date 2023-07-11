<?php

namespace App\Http\Controllers;
use App\Models\bengkel;
use Illuminate\Http\Request;
use App\Models\pesanan;
use App\Barang;

use App\Models\User;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Alert;
use Carbon\Carbon;
class PesanController extends Controller
{
    public function index($id)
{
  $datauser = bengkel::where('id', $id)->first();

  return view("halaman/index",["datauser" => $datauser]);
}
public function pesan(Request $request, $id)
{	
  $barang = Bengkel::where('id', $id)->first();
  $tanggal = Carbon::now();
 
  if($request->jumlah_pesan > $barang->jenis)
  {
    return redirect('pesan/'.$id);
  }

  //cek validasi
  $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
  //simpan ke database pesanan
  if(empty($cek_pesanan))
  {
    $pesanan = new Pesanan;
    $pesanan->user_id = Auth::user()->id;
    $pesanan->tanggal = $tanggal;
    $pesanan->status = 0;
    $pesanan->jumlah_harga = 0;
        $pesanan->kode = mt_rand(100, 999);
    $pesanan->save();
  }
  

  //simpan ke database pesanan detail
  $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

  //cek pesanan detail
  $cek_pesanan_detail = PesananDetail::where('bengkel_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
  if(empty($cek_pesanan_detail))
  {
    $pesanan_detail = new PesananDetail;
    $pesanan_detail->bengkel_id = $barang->id;
    $pesanan_detail->pesanan_id = $pesanan_baru->id;
    $pesanan_detail->jumlah = $request->jumlah_pesan;
    $pesanan_detail->jumlah_harga = $barang->harga*$request->jumlah_pesan;
    $pesanan_detail->save();
  }else 
  {
    $pesanan_detail = PesananDetail::where('bengkel_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

    $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

    //harga sekarang
    $harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
    $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
    $pesanan_detail->update();
  }

  //jumlah total
  $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
  $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
  $pesanan->update();
  
     
        return redirect('halaman1')->with('success', 'Task Created Successfully!');
    	}
      public function check_out()
      {
          $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
     $pesanan_details = [];
          if(!empty($pesanan))
          {
              $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
  
          }
         
          return view('halaman/check_out', compact('pesanan', 'pesanan_details'));
      return redirect('halaman1');
    }
      
}