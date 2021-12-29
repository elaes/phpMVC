<?php

class App {

    protected $controller = 'home';

    protected $method = 'index';

    protected $params = [];
    
    public function __construct(){
        print_r($this->parseUrl());
        // $url = $_SERVER['REQUEST_URI'];
        // echo $url;
        // var_dump($url);
        // echo ' : ';
        // echo strlen( $url );
    }

    public function parseUrl(){
        if( isset($_SERVER['REQUEST_URI']) ){
            return explode( '/', 
                ( 
                    substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']) )
                )
            );
        }
    }
}

?>