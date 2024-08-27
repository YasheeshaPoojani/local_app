<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blouses extends Model
{

    protected $table = 'blouses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Name',
        'Description',
        'Phone'
    ];
    use HasFactory;
    use HasFactory;
}
