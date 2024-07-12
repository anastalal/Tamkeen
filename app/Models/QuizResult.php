<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pattern;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizResult extends Model
{
    use HasFactory;
   

    protected $fillable = ['user_id', 'pattern_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pattern()
    {
        return $this->belongsTo(Pattern::class);
    }
}
