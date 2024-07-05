<?php

namespace App\Models;

use App\Models\Pattern;
use App\Enums\QuestionColor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'color',
        'pattern_id'
    ];
    protected $casts = [
        'color' => QuestionColor::class,
    ];
    public function pattern()
    {
        return $this->belongsTo(Pattern::class);
    }
}
