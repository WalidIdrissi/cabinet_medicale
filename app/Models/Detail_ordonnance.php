<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_ordonnance extends Model
{
    use HasFactory;
    protected $fillable = ['ordonnance_id', 'medicament_id', 'dosage'];
    public function ordonnance()
    {
        return $this->belongsTo(Ordonnance::class);
    }
    public function medicament()
    {
        return $this->belongsTo(Medicament::class);
    }
}
