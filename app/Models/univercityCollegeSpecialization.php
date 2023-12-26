<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class univercityCollegeSpecialization extends Model
{
    use HasFactory;

    protected $fillable = [
        'univercityCollegeID',
        'specializationID',
    ];

      //علاقة كليات الجامعة مع الاختصاصات

      public function CollegeUnivSpecialization()
      {
             return $this->belongsTo(UniversityCollege::class,'univercityCollegeID');
     }

        //علاقة كليات الجامعة مع الاختصاصات

        public function SpecializationCollegeUniv()
        {
               return $this->belongsTo(Specialization::class,'specializationID');
       }
}
