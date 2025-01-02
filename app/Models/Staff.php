<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $fillable = [
        'name',
        'title',
        'academic_rank',
        'degree',
        'phone',
        'email',
        'department_id',
    ];
    public $timestamps = false;
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
