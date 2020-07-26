<?php

// Complete the plusMinus function below.
function plusMinus($arr) {

    $arraySize = count($arr);
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;
    foreach ($arr as $value) {
        if ($value > 0) {
            $positiveCount++;
        }elseif ($value < 0) {
            $negativeCount++;
        }elseif ($value == 0) {
            $zeroCount++;
        }        
    }
    $pc = $positiveCount/$arraySize;
    echo number_format(strval($pc), 5 );
    echo("\n");
    $nc =  $negativeCount/$arraySize;
    echo number_format(strval($nc), 5 );
    echo("\n");
    $zc = $zeroCount/$arraySize;
    echo number_format(strval($zc), 5 );

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
?>