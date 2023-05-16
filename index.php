<?php

    $hotels = [

      [
          'name' => 'Hotel Belvedere',
          'description' => 'Hotel Belvedere Descrizione',
          'parking' => true,
          'vote' => 4,
          'distance_to_center' => 10.4
      ],
      [
          'name' => 'Hotel Futuro',
          'description' => 'Hotel Futuro Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 2
      ],
      [
          'name' => 'Hotel Rivamare',
          'description' => 'Hotel Rivamare Descrizione',
          'parking' => false,
          'vote' => 1,
          'distance_to_center' => 1
      ],
      [
          'name' => 'Hotel Bellavista',
          'description' => 'Hotel Bellavista Descrizione',
          'parking' => false,
          'vote' => 5,
          'distance_to_center' => 5.5
      ],
      [
          'name' => 'Hotel Milano',
          'description' => 'Hotel Milano Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 50
      ],

    ];

    // echo "<pre>";
    // var_dump($hotels);
    // echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP Hotel</title>
</head>

<body>
  <div class="wrapper container d-flex flex-column justify-content-center align-items-center">
    <header class="text-center pb-4">
      <h1 class="my-4">PHP Hotel</h1>

      <?php
      foreach ($hotels as $hotel) { echo "<h2>{$hotel['name']}</h2>" ; echo "<p>{$hotel['description']}</p>" ;
        echo "<p>Parcheggio: " . ($hotel['parking'] ? 'Sì' : 'No' ) . "</p>" ; echo "<p>Voto: {$hotel['vote']}</p>" ;
        echo "<p>Distanza dal centro: {$hotel['distance_to_center']} km</p>" ; };
         
      ?>

    </header>
    <main>

    </main>
  </div>
</body>

</html>