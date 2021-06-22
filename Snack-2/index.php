<!-- 
Passare come parametri GET name, mail e age. 
Verificare (cercando i metodi che non conosciamo nella documentazione) che: 
1- name sia più lungo di 3 caratteri.  
2- mail contenga un punto e una chiocciola.
3- age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2 | GET</title>
</head>
<body>
    <form action="#" method="GET">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" id="age">
        </div>
        
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <button type="submit">Submit</button>
    </form>

    <?php
    # Validate GET parameters: 
        # name > 3 characters
        $validName = false;
        if (strlen($_GET["name"]) > 3) {
            $validName = true;
        }
        
        # age must be a number 
        $validAge = false;
        if (is_numeric($_GET["age"])) {
            $validAge = true;
        }
        # mail must include "." and "@"
        $validEmail = false;
        
        if (strpos($_GET["email"], ".") != false && strpos($_GET["email"], "@") != false) {
            $validEmail = true;
        }
        # Display "access granted" or "access denied" in accordance to validations.
        if ($validName == true && $validAge == true && $validEmail == true) {
            echo "Access granted";
        } else {
            echo "Access denied";
        }
    ?>
</body>
</html>

