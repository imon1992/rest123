<?php
class RestServer
{
    protected $reqMethod;
    protected $url;

    $this->setMethod('post'.ucfirst($dir), $_POST['params']);public function run()
    {
        // $this->url = list($s, $server, $api, $dir, $index, $class, $data) = explode("/", $_SERVER['REQUEST_URI'], 7);
        $this->url = list($s, $user, $REST, $server, $api, $dir, $index, $class, $data) = explode("/", $_SERVER['REQUEST_URI'], 7);
        //var_dump($_POST['asd']);
        //var_dump($this->url);
        //var_dump(file_get_contents("php://input"));
        $this->reqMethod = $_SERVER['REQUEST_METHOD'];
        var_dump(ucfirst($dir));
        switch ($this->reqMethod)
        {
        case 'GET':
            $this->setMethod('get'.ucfirst($dir), explode('/', $index));
            break;
        case 'POST':
            $this->setMethod('post'.ucfirst($dir), $_POST['params']);
            break;
        case 'PUT':
            $this->setMethod('put'.ucfirst($dir), $_POST['params']);
            break;
        case 'DELETE':
            $this->setMethod('delete'.ucfirst($dir), $_POST['params']);
            echo 'delete';    
        }
    }

    public function setMethod($classMethod, $param=false)
    {
        //var_dump($param);
        if(method_exists($this, $classMethod))
        {
            echo $this->$classMethod($param);
        }
        else
        {
            echo 'ERROR!';
        }
    }
}
