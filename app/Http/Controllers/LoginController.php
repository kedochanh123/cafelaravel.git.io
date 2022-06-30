<?php

namespace App\Http\Controllers;

use App\Service\Users\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\CafeController as CafeController;

class LoginController extends Controller
{
    protected $userService;

    /**
     * LoginController constructor.
     * @param $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * check authentication app
     * @param Request $request
     */
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        // Nếu sai validate trả vê thông báo lỗi
        if ($validator->fails()) {
            return view('login', ['email'=>$request->email, 'password'=>$request->password, 'error_login'=>"Validate is invalid!"]);
        }
        // call đến service check điêu kiện đăng nhập
        $flagLoginSucces = $this->userService->checkAuthorLogin($request);
        // nếu login thành công
        if ($flagLoginSucces) {
            // di chuyển sang trang view list cafe
            return redirect()->action([CafeController::class, 'index']);
        } else {
            // login thất bại
            return view('login', ['email'=>$request->email, 'password'=>$request->password, 'error_login'=>"Account or password not ok!"]);
        }
    }
}
