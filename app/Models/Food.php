<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Name',
        'Description',
        'Phone'
    ];
    use HasFactory;
}
