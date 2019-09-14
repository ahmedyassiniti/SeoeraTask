<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public function language(){
        
        return $this->belongsTO('App\Language');
    }
}
