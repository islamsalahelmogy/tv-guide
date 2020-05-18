<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Channel;
use App\Models\ProgramTimes;


class Program extends Model
{
    
 protected $fillable=[
     'title','season','image_url','descripion','repeeted','sequence','valid_from','valid_to'
    ];


 public function program_times()
    {
        return $this->belongsToMany('App\Models\Channel','App\Models\ProgramTimes');
    }
 

}
