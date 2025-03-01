<?php

namespace App\Policies;

use App\User;
use App\Models\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}
