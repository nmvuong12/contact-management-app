<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'name',
        'code',
        'phone',
        'email',
        'website',
        'address',
        
    ];
    public $timestamps = false;
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
