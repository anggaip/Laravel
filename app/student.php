<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function kelas()
    {
    	return $this->belongsTo('App\Kelas');
    }
}
