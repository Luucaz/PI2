<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Curso extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'modalidade' => 0
    ];

    public function getModalidadeAttribute($attribute)
    {
        return $this->modalidadeOptions()[$attribute];
    }

    public function scopePresencial($query)
    {
        return $query->where('modalidade', 0);
    }

    public function scopeDistancia($query)
    {
        return $query->where('modalidade', 1);
    }

    public function scopeSemi($query)
    {
        return $query->where('modalidade', 2);
    }

    public function coordc()
    {
        return $this->belongsTo(Coordc::class);
    }

    public function modalidadeOptions()
    {
        return [
            0 => 'Presencial',
            1 => 'Distância',
            2 => 'Semi-Presencial',
        ];
    }

    public function ppc()
    {
        return $this->hasMany(\App\Ppc::class);
    }

}
