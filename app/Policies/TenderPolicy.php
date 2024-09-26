<?php

namespace App\Policies;

use App\Models\Request;
use App\Models\Tender;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Access\HandlesAuthorization;

class TenderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Tender $tender)
    {
        if ($user->tenders->count() > 0) return true;
        else return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        dd('inja nv policy tender');
//        if ($request)
//            $tender = auth()->user()->tenders->where('request_id', $request->id)->first();
//        else
//            $tender = auth()->user()->tenders->where('request_id', null)->first();
//        if ($user->tenders->count() == 0 || !$tender || Carbon::now() > $tender->expired_at)
//            return true;
//        else
//            return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Tender $tender)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Tender $tender)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Tender $tender)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Tender $tender)
    {
        //
    }

    public function createTenderOffer(User $user, Tender $tender)
    {
        if ($user->tenders && $user->id != $tender->user_id)
            return true;
        else
            return false;
    }
}
