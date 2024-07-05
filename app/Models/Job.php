<?php

namespace App\Models;

use App\Models\Pattern;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'pattern_id',
        'functional_area_id'
    ];
    public function functional_area()
    {
        return $this->belongsTo(FunctionalArea::class);
    }
    public function pattern()
    {
        return $this->belongsTo(Pattern::class);
    }
    

}
