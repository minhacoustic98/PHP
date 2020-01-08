<?php
namespace Main;
class Dispathcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        
        Routers::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller;
        //$file = ROOT . 'Controllers/' . $name . '.php';
       //$name="mvc\Controllers\\".$name;
        $name="Main\Controllers\\".$name;
        $controller = new $name();
        return $controller;
    }

}
    
?>