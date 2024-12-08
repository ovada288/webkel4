<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'image_path',
    ];

}
