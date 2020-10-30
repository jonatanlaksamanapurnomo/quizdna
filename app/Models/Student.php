<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;

class Student extends Model
{
    protected $fillable = [
        'email',
        'password',
        'name',
        'exam_id',

    ];

    protected $hidden = [
        'password',

    ];

    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/students/' . $this->getKey());
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }
}
