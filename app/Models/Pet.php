<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pet extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'pet_name',
        'age',
        'pet_gender',
        'breed',
        'pet_type',
        'source_id',
        'description',
        'pet_image'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'id');
    }
}