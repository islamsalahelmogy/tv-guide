<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Channel extends Model
{
    protected $fillable = [
        
        'name','image','description'
    ];


    public function program_times()
    {
        return $this->belongsToMany('App\Models\Program','App\Models\ProgramTimes');
    }
}
