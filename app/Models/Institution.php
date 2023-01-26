<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Institution extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;

    protected $keyType = 'string';
    protected $guarded = [];
    protected $hidden = ['id', 'password'];

    /**
     * Get the adresse for the institution.
     */
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
