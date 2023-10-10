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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>


    <?php foreach ($hotels as $hotel) : ?>
        <ul><?php echo $hotel['name'] ?>
            <li><?php echo $hotel['description'] ?></li>
            <li><?php echo $hotel['parking'] ?></li>
            <li><?php echo $hotel['vote'] ?></li>
            <li><?php echo $hotel['distance_to_center'] ?></li>
        </ul>
    <?php endforeach; ?>

<!-- TABLE -->

<table class="table p-5">
  <thead>
    <tr>
    <?php foreach ($hotels as $hotel) : ?>
      <th scope="col"><?php echo $hotel['name'] ?></th>
      <?php endforeach; ?>   
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($hotels as $hotel) : ?>
      <td scope="col"><?php echo $hotel['description'] ?></td>
      <?php endforeach; ?>
    </tr>
    <tr>
    <?php foreach ($hotels as $hotel) : ?>
      <td scope="col"><?php echo $hotel['parking'] ?></td>
      <?php endforeach; ?>
    </tr>
    <tr>
    <?php foreach ($hotels as $hotel) : ?>
      <td scope="col"><?php echo $hotel['vote'] ?></td>
      <?php endforeach; ?>
    </tr>
    <tr>
    <?php foreach ($hotels as $hotel) : ?>
      <td scope="col"><?php echo $hotel['distance_to_center'] ?></td>
      <?php endforeach; ?>
    </tr>
  </tbody>
</table>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>