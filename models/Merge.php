<?php
    class Merge{
        public $userInputArr, $inputSize;
        public function __construct($data){
            $this->userInputArr = str_split($data);
            $this->inputSize = sizeof($this->userInputArr);
        }
        public function sortData(){
            if($this->inputSize > 1){//if userinput is longer than 1 character we implement the sort
                $this->mergeSort($this->userInputArr, 0, $this->inputSize - 1);
            }
            return $this->userInputArr;
        }

        //this is the method that will implement the merge sort 
        public function mergeSort(&$data,$left,$right){
            if($left < $right){
                $center = $left + (int)(($right - $left) / 2);
                $this->mergeSort($data,$left,$center);
                $this->mergeSort($data,$center+1,$right);
                $this->merger($data,$left,$center,$right);
            }
        }
        //this method merges filtered data
        public function merger(&$data, $left, $center, $right){
            //2 temp arrays will be created  to hold split elements of array
            $n1 = $center - $left + 1;
            $n2 = $right - $center;
            $leftArray = array_fill(0, $n1, 0);
            $rightArray = array_fill(0, $n2, 0);
            for ($i = 0; $i < $n1; $i++) {
                $leftArray[$i] = $data[$left + $i];
            }
            for ($i = 0; $i < $n2; $i++) {
                $rightArray[$i] = $data[$center + $i + 1];
            }
            //x,y,z are index number of $leftArray, $rightArray, $data arrays
            $x = 0;
            $y = 0;
            $z = $left;
            while ($x < $n1 && $y < $n2) {
                if ($leftArray[$x] < $rightArray[$y]) {
                    $data[$z] = $leftArray[$x];
                    $x++;
                } else {
                    $data[$z] = $rightArray[$y];
                    $y++;
                }
                $z++;
            }
            //copying remaining elements of leftArrya
            while ($x < $n1) {
                $data[$z] = $leftArray[$x];
                $x++;
                $z++;
            }
            //copying remaining elements of rightArray
            while ($y < $n2) {
                $data[$z] = $rightArray[$y];
                $y++;
                $z++;
            }
        }
    }