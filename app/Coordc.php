<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordc extends Model
{
    protected $guarded = [];

    public function curso()
    {
        return $this->hasMany(Curso::class);
    }
}
