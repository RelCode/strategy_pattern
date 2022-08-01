<?php
//the config file is required at the top to get the name of the current folder and string if user input & submit one
include './config.php';

//here the header is included to give us the top part of the HTML document as well as the navbar
include './views/layouts/header.php';

//we get the current page name and see if it has an class file
$url = './controllers/' . ucfirst($page) . 'Controller.php';
if(file_exists($url)){//if the file exists we load its class and create its instance
    //then we require the main controller that we use for views and the class control that we'll use to access class
    require_once($url);
    $currentController = ucfirst($page) . 'Controller';
    $currentClass = new $currentController($algorithm,$userInput);
    $currentClass->index();
}else{
    //if no class files that means it is an invalid URI and "unknown" page will be displayed
    include('./views/404.php');
}

//here we wrap up by including our footer componet(views/footer.php)
include './views/layouts/footer.php';