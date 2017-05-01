<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Licence extends Model
{
    use SoftDeletes;
    protected $fillable = ['enseigne', 'siret', 'nombre_postes', 'duree_utilisation', 'licence', 'code_licence', 'user_id', 'etat'];

    public function revendeur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
