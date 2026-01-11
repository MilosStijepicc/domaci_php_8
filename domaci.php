<?php

    $navigacija = [
    "index.php" => "Glavna",
    "about_us.php" => "O nama",
    "contact.php" => "Kontakt"
];

?>

<!DOCTYPE html>
<head>
    <title>Domaci</title>
</head>
<body>
    
    <nav>
        
        <?php foreach($navigacija as $href => $link):?>
            <a href="<?php echo $href ?>"><?php echo $link ?></a>
        <?php endforeach; ?>

    </nav>

</body>
</html>