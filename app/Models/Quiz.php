<?php

namespace App\Models;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Quiz extends Model
{
    protected $fillable = [
        'quiz_id',
        'quiz_name',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/quizzes/' . $this->getKey());
    }

    public function tasksWithRelationships()
    {
        return $this->hasMany(Task::class);
    }

    public function studentWithRelationship()
    {
        return $this->hasMany(Student::class);
    }

}
