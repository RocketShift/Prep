<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function keywords(){
    	return $this->hasMany(Keyword::class);
    }
}