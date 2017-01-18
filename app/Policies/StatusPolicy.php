<?php

namespace App\Policies;

use App\Models\Status;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class StatusPolicy
{
    use HandlesAuthorization;

    public function destroy(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }
}
