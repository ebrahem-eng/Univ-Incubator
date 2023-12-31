<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ads extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'title',
        'body',
        'details',
        'img',
        'created_by',
    ];


    //علاقة الاعلانات مع المسؤول المحلي

    public function ladmin()
    {
        return $this->belongsTo(LAdmin::class, 'created_by');
    }

    //علاقة الاعلانات مع الجامعات والكليات

    public function adsUnivCollege()
    {
        return $this->hasMany(UniversityCollegeAds::class, 'adsID');
    }
}
