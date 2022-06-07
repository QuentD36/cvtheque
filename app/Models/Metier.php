<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metier extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'slug',
    ];

    /**
     * Cette méthode récupère les professionnels d'un métier en particulier
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function professionnels(){

        return $this->hasMany(Professionnel::class);
    }
}
