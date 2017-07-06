<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sura extends Model
{
    public function ayas() {
        return $this->hasMany(Aya::class);
    }
}
