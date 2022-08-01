<?php
class Quick {
    public $userInputArr;
        public function __construct($data){
            $this->userInputArr = str_split($data);
        }
        public function sortData(){
            return $this->quickSort($this->userInputArr);
        }

        function quickSort($arr){
            if(count($arr) <= 1){//if the array passed is a single value
                return $arr;//we return it
            }else{
                $pivot = $arr[0];//we set our pivot value
                $left = array();
                $right = array();
                for ($i=1; $i < count($arr); $i++) { //$i == 1 because [0] is already set as pivot value
                    if($arr[$i] < $pivot){//if the current array element is lesser than the pivot value
                        $left[] = $arr[$i];//we push it to the left of the array
                    }else{
                        $right[] = $arr[$i];//else we push it to the right
                    }
                }
                //once the sort is complete we merge these arrays
                return array_merge($this->quickSort($left),array($pivot),$this->quickSort($right));
            }
        }
}