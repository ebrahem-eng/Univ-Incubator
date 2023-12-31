<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class universityAdsCollege extends Model
{
    use HasFactory;

    protected $fillable = [
        'universityAdsID',
        'collegeID'
    ];

     //علاقة اعلانات الجامعة مع الكليات

     public function univCollegeAds()
     {
         return $this->belongsTo(UniversityAds::class, 'universityAdsID');
     }

       //علاقة الكليات مع الاعلانات

       public function collegeAds()
       {
           return $this->belongsTo(College::class, 'collegeID');
       }

}
