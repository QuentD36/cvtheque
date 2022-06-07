<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * Récupération des tous les profs qui ont telle ou telle compétence(s)
     */
    public function professionnels(){

        return $this->belongsToMany(Professionnel::class)->withTimestamps();
    }
}
