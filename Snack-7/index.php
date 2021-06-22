<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $classe35 = [
        [
            "name" => "Alessandro",
            "surname" => "Marinuzzi",
            "marks" => [5,7,8,3,9,6,7]
        ],
        [
            "name" => "Eddie",
            "surname" => "Mecchia",
            "marks" => [5,9,8,6,9,6,7]
        ],
        [
            "name" => "Andrea",
            "surname" => "Gavardi",
            "marks" => [5,7,8,7,9,6,7]
        ],
        [
            "name" => "Andrei",
            "surname" => "Burbulia",
            "marks" => [5,7,8,2,9,6,4]
        ],
    ];

    foreach($classe35 as $student){
        $averageMark = intval(array_sum($student["marks"]) / count($student["marks"]));

            echo 
            "<div>
                <div>Name: {$student["name"]}</div>
                <div>Surname: {$student["surname"]}</div>
                <div>Marks average: $averageMark</div>
            </div>
                
            <br>";
    }
?>