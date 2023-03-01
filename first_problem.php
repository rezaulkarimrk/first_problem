<?php
function totalEquelCheck( $array ){
    $totalSum = array_sum( $array );
    if( $totalSum%2 !=0 ){
        return false;
    }
    $sortedArray = $array;
    sort($sortedArray);
    $targetSum = $totalSum/2;
    for($i=0; $i<count( $array ); $i++){
        $currentSum = 0;
        foreach( $array as $num ){
            if( $currentSum+$num == $targetSum ){
                return true;
            }
            else if( $currentSum+$num < $targetSum ){
                $currentSum+=$num;
            }
        }

        for($j=0; $j<count( $array ); $j++){
            if($sortedArray[$j]+$sortedArray[$i] == $targetSum){
                return true;
            }
        }

    }
    return false;
}

$array = array(15, 5, 2, 5, 6, 3);

$result = totalEquelCheck($array);
if($result){
    echo 'true';
}
else{
    echo 'false';
}
