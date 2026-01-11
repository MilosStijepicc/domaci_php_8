<?php

    $imena = ["Toma", "Petar", "Vlada"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Petlje</title>
    </head>


    <body>
        <?php
            foreach($imena as $ime){
                echo "<p>$ime</p>";
            }
        ?>

        <?php foreach($imena as $ime): ?>
            <p><?php echo $ime ?></p>
        <?php endforeach; ?>
    </body>


</html>