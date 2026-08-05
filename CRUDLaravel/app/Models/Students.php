<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 

class Students extends Model
{
    protected $table = 'students';
     public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'course',
         'course_id',
        'year',
        'sex',
        'birthdate',
        'number',
        'address',
        'image',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
