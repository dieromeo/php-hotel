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
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Php hotel</title>
</head>

<body>
    <h1 class="text-center py-5">Hotels</h1>
    <div class="table-container d-flex flex-column align-items-center">
        <?php

        foreach ($hotels as $index => $hotel) {
            $index += 1;
            // crea una tabella per ogni hotel 
            echo '<table class="table table-info mb-5 w-50 ">
        <thead>
          <tr>
          <th scope="col" colspan= 2 class= "text-center text-uppercase py-3"> Hotel ' . $index . '</th> 
          </tr>
        </thead>
        <tbody>';
            foreach ($hotel as $hotel_key => $hotel_info) {
                // verifica se sta ciclando sul parcheggio 
                if ($hotel_key === 'parking') {
                    // crea una variabile da stampare al posto del valore del parcheggio 
                    $presenza_parcheggio = $hotel_info ? 'Yes' : 'No';
                    echo '<tr>
                <th scope="row">' . $hotel_key . '</th>
                <td>' . $presenza_parcheggio . '</td>
              </tr>';
                } else { // stampa la chiave con il suo valore
                    echo '<tr>
                <th scope="row">' . $hotel_key . '</th>
                <td>' . $hotel_info . '</td>
              </tr>';
                }
            }
        }

        ?>
    </div>

</body>

</html>