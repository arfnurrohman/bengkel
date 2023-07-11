<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bengkel extends Model
{
    
    public function pesanan_detail() 
	{
	     return $this->hasMany('App\Models\PesananDetail','bengkel_id', 'id');
	}
}
