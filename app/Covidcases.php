<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Covidcases extends Model
{
    protected $guarded = [];

    protected $casts = [
        'confirmed' => 'integer',
        'deaths' => 'integer',
        'recovered' => 'integer',
    ];

    public function scopeWhereCountry(Builder $builder, string $country): Builder
    {
        if (strlen($country) === 2) {
            $country = strtoupper($country);
            $builder->where('country_code', $country);
        } else {
            $country = ucwords($country);
            $builder->where('country', $country);
        }

        return $builder;
    }
}
