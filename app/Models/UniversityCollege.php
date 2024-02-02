<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCollege extends Model
{
    use HasFactory;

    protected $fillable = [
        'universityId',
        'collegeId',
    ];

    public function college()
    {
        return $this->belongsTo(College::class, 'collegeId');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'universityId');
    }

    //علاقة كليات الجامعة مع الاختصاصات

     public function specializationUnivCollege()
      {
             return $this->hasMany(univercityCollegeSpecialization::class,'univercityCollegeID');
     }

        //علاقة كليات الجامعة مع الكادر التدريسي

        public function teachingStaff()
        {
               return $this->hasMany(TeachingStaff::class,'univercityCollegeID');
       }

          //علاقة كليات الجامعة مع الفعاليات

          public function event()
          {
                 return $this->hasMany(Event::class,'univercityCollegeID');
         }

            //علاقة كليات الجامعة مع الرسوم الدراسية

            public function studyFees()
            {
                   return $this->hasMany(studyFees::class,'univercityCollegeID');
           }
}
