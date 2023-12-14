<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LAdminUniversity extends Model
{
    use HasFactory;

    protected $fillable = [
    'universityId',
    'ladminID',
    ];

    public function ladmin()
    {
        return $this->belongsTo(LAdmin::class, 'ladminID');
    }


    public function university()
    {
        return $this->belongsTo(University::class, 'universityId');
    }

}
