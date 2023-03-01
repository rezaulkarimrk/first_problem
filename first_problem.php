<?php
function totalEquelCheck( $array ){
    $totalSum = array_sum( $array );

    if( $totalSum%2 !=0 ){
        return false;
    }
    $targetSum = $totalSum/2;
    $currentSum = 0;
    for($i=0; $i<count($array); $i++){
        foreach( $array as $num ){
            if( $currentSum+$num == $targetSum ){
                return true;
            }
            else if( $currentSum+$num < $targetSum ){
                $currentSum+=$num;
            }
        }

    }
    return false;
}

$array = array(1, 5, 5, 11);

$result = totalEquelCheck($array);
if($result){
    echo 'true';
}
else{
    echo 'false';
}