<?php

namespace App\Repositories;

use App\Models\User;

class ProfileRepository extends BaseRepository
{
    public function getModel()
    {
        return new User();
    }
}