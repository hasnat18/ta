<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'level_id',
        'data',
    ];

    public function level()
    {
        return $this->belongsTo(level::class);
    }


}
