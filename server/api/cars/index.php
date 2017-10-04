<?php
include '../../app/RestServer.php';
class Cars extends RestServer
{
    public function __construct()
    {
        $this->run();
    }

    public function getCars($params = false)
    {
        
        echo 'get';
        //return var_dump($data) . '<br>Hello!?!?!?!? ';

    }

    public function postCars($params)
    {
        echo 'post';
    }

    public function putCars($params)
    {
        echo 'put';
    }

    public function deleteCars($id)
    {
    echo 'delete';
    }
}
$cars = new Cars();
