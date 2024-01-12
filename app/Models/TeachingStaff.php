<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeachingStaff extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'age',
        'gender',
        'status',
        'Designation',
        'img',
        'univercityCollegeID',
        'created_by',
    ];

      //علاقة الكادر التدريسي مع كليات الجامعة

      public function univCollege()
      {
             return $this->belongsTo(UniversityCollege::class,'univercityCollegeID');
     }

       //علاقة الكادر التدريسي مع  المسؤؤل المحلي

       public function ladmin()
       {
              return $this->belongsTo(LAdmin::class,'created_by');
      }
     
}
