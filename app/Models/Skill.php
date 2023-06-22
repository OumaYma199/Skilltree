<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Skill extends Model
{
    protected $fillable = ['nom', 'niveau_acquisition'];
    //Retourne une collection des compétences enfants d'une compétence donnée
    public function children()
    {
        return $this->hasMany(Skill::class, 'parent_id');
    }
    //Retourne la compétence parente d'une compétence donnée.
    public function parent()
    {
        return $this->belongsTo(Skill::class, 'parent_id');
    }
    public function jobs()
    {
        //Many-to-many
        return $this->belongsToMany(Job::class);
    }

    use HasFactory;
}
