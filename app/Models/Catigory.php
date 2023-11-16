<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catigory extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'name',
        'type',
    ];

    //علاقة الفئات مع الجامعات

    public function university()
    {
        return $this->hasMany(University::class,'catigory_id');
    }
}
