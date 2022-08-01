<?php
require_once('./library/Controller.php');
class SortController extends Library\Controller {
    public $unsortedData, $sortedData;
    public function __construct($algorithm,$data){
        $this->unsortedData = str_split($data); //we split the string from user into array of single characters
        //create merge model instance and pass unsorted data from user
        $this->sortModel = $this->model($algorithm, $data);
    }
    public function index(){
        //run sort data method from merge sort model
        $this->sortedData = $this->sortModel->sortData();
        //then we return the sorted data and the view for output rendering
        return $this->view('results', $this->unsortedData, $this->sortedData);
    }
}