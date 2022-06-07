<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professionnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'cp',
        'ville',
        'telephone',
        'email',
        'naissance',
        'formation',
        'domaine',
        'source',
        'observation',
        'metier_id',
        'pdf',
    ];

    /**
     * Un professionnel ne possède qu'un seul métier (belongsTo)
     * La méthode métier (singulier) permet de rechercher le métier du pro.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function metier(){

        return $this->belongsTo(Metier::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * Récupération des compétences de tel ou tel pro.
     */
    public function competences(){

        return $this->belongsToMany(Competence::class)->withTimestamps();
    }
}
