<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studyFees extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'annualFees',
        'annualFeesNumber',
        'details',
        'annualFeesDate',
        'univercityCollegeID',
    ];

       //علاقة الرسوم الدراسية مع كليات الجامعة 

       public function univCollege()
       {
           return $this->belongsTo(UniversityCollege::class, 'univercityCollegeID');
       }
}
