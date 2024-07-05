<?php

namespace App\Models;

use App\Enums\QuestionColor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pattern extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'color',
        'img',
        'description'

       
    ];
    protected $casts = [
        'color' => QuestionColor::class,
    ];
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
