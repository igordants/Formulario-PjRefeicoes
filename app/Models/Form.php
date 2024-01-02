<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'categories',
        'subcategories',
        'preparations',
        'flavor',
        'menu',
        'served',	
        'opinion',	
        'service',
        'hygiene',
        'conditions',	
        'comfortable',	
        'general',	
        'experience',
    ];
}
