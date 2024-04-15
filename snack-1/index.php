/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/

<?php

$squads =[
    [
        'home'=> 'squadra1',
        'guest'=> 'squadra2',
        'homepoint'=> '13',
        'guestpoint'=> '15'
    ],
    [
        'home'=> 'squadra3',
        'guest'=> 'squadra4',
        'homepoint'=> '19',
        'guestpoint'=> '25'
    ],
    [
        'home'=> 'squadra5',
        'guest'=> 'squadra6',
        'homepoint'=> '43',
        'guestpoint'=> '35'
    ],
    

];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php foreach ($squads as $squad) : ?>
        

        <p>
        <?= $squad["home"] ?> - <?= $squad["guest"]?>
        </p>
        <p>
        <?= $squad["homepoint"] ?> | <?= $squad["guestpoint"]?>
        </p>
    
    
    <?php endforeach; ?>
    
    


</body>
</html>