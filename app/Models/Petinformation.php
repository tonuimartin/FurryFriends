<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petinformation extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'title',
        'info_description',
        'pet_information_image'
        
    ];
}
