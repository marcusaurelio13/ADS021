<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {

    public function condominio() {
        return $this->belongsTo('\App\Condominio');
    }

}
