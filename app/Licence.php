<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Licence extends Model
{
    use SoftDeletes;
    protected $fillable = ['enseigne', 'siret', 'nombre_postes', 'num_magasin', 'duree_utilisation', 'licence', 'code_licence'];
}