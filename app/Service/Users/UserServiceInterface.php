<?php

namespace App\Services\Users;

interface UserServiceInterface
{
    /**
     * @param $user
     * @return mixed
     */
    public function checkAuthorLogin($user);

    /**
     * @param $user
     * @return mixed
     */
    public function createAccount($user);
}
