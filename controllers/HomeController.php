<?php
// use Library\Controller;
require_once('./library/Controller.php');
class HomeController extends Library\Controller {
    //the home controller will only be returning the home view
    public function index(){
        return $this->view('home');
    }
}