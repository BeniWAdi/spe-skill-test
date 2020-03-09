<?php

function isNarcissistic($number) {
    $digit = strlen($number);
    $total = 0;
    for ($i = 0; $i < $digit; $i++) {
        $angka = substr($number, $i, 1);
        $total += pow($angka, $digit);
    }
    if ($total == $number) {
        return true;
    } else {
        return false;
    }
}

function outlier($array) {
    $odd = [];
    $even = [];
    foreach ($array as $a) {
        if ($a % 2) {
            $odd[] = $a;
        } else {
            $even[] = $a;
        }
    }
    if (count($odd) == 0 || count($even) == 0) {
        return false;
    } elseif (count($odd) > 1 && count($even) > 1) {
        return false;
    } elseif (count($odd) == 1) {
        return $odd[0];
    } elseif (count($even) == 1) {
        return $even[0];
    }
    return false;
}


function findInHaystack($array, $find){
    $i = 0;
    foreach ($array as $a){
        if ($a == $find){
            return $i;
        }
        $i++;
    }
}

function blueOcean($array, $arrayRemove){
    $temp = [];
    foreach ($array as $a1){
        foreach ($arrayRemove as $a2){
            if ($a1 != $a2){
                $temp[] = $a1;
            }
        }
    }
    return $temp;
}


echo 'Narcissistic Number <br/>';
echo "1634 = ".isNarcissistic(1634);
echo "<br/>153 = ".isNarcissistic(153);

echo '<br/>Outlier<br/>';
echo outlier([2, 4, 0, 100, 4, 11, 2602, 36]);


echo '<br/>Needle in the Haystack<br/>';
echo findInHaystack(["red", "blue", "yellow", "black", "grey"], "blue");

echo '<br/>blue Ocean<br/>';
echo json_encode(blueOcean([1,2,3,4,6,10], [1]));