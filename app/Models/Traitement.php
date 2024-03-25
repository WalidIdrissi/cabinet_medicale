<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    use HasFactory;
    protected $fillable = ['Rendez_vous_medicale_id', 'date', 'type_traitement_id', 'statut_paiement'];

    public function Rendez_vous_medicale()
    {
        return $this->belongsTo(Rendez_vous_medicale::class);
    }
    public function type_traitement()
    {
        return $this->belongsTo(Type_traitement::class);
    }
}
