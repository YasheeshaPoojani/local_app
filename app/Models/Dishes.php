<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{   
    protected $table = 'dishes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Name',
        'Description',
        'Phone'
    ];

    use HasFactory;
}
