<?php
$parkingFilter = $_GET["park"];
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

$filtered_hotels = $hotels;

$parking_filter = $_GET["parking"] ?? "";
$vote_filter = $_GET["vote"] ?? "";
if (!empty($parking_filter === 0)) {
    $temp_hotels = [];
    foreach ($hotels as $hotel) {
        if ($hotel["parking"]) {
            $temp_hotels[] = $hotel;
        }
    }
    $filtered_hotels = $temp_hotels;
}

if (!empty($vote_filter)) {
    $vote_filter = intval($vote_filter);
    $temp_hotels = [];
    foreach ($filtered_hotels as $hotel) {
        if ($hotel["vote"] >= $vote_filter) {
            $temp_hotels[] = $hotel;
        }
    }
    $filtered_hotels = $temp_hotels;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="parking">Parcheggio</label>
        <select class="form-select mb-3" name="parking">
            <option value="">Tutti</option>
            <option value="1">Con Parcheggio</option>
        </select>
        <label for="voto"></label>
        <select class="form-select mb-3" name="vote">
            <option value="">Tutti</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <div>
            <button type="submit">Filtra</button>
            <button type="reset">Resetta filtri</button>
        </div>
    </form>

    <table class="table table-dark table-hover">
        <tr>
            <th>Hotel Name</th>
            <th>Hotel Description</th>
            <th>Parking</th>
            <th>Vote</th>
            <th>Distance To Center</th>
        </tr>

        <?php
        foreach ($filtered_hotels as $subHotel) {
        ?>
            <tr>
                <td><?php echo $subHotel['name']; ?></td>
                <td><?php echo $subHotel['description']; ?></td>
                <td><?php echo ($subHotel['parking'] ? "yes" : "no"); ?></td>
                <td><?php echo $subHotel['vote']; ?></td>
                <td><?php echo $subHotel['distance_to_center']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>