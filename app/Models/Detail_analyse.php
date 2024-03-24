<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_analyse extends Model
{
    use HasFactory;
    protected $fillable = ['analyse_id', 'type_analyse_id', 'valeur'];
    public function analyse()
    {
        return $this->belongsTo(Analyse::class);
    }
    public function type_analyse()
    {
        return $this->belongsTo(Type_analyse::class);
    }
}
