<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $guarded = [];
    protected $hidden = ['id', 'country_id', 'created_at', 'updated_at'];

    /**
     * Get the country for the state.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the adresses for the state.
     */
    public function adresses()
    {
        return $this->hasMany(Address::class);
    }
}
