<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialization extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'name',
        'img',
        'created_by',
    ];

    //علاقة الاختصاصات مع كليات الجامعة  

    public function SpecializationCollegeUniv()
    {
        return $this->hasMany(Specialization::class, 'specializationID');
    }

    //علاقة الاختصاصات مع الادمن

    public function GAdmin()
    {
        return $this->belongsTo(GAdmin::class, 'created_by');
    }
}
