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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <th>Hotel Name</th>
            <th>Hotel Description</th>
            <th>Parking</th>
            <th>Vote</th>
            <th>Distance To Center</th>
        </tr>

        <?php
        foreach ($hotels as $subHotel)
        {
            ?>
            <tr>
                <td><?php echo $subHotel['name']; ?></td>
                <td><?php echo $subHotel['description']; ?></td>
                <td><?php echo $subHotel['parking'] ?? "no parking"; ?></td>
                <td><?php echo $subHotel['vote']; ?></td>
                <td><?php echo $subHotel['distance_to_center']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>