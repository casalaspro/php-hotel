<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
  <navbar>
    <div class="container">
      <h1>Hotels</h1>
      <form action="./index.php" method="get">
        <div class="form-check">
          <input class="form-check-input" name="park" type="checkbox" value="1" id="parkPresence">
          <label class="form-check-label" for="parkPresence">
            Parking presence
          </label>
        </div>
        
        <button class="button">Find</button>
      </form>
    </div>

  
  </navbar>
  <hr>

  <?php 
  if(isset($_GET['park'])){
    $filteredParkHotels = array_filter($hotels, "getParkPresence");
    echo "<pre>";
    var_dump($filteredParkHotels);
    echo "</pre>";
  

    ?>
    <h2>Hotels with parking</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Parking inside the hotel</th>
          <th>Vote</th>
          <th>Distance from city center</th>
        </tr>
      </thead>

      <tbody>
        
        <?php
          foreach($filteredParkHotels as &$hotel){
            $name = $hotel['name'];
            $description = $hotel['description'];
            $parking = $hotel['parking'];
            $vote = $hotel['vote'];
            $distance = $hotel['distance_to_center'];
            // echo "<pre>";
            // var_dump($hotel);
            //  echo "</pre>";

            
        ?>

        <tr>
          <th><?php echo $name; ?></th>
          <td><?php echo $description ?></td>
          <td><?php echo $parking ?></td>
          <td><?php echo $vote ?></td>
          <td><?php echo $distance . " " . 'km' ?></td>
        </tr>

        <?php };}; ?>
        
      </tbody>
    </table>

    <?php
    

  function getParkPresence($hotel){
    if($hotel['parking']==true){
      return $hotel;
    }
  };


  ?>

  

  <section class="hotels">

    <div class="container">

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Parking inside the hotel</th>
          <th>Vote</th>
          <th>Distance from city center</th>
        </tr>
      </thead>

      <tbody>
        
        <?php
          for($i = 0; $i < count($hotels); $i++){
            $hotel = $hotels[$i];
            $name = $hotel['name'];
            $description = $hotel['description'];
            $parking = $hotel['parking'];
            $vote = $hotel['vote'];
            $distance = $hotel['distance_to_center'];
        ?>

        <tr>
          <th><?php echo  $name; ?></th>
          <td><?php echo $description ?></td>
          <td><?php echo $parking ?></td>
          <td><?php echo $vote ?></td>
          <td><?php echo $distance . " " . 'km' ?></td>
        </tr>
        <?php }; ?>
        
      </tbody>
    </table>
    </div>
  </section>
    


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

