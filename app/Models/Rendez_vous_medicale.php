<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous_medicale extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'date', 'heure', 'type', 'statut'];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
