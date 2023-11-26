<?php

namespace classes;

use classes\Request as req;
use classes\Response as res;

class Route
{

    public $request;
    public $response;

    public function __construct(req $request, res $response)
    {
        
        $this->request= $request;
        $this->response= $response;
    }
    public static array $routes = [];

    public static function get($route, $action){
        self::$routes['get'][$route] = $action;
    }
    public static function post($route, $action){
        self::$routes['post'][$route] = $action;
    }
    public function resolve(){
        $path = $this->request->path();
        $method = $this->request->method();
        $action = self::$routes[$method][$path] ?? false;

        if(!$action){
            return;
        }
        else{
            //handle 404
        }

        if (is_callable($action)){
            call_user_func_array($action,[]);
        }

        if(is_array($action)){
            call_user_func_array([new $action[0], $action[1]],[]);
        }
    }
}