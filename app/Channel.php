<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable=[
        'name','image'
    ];
    
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
