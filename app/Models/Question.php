<?php

namespace App\Models;

use App\Enums\QuestionColor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'color',
    ];
    protected $casts = [
        'color' => QuestionColor::class,
    ];
}
