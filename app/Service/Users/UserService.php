<?php

namespace App\Service\Users;

use App\Models\TblUser;
use App\Services\Users\UserServiceInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserService
{
    protected $model;
    /**
     * UserService constructor.
     */
    public function __construct(TblUser $user)
    {
        $this->model = $user;
    }

    /**
     * @param $user
     * @inheritDoc
     */
    public function checkAuthorLogin($user)
    {
        $email = isset($user->email)? $user->email : '';
        $password = isset($user->password)? $user->password : '';
        $user = DB::select('select * from tbl_users where email = ? AND password = ?', [$email, md5($password)]);
        if ($user) return true;
        return false;
    }

    /**
     * @param $user
     * @return mixed|void
     */
    public function createAccount($user)
    {
        $user['password'] = md5($user['password']);
        $user = TblUser::create($user);
        return $user;
    }
}
