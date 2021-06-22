<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php
    #My string
    $paragraph = 
    "The first argument for the ''ripigliammo'' command is the columns to retrieve. They can be specified either as a list of comma-separated values or with the'' tutto chillo ch'era 'o nuostro'' which will return all the columns.
    After the columns, the following parameter is the name of the table where to fetch the data with ''mmiez 'a''. Data can be fetched from multiple tables by using the optional join operator ''pesc e pesc'' followed by another table name. Currently, there's no limit on the number of ''pesc e pesc'' that can be applied to a single ''ripigliammo''. The join condition is specified in the ''arò'' clause, along with the row filtering.
    Finally, you can filter the rows using the optional ''arò'' clause, followed by one or more conditions. The conditions work exactly like in SQL, with a slightly different syntax for some operators (check the Language Reference section).
    Here are some sample queries:
    ''ripigliammo tutto chillo ch'era 'o nuostro mmiez 'a'' user  # retrieves all users' data.
    ''ripigliammo email mmiez 'a'' user ''arò'' id = 6 o name ''è nisciun''  # retrieves all the emails of the users with id 6 or null name.
    ''ripigliammo email mmiez 'a user pesc e pesc city pesc e pesc account arò'' user.id = 6 e user.birth_city = city.id e user.account_id = account.id  # retrieves the data of the user with id 6 along joined with his birth city and his account data.";
    #My string exploded in accordance to first parameter limit set.
    $newParagraphs = explode(".",$paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5 | Explode</title>
</head>
<body>
<h1>Whole paragraph:</h1>
    <p><?php echo $paragraph; ?></p>

    
    <h1>Split paragraphs:</h1>
    <p>
        <?php 
            foreach($newParagraphs as $newParagraph) {
                echo "<p>{$newParagraph}</p>";
            }
        ?>
    </p>
</body>
</html>

