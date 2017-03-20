<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//Asks user for name
echo ("Input a Name:") , PHP_EOL;
$nameInput = fgets(STDIN) . PHP_EOL;
$nameInput = trim($nameInput);

//Checks input against arrays to see if it exists
$result = array_search ($nameInput, $names);
doesFoodExist($result);

function doesFoodExist($result) {
    if (is_numeric($result)) {
        echo "true" . PHP_EOL;
        return "true" . PHP_EOL;
    }else{
        echo "false" . PHP_EOL;
        return "false" . PHP_EOL;
    }
}


function compareNames($array1, $array2) {    
    $count = 0; 
    foreach($array1 as $key) {
        if (array_search($key, $array2) == array_search($key, $array1)) {
            $count += 1;            
        }
    }
    echo ("There are " . $count . " values in common between the arrays.") . PHP_EOL;
}
echo "" . PHP_EOL;
compareNames($names, $compare); 

?>
