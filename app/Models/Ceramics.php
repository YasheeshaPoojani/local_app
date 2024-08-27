<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ceramics extends Model
{
    protected $table = 'ceramics';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Name',
        'Description',
        'Phone'
    ];
    use HasFactory;
}
