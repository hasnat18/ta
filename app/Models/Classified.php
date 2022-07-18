<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'contact',
        'bname',
        'cnic',
        'web',
        'category',
        'description',
        'start_date',
        'end_date',
        'status',
        'image',
    ];
}
