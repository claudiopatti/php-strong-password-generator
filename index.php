<?php
 
 function randomPassword($len) {

    //define character libraries - remove ambiguous characters like iIl|1 0oO
    $sets = array();
    $sets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
    $sets[] = 'abcdefghjkmnpqrstuvwxyz';
    $sets[] = '23456789';
    $sets[]  = '~!@#$%^&*(){}[],./?';

    $password = '';
    
    //append a character from each set - gets first 4 characters
    foreach ($sets as $set) {
        $password .= $set[array_rand(str_split($set))];
    }

    //use all characters to fill up to $len
    while(strlen($password) < $len) {
        //get a random set
        $randomSet = $sets[array_rand($sets)];
        
        //add a random char from the random set
        $password .= $randomSet[array_rand(str_split($randomSet))]; 
    }
    
    //shuffle the password string before returning!
    return str_shuffle($password);
}
 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
    </head>
    <body>
        
        <div>
            <div>
                <form method="GET">
                    <div>
                        <label for="lenghtPassword">Quanto deve essere lunga la tua password random? (minimo 4 caratteri cosìda avere una lettera minuscola, una lettera maiuscola, un numero e un carattere speciale)</label>
                    </div>
                    <input type="number" name="lenghtPassword" id="lenghtPassword" min="4">
                    <div>
                        <button type="submit">
                            Calcola
                        </button>
                    </div>
                </form>
            </div>


            <?php
                echo randomPassword($_GET['lenghtPassword'])
            ?>
        </div>
        
    </body>
</html>