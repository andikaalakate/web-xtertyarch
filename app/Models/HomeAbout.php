<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    use HasFactory;

    protected $fillable = [
        'tx_title',
        'tx_description',
        'image',
        'is_active'
    ];

    protected $casts = [
        'tx_title' => 'array',
        'tx_description' => 'array',
        'image' => 'array',
        'is_active' => 'boolean'
    ];
}
