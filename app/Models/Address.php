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

    /**
     * Get the country for the address.
     */
    public function country()
    {
        $this->belongsTo(Country::class);
    }

    /**
     * Get the state for the address.
     */
    public function state()
    {
        $this->belongsTo(State::class);
    }

    /**
     * Get the user for the address.
     */
    public function user()
    {
        $this->belongsTo(User::class);
    }

    /**
     * Get the institution for the address.
     */
    public function institution()
    {
        $this->belongsTo(Institution::class);
    }
}
