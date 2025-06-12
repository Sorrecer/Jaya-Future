<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'provide_name',
        'description',
        'program_type',
        'requirements',
        'salary_range',
        'tag_id',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
