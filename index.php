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
        $clio = new Voiture ('verte', 5, 20, 18);
        $mustang = new Voiture ();

        // $mustang -> couleur = 'noir';

        // $clio -> couleur = 'rouge';
        // $clio -> nbPortes = 5;
        // $clio -> rouler();

        // $mustang -> rouler();

        $clio -> setCouleur('rouge');

        echo '<p>Ma voiture est '.$clio -> getCouleur().' et elle a '.$clio -> getNbPortes().' portes, elle pourra roulais '.$clio -> getKilometre().'Km et à un reservoir de '.$clio -> getEssence().'litres</p>';
        // echo '<p>Ma voiture est '.$mustang -> couleur.' et elle a '.$mustang -> nbPortes.' portes.</p>';


    ?>
</body>
</html>