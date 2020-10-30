<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;

class Task extends Model
{
    protected $fillable = [
        'title',
        'body',
        'answer',
        'score',
        'quiz_id',
        'isCorrect',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/tasks/'.$this->getKey());
    }

    public function quiz() {
        return $this->belongsTo(Quiz::class  , 'quiz_id');
    }
}
