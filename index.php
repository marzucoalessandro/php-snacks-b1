<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php
//creiamo array matches e un generatore casuale di numeri

$generator = rand(80, 110);

$matches = [
  [
    "squadraCasa" => "Milano",
    "squadraOspite" => "Cantù",
    "puntiCasa" => $generator = rand(80, 110),
    "puntiOspite" => $generator = rand(80, 110)
  ],
  [
    "squadraCasa" => "Varese",
    "squadraOspite" => "Treviso",
    "puntiCasa" => $generator = rand(80, 110),
    "puntiOspite" => $generator = rand(80, 110)
  ],
  [
    "squadraCasa" => "Bologna",
    "squadraOspite" => "Virtus",
    "puntiCasa" => $generator = rand(80, 110),
    "puntiOspite" => $generator = rand(80, 110)
  ],
  [
    "squadraCasa" => "Macerata",
    "squadraOspite" => "Avellino",
    "puntiCasa" => $generator = rand(80, 110),
    "puntiOspite" => $generator = rand(80, 110)
  ]
];

// var_dump($matches);
//verificato il ns array adesso stampiamo a video tutti i valori;



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2><?php for ($i=0; $i < count($matches) ; $i++) {
      echo ($matches[$i]["squadraCasa"] . " - " . $matches[$i]["squadraOspite"] . " " . $matches[$i]["puntiCasa"] . " | " . $matches[$i]["puntiOspite"]);
      echo "<br>";
    } ?></h2>
  </body>
</html>

<?php
//esercizio 2;
// PHP Snack 2:
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
// conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”




 ?>
