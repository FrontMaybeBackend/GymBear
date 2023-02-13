<?php


$muscle = 'chest';
$api_url = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;
$headers = array(
    'X-Api-Key: hQlFG98mJuyD5UarHs5x3Q==A4N4Elms1buJIkKM'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($status_code == 200) {
    $exercises = json_decode($response, true);

    ?>
    <table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Muscle</th>
            <th>Equipment</th>
            <th>Difficulty</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($exercises as $exercise) { ?>
            <tr>
                <td><?php echo $exercise['name']; ?></td>
                <td><?php echo $exercise['type']; ?></td>
                <td><?php echo $exercise['muscle']; ?></td>
                <td><?php echo $exercise['equipment']; ?></td>
                <td><?php echo $exercise['difficulty']; ?></td>

            </tr>
        <?php }}?>
    </tbody>
</table>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>