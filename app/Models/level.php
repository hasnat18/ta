<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'level',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function subjects()
    {
        return $this->HasMany(Subject::class);
    }

}
