<?php

abstract class View
{
    protected $model;
    protected $controller;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    // public abstract function viewName();
    // public abstract function viewEmail();
    // public abstract function viewPhone();


}
?>