<?php

// include_once 'Routes/router.php';
function run(string $url, array $routes): void{
    $url = parse_url($url);
    $path = $url['path'];
    if(false === array_key_exists($path,$routes)){
        $callback = $routes[$path];
        // $params=[];
        // if(!empty($uri['query'])){
        //     parse_str($uri['query'], $params);
        // }
        $callback();
    }
}
