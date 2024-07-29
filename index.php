<?php
function modifyArray($L) {
    if (count($L) != 9) {
        throw new Exception("Array length must be 9");
    }
    
    $last = $L[8];
    $first = $L[0];
    $middle = $L[4];

    $L[0] = $last; 
    $L[4] = $first;
    $L[8] = $middle;

    return $L;
}

$L1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$L1 = [11, 22, 33, 44, 55, 66, 77, 88, 99];

$modifiedL1 = modifyArray($L1);
$modifiedL2 = modifyArray($L2);


print_r($modifiedL1);
print_r($modifiedL2);

?>