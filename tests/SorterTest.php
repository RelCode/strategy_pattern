<?php
class SorterTest extends \PHPUnit\Framework\TestCase {
    //test if the provided user input is strip to an array with each element being a letter of the input
    public function testUserInputToArray(){
        require_once('./controllers/SortController.php');
        $mergeSort = new SortController('merge','input');
        $result = $mergeSort->sortModel->userInputArr;
        $this->assertEquals(['i','n','p','u','t'],$result);
    }
    public function testMergeSort(){
        require_once('./controllers/SortController.php');
        //we pass 'happiness' as our user input
        $mergeSort = new SortController('merge','happiness');
        $result = $mergeSort->sortModel->sortData();
        //we compare the result to the expected output
        $this->assertEquals(['a','e','h','i','n','p','p','s','s'],$result);
    }
    public function testQuickSort(){
        require_once('./controllers/SortController.php');
        //we pass 'happiness' as our user input
        $quickSort = new SortController('quick','confidence');
        $result = $quickSort->sortModel->sortData();
        //we compare the result to the expected output
        $this->assertEquals(['c','c','d','e','e','f','i','n','n','o'],$result);
    }
}