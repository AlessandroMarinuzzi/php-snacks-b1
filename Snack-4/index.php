<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php

#Initializing random numbers array

$randomNumbers = [];

#For Loop
for ($i = 0; $i < 15; $i ++){
    #Generate a random number
    $randomNumber = rand(1,100);

    #While instead of If cause of the absolute condition to keep generating numbers till the limit established by the array length.
    while (in_array($randomNumber, $randomNumbers)) {
        $randomNumber = rand(1, 100);
    }
    #Push randomNumber into the array.
    $randomNumbers[] = $randomNumber;

    #Display the array only once by specifying the index.
    echo $randomNumbers[$i] . "<br>";
}

?>