<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice D2</title>
</head>
<body>

<?php 

$departement = array (
    25 => 'Doubs',
    70 => 'Haute-Saône',
    90 => 'Territoire de Belfort',
    39 => 'Jura',
    68 => 'Bas-Rhin',
);

foreach($departement as $clefs=>$val){
    echo $clefs." : ".$val." <br/>";
     }
?>
    
</body>
</html>