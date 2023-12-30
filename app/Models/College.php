<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img',
        'created_by'
    ];

    //علاقة الكليات مع المسؤولين 

    public function Gadmin()
    {
        return $this->belongsTo(GAdmin::class, 'created_by');
    }

    //علاقة الكليات مع الجامعات

    public function university()
    {
        return $this->hasMany(UniversityCollege::class, 'collegeId');
    }
}
