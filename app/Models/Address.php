<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $guarded = [];
    protected $table = 'adresses';
    protected $hidden = ['id', 'state_id', 'country_id', 'created_at', 'updated_at'];

    /**
     * Get the country for the address.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the state for the address.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Get the user for the address.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the institution for the address.
     */
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
