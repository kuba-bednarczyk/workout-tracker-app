<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'user_id', 'muscle_group_id', 'description'];

    public function muscleGroup() {
        return $this->belongsTo(MuscleGroup::class);
    }

    public function workoutSets() {
        return $this->hasMany(WorkoutSet::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
