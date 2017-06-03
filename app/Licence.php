<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Licence extends Model
{
    use SoftDeletes;
    protected $fillable = ['enseigne', 'siret','code_naf','numero_tva','telephone','adresse','code_postal','ville','pays', 'nombre_postes', 'duree_utilisation', 'licence', 'code_licence', 'user_id', 'etat', 'site'];
    protected $appends = ['date_expiration'];

    public function revendeur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getDateExpirationAttribute()
    {
        return ($this->duree_utilisation) ? Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->addMonths($this->duree_utilisation)->format('d-m-Y') : 'Indéterminée';
    }

}
