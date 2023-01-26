<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $guarded = [];
    protected $hidden = ['id', 'country_id', 'created_at', 'updated_at'];

    /**
     * Get the states for the country.
     */
    public function states()
    {
        return $this->hasMany(State::class);
    }

    /**
     * Get the adresses for the country.
     */
    public function adresses()
    {
        return $this->hasMany(Address::class);
    }
}
