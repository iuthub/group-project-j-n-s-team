<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
        'school_name', 'address', 'teachers_number', 'pupils_number', 'website', 'image'
    ];

    public function applications(){
        return $this->hasMany(Application::class);
    }
}
