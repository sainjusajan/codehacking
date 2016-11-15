<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $user_uploads = 'uploads/';
    protected $fillable =[

      'file'

    ];

//    public function getFileAttribute($photo){
//
//        return $this->user_uploads.$photo;
//
//    }
}
