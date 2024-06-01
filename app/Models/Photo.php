<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'age',
        'job_type',
        'availability',
        'expected_salary',
        'image_path', // store the image path
    ];

    public function hires()
    {
        return $this->hasMany(Hire::class);
    }
}
