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
        return $this->belongsTo(UniversityCollege::class, 'collegeId');
    }

    public function university()
    {
        return $this->belongsTo(UniversityCollege::class, 'universityId');
    }
}
