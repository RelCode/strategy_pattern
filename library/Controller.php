<?php
namespace Library;
class Controller {
    //this method will fetch a class and create an object of the class depending on the model name given
    public function model($model,$constructor = null){
        if(!file_exists('./models/' . $model . '.php')){
            header('location:?page=home');
        }
        require_once('./models/' . $model . '.php'); //we fetch the model that matches the name

        return new $model($constructor);//it also receives user input to run construct method
    }
    //this method will load a view as well as pass data gotten from the model
    public function view($view, $original = [],$sorted = []){
        //check if the file to be viewed exists
        if (file_exists('./views/' . $view . '.php')) {
            require_once('./views/' . $view . '.php');
        } else {
            require_once('./views/404.php');
        }
    }
}