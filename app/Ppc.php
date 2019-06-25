<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppc extends Model
{
    protected $guarded = [];

    public function curso()
    {
        return $this->belongsTo(\App\Curso::class);
    }
}
