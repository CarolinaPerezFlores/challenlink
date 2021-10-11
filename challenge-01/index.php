<?php

//Add comma to array
function addComma($arr) 
{
    foreach ($arr as $key => $value) {
        if ($key == 0){
            echo $value;
        }
        else
            echo ',' . $value;
    }
}

//Convert the array to an array of numbers without a comma
function ToNumbers($arr) 
{
    //Remove comma
    $withoutCommas = explode(',',$arr); 

    //convert string numbers to decimals
    foreach ($withoutCommas as $key => $value) {
        $withoutCommas[$key] = intval($value);
    }

    return $withoutCommas; 
}


function findPoint($strArr)
{   
    $firstArr = ToNumbers($strArr[0]);
    $SecondArr = ToNumbers($strArr[1]);

    $newArr = [];

    $len = count($SecondArr);
    for ($i=0; $i < count($firstArr) ; $i++) { 
        for ($x=0; $x < count($SecondArr) ; $x++) { 
            if($firstArr[$i] == $SecondArr[$x]){
                array_push($newArr, $firstArr[$i]);
            }
        }
    }

    addComma($newArr);

    $result = $newArr ? $newArr : var_dump(null);

    return $result;
}

// keep this function call here
findPoint(['1, 3, 4, 7, 13', '1, 2, 4, 13, 15']);
