<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable =
        [
            'city',
            'gender_id',
            'orientation_id',
            'age',
            'content',
            'tag',
        ];
    use HasFactory;
}
