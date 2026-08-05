<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
  public function students(){
    return $this->hasMany(Students::class);
  }
  
}
