<?php

namespace App\Http\Controllers;

use App\Service\Cafe\CafeService;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    protected $cafeService;

    /**
     * CafeController constructor.
     */
    public function __construct(CafeService $cafeService)
    {
        $this->cafeService = $cafeService;
    }


    /**
     * Load first data in page
     */
    public function index() {
        // get data list
        $listCafe = $this->cafeService->getAllCafeList();

        // gửi kết quả về view
        return view('cafe.home', ['listAllCafe'=>$listCafe]);
    }

    /**
     * Add one cafe
     */
    public function addCafe(Request $request) {
        // add cafe
        $this->cafeService->addCafe($request->all());
        // quay ve man home
        return redirect()->action([CafeController::class, 'index']);
    }

    /**
     * Add one editCafe
     */
    public function editCafe(Request $request) {
        $this->cafeService->editCafe($request->all());
        // quay ve man home
        return redirect()->action([CafeController::class, 'index']);
    }

    /**
     * Delete editCafe
     */
    public function deleteCafe(Request $request) {
        $id = (int)$request->only('idDelete');
        $this->cafeService->deleteCafe($id);
        // quay ve man home
        return redirect()->action([CafeController::class, 'index']);
    }
}
