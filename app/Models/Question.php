<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;

class Question extends Model implements HasMedia
{

    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;

    public function registerMediaCollections()
    {
        // $this->addMediaCollection('gallery');
        $this->addMediaCollection('gallery')
            ->maxNumberOfFiles(20);
    }

    public function registerMediaConversions(Media $media = null)
    {
        // $this->addMediaConversion('detail_hd')
        //     ->width(1920)
        //     ->height(1080)
        //     ->performOnCollections('gallery');
        $this->autoRegisterThumb200();
    }

    protected $fillable = [
        'question',
        'score',
        'exam_id',
        'use_typingdna',
        'check_plagiarism',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/questions/' . $this->getKey());
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }
}
