<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ppc extends Model
{
    protected $guarded = [];

    public function cursos()
    {
        return $this-> hasMany(cursos::class);
    }
}
