<?php
    require_once __DIR__.'/partials/functions.php';
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
                echo randomPassword($_GET['lenghtPassword']);
            ?>
        </div>
        
    </body>
</html>