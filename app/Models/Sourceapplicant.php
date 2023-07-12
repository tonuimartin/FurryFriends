<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sourceapplicant extends Model
{
    use HasFactory;
    
       
    protected $fillable = [
        'source_name',
        'location',
        'source_type',
        'source_certification',
        'source_image',
        'source_description',
        'email',
        'password'
               
        
    ];

    protected $hidden='password';
    protected $casts =['password' =>'hashed',];

    // public function scopeFilter($query, array $filters)
    // {

    //     if ($filters['search'] ?? false) {
    //         $query->where('pet_name', 'like', '%' . request('search') . '%')
    //             ->orWhere('age', 'like', '%' . request('search') . '%')
    //             ->orWhere('breed', 'like', '%' . request('search') . '%')
    //             ->orWhere('pet_gender', 'like', '%' . request('search') . '%');
    //     }
    // }

    //public function owner()
    //{
     //   return $this->belongsTo(User::class, 'id');
    //}
}