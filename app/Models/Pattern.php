<?php

namespace App\Models;

use App\Enums\QuestionColor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function jobs():HasMany
    {
        return $this->hasMany(Job::class);
    }
    // public function jobs():HasMany
    // {
    //     return $this->hasMany(Job::class);
    // }
    public function functionalAreas()
    {
        return $this->hasManyThrough(FunctionalArea::class, Job::class, 'pattern_id', 'id', 'id', 'functional_area_id');
    }
}
