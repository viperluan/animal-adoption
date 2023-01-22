<?php

namespace App\Observers;

use App\Models\Institution;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class InstitutionObserver
{
    /**
     * Handle the Institution "creating" event.
     *
     * @param  \App\Models\Institution  $institution
     * @return void
     */
    public function creating(Institution $institution)
    {
        $institution->id = Uuid::uuid4();
        $institution->password = Hash::make($institution->password);
    }

    /**
     * Handle the Institution "created" event.
     *
     * @param  \App\Models\Institution  $institution
     * @return void
     */
    public function created(Institution $institution)
    {
        //
    }

    /**
     * Handle the Institution "updated" event.
     *
     * @param  \App\Models\Institution  $institution
     * @return void
     */
    public function updated(Institution $institution)
    {
        //
    }

    /**
     * Handle the Institution "deleted" event.
     *
     * @param  \App\Models\Institution  $institution
     * @return void
     */
    public function deleted(Institution $institution)
    {
        //
    }

    /**
     * Handle the Institution "restored" event.
     *
     * @param  \App\Models\Institution  $institution
     * @return void
     */
    public function restored(Institution $institution)
    {
        //
    }

    /**
     * Handle the Institution "force deleted" event.
     *
     * @param  \App\Models\Institution  $institution
     * @return void
     */
    public function forceDeleted(Institution $institution)
    {
        //
    }
}
