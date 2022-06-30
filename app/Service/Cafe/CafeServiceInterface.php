<?php
namespace App\Service\Cafe;

interface CafeServiceInterface {
    /**
     * @param $data
     * @return mixed
     */
    public function getAllCafeList();

    /**
     * add cafee
     * @param $cafe
     * @return mixed
     */
    public function addCafe($cafe);

    /**
     * update cafe
     * @param $cafe
     * @return mixed
     */
    public function editCafe($cafe);

    /**
     * delete cafe
     * @param $id
     * @return mixed
     */
    public function deleteCafe($id);
}
