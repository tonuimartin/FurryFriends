<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pet extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'pet_id';
    
    protected $fillable = [
        
        'pet_name',
        'age',
        'pet_gender',
        'breed',
        'pet_type',
        'source_id',
        'description',
        'pet_image',
        'price',
        'status'
    ];

    public function scopeFilter($query, array $filters)
    {

        if ($filters['search'] ?? false) {
            $query->where('pet_name', 'like', '%' . request('search') . '%')
                ->orWhere('age', 'like', '%' . request('search') . '%')
                ->orWhere('breed', 'like', '%' . request('search') . '%')
                ->orWhere('pet_gender', 'like', '%' . request('search') . '%');
        }
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'id');
    }
}