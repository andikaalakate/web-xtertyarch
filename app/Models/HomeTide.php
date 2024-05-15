<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTide extends Model
{
    use HasFactory;

    protected $fillable = [
        'section','title', 'subtitle', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
