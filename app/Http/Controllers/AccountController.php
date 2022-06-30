<?php

namespace App\Http\Controllers;

use App\Service\Users\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    protected  UserService $userService;
    /**
     * AccountController constructor.
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param Request $request
     */
    public function createAccount(Request $request) {
        //todo
        $this->userService->createAccount($request->all());
        return view('login');
    }
}
