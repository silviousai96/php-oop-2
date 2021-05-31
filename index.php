<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; 
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario; 
ad esempio ci potrebbero essere diverse tipologie di prodotti. -->

<?php

require_once __DIR__ . '/scarpe.php';
require_once __DIR__ . '/canotta.php';
require_once __DIR__ . '/ciabatte.php';
require_once __DIR__ . '/user.php';

$nike_airmax = new Scarpe('Nike', 'Air Max 90');
$nike_airmax->taglia = '42';
$nike_airmax->categoria = 'Uomo';
$nike_airmax->prezzo = '120€';
//var_dump($nike_airmax->getInfoData());

$nike_miami = new Canotta('Nike NBA', 'Swingman Miami Heat');
$nike_miami->taglia = 'M';
$nike_miami->categoria = 'Uomo';
$nike_miami->prezzo = '85€';
//var_dump($nike_miami->getInfoData());

$hava_hybrid = new Ciabatte('Havaianas', 'Hybrid');
$hava_hybrid->taglia = '42';
$hava_hybrid->categoria = 'Unisex';
$hava_hybrid->prezzo = '15€';
//var_dump($hava_hybrid->getInfoData());

$user = new User('Silvio', 'Usai');


$user->addProduct($hava_hybrid);
$user->addProduct($nike_miami);
$user->addProduct($nike_airmax);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>
</head>
<body>
    <h1>Riepilogo Ordine</h1>

    <?php foreach($user->getProducts() as $product) { ?>
        <div>
            <ul>
                <li>Marca: <?php echo $product->marca ?></li>
                <li>Modello: <?php echo $product->modello ?></li>
                <li>Taglia: <?php echo $product->taglia ?></li>
                <li>Categoria: <?php echo $product->categoria ?></li>
                <li>prezzo: <?php echo $product->prezzo ?></li>
            </ul>
        </div>
    <?php } ?>
</body>
</html>