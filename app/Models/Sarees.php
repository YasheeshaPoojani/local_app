<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarees extends Model
{
    protected $table = 'sarees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Name',
        'Description',
        'Phone'
    ];
    use HasFactory;
    use HasFactory;
}
