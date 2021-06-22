<!-- Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->
<?php

# Initialize main array.
$posts = [
    "20-06-2021" => [
        [
            'title' => 'Post 1',
            'author' => 'John Cena',
            'text' => 'You cannot see me'
        ],
        [
            'title' => 'Post 2',
            'author' => 'John Borno',
            'text' => 'Goodmorning'
        ],
    ],
    "21-06-2021" => [
        [
            'title' => 'Post 3',
            'author' => 'John Pranzo',
            'text' => 'Enjoy your lunch'
        ],
        [
            'title' => 'Post 4',
            'author' => 'John Kent',
            'text' => 'Love be a farmer'
        ],
    ],
    "22-06-2021" => [
        [
            'title' => 'Post 5',
            'author' => 'John Weak',
            'text' => 'Where is my dog?'
        ],
        [
            'title' => 'Post 6',
            'author' => 'John Strong',
            'text' => 'Cannot really tell ya!'
        ],
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3 | Posts</title>
</head>
<body>
    <?php
    foreach($posts as $date => $post) {
        echo "<h1>Posts of {$date}</h1>";

        foreach($post as $postDetails){
            echo 
            "<ul>
                <li>{$postDetails["title"]}</li>
                <li>{$postDetails["author"]}</li>
                <li>{$postDetails["text"]}</li>
            </ul>";
        };
    };
    
    ?>

</body>
</html>