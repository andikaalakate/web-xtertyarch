<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHero extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'btx_explore', 'btx_contact', 'link_explore', 'link_contact', 'is_active', 
    ];

    protected $casts = [
        'image' => 'array',
        'is_active' => 'boolean',
    ];
}
