<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotels</title>
</head>
<body>

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

?>

  <h1>Hotels</h1>
  <hr>

  <?php
  for($i = 0; $i < count($hotels); $i++){
    $hotel = $hotels[$i];
    $name = $hotel['name'];
    $description = $hotel['description'];
    $parking = $hotel['parking'];
    $vote = $hotel['vote'];
    $distance = $hotel['distance_to_center'];
    ?>

    <div class="card hotel">
      <h2><?php echo  $name; ?></h2>
      <p><strong>Description: </strong><?php echo $description ?></p>
      <p><strong>Parking inside the hotel: </strong><?php echo $parking ?></p>
      <p><strong>Vote: </strong><?php echo $vote ?></p>
      <p><strong>Distance from city center: </strong><?php echo $distance ?></p>
    </div>
    
    <?php

    // echo $name;
    // echo '<br>';
  };
  ?>

  
</body>
</html>

