<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     protected $fillable = [
        'title', 'sequence', 'side',
    ];

    public function scopeLeftitems($query){
    	return $query->where('side',0)->orderBy('sequence');
    }

    public function scopeRightitems($query){
    	return $query->where('side',1)->orderBy('sequence');
    }
}
