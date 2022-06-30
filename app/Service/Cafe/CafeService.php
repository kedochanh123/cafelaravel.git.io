<?php


namespace App\Service\Cafe;


use App\Models\TblCafe;

class CafeService implements CafeServiceInterface
{

    /**
     * @inheritDoc
     */
    public function getAllCafeList()
    {
        return TblCafe::all('*')->toArray();
    }

    /**
     * function add cafe
     * @param $cafe
     */
    public function addCafe($cafe)
    {
        return TblCafe::create($cafe);
    }

    /**
     * funciton edit cafe
     * @param $cafe
     * @return mixed|void
     */
    public function editCafe($cafeInfo)
    {
        $cafe = TblCafe::find((int)$cafeInfo['idEdit']);
        $cafe->typeName = $cafeInfo['typeNameE'];
        $cafe->describe = $cafeInfo['describeE'];
        $cafe->price = $cafeInfo['priceE'];
        $cafe->image = $cafeInfo['imageE'];
        $cafe->save();
    }

    /**
     * delete cafe
     * @param $id
     * @return mixed|void
     */
    public function deleteCafe($id)
    {
        return TblCafe::find($id)->delete();
    }
}
