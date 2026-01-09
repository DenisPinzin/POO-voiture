<?php include('Voiture.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $clio = new Voiture();

        $clio = new Voiture(120, 20, "on", 45);

        $clio -> rouler(1000);
        $clio -> allumerPhares();
        $clio -> eteindrePhares();
        $clio -> tableauDeBord();

        echo'<br>';

        $clio -> allumerPhares();
        $clio -> faireLePlein();
        $clio -> rouler(100);
        $clio -> tableauDeBord();

    ?>
</body>
</html>