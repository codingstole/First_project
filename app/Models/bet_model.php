<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bet_model extends Model
{
    protected $table = 'bet_models'; 
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'coin',
        'price',
        'time',
       
    ];

}
