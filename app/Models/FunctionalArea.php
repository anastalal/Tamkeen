<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FunctionalArea extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        // 'pattern_id'
    ];
    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
