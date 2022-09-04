<?php

namespace App\Observers;

// use Location;
use App\Models\User;
use App\Models\UserCountry;
use App\Models\CountOfVisits;
use Stevebauman\Location\Facades\Location;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $user->image = 'profileImage/defaultImage.png';

        $user->save();

        $UserIp = request()->ip();

        $location = Location::get($UserIp);

        UserCountry::create([

            'user_id' => $user->id,

            'country' => $location->countryName,

        ]);
        $isExsistCountry = CountOfVisits::where('country', $location->countryName)->first();
        if ($isExsistCountry) {
            $isExsistCountry->update([
                'countVisits' => $isExsistCountry->countVisits + 1
            ]);
        } else {
            CountOfVisits::create([
                'country' => $location->countryName,
                'countVisits' => 1,
            ]);
        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
