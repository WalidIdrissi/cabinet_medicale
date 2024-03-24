<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    use HasFactory;
    protected $fillable = ['rendez_vous_id', 'date', 'type_traitement_id', 'statut_paiement'];

    public function rendez_vous()
    {
        return $this->belongsTo(Rendez_vous::class);
    }
    public function type_traitement()
    {
        return $this->belongsTo(Type_traitement::class);
    }
}
