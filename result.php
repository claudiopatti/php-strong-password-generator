<?php

    session_start();

    $password = $_SESSION['password']


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
            <h1>
                la tua password generata è: <?php echo $password; ?>
            </h1>
            
        </div>
        
    </body>
</html>