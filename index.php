<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);


//Require the autoload file
    require_once ('vendor/autoload.php');

//Instantiate Fat-Free framework (F3)
    $f3 = Base::instance(); //static method

//define a default route
    $f3->route('GET /', function(){
        //echo"My Diner";

        //Display view page
        $view = new Template();
        echo $view->render('views/home.html');
    });

//run fat-free
    $f3->run();