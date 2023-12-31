<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityAds extends Model
{
    use HasFactory;

    protected $fillable = [
        'universityID',
        'collegeID',
        'adsID',
    ];

    // //علاقة الكليات مع الاعلانات

    // public function collegeAds()
    // {
    //     return $this->belongsTo(College::class, 'collegeId');
    // }

    //علاقة الاعلانات مع الجامعات والكليات

    public function adsUniv()
    {
        return $this->belongsTo(Ads::class, 'adsID');
    }

    //علاقة الجامعات مع الاعلانات

    public function univAds()
    {
        return $this->belongsTo(University::class, 'universityId');
    }

      //علاقة اعلانات الجامعة مع الكليات

      public function univCollegeAds()
      {
          return $this->hasMany(universityAdsCollege::class, 'universityAdsID');
      }
}
