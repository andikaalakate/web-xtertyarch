<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeFeature extends Model
{
    protected $fillable = [
        'tx_description',
        'list_check',
        'image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'list_check' => 'array',
        'image' => 'array'
    ];

    use HasFactory;
}
