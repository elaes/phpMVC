<?php

class Home extends Controller {

    public function index($toto = "vide"){
        echo 'home/index ' . $toto;
    }

}