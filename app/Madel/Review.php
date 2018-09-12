<?php

namespace App\Madel;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
   public function product(){
       return $this->belongsTo(product::class);
   }
}
