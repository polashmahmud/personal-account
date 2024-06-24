<?php

namespace App\Policies;

use App\Models\Bazar;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BazarPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Bazar $bazar)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Bazar $bazar)
    {
    }

    public function delete(User $user, Bazar $bazar)
    {
    }

    public function restore(User $user, Bazar $bazar)
    {
    }

    public function forceDelete(User $user, Bazar $bazar)
    {
    }
}
