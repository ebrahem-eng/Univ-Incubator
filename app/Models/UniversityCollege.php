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
}
