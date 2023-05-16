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
      <h1 class="my-4 text-primary">PHP Hotel</h1>

      <div class="table-responsive">
        <table class="table border-2">
          <thead>
            <tr class="text-white bg-primary">
              <th>Nome Hotel</th>
              <th>Descrizione</th>
              <th>Parcheggio</th>
              <th>Voto</th>
              <th>Distanza dal centro</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($hotels as  $hotel) { ?> <tr>
              <td><?php echo $hotel['name']; ?></td>
              <td><?php echo $hotel['description']; ?></td>
              <td><?php echo ($hotel['parking']) ? 'Yes' : 'No'; ?></td>
              <td><?php echo $hotel['vote']; ?></td>
              <td><?php echo $hotel['distance_to_center']; ?> Km</td>
            </tr> <?php } ?>
          </tbody>
        </table>
      </div>

    </header>
    <main>

    </main>
  </div>
</body>

</html>