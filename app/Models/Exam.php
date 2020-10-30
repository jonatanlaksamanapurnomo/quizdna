<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Student;

class Exam extends Model
{
    protected $fillable = [
        'exam_name',
        'exam_code',
        'exam_start',
        'exam_end',

    ];


    protected $dates = [
        'exam_start',
        'exam_end',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/exams/' . $this->getKey());
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
