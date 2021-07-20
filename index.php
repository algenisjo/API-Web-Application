<?php 

// read json
$json = file_get_contents( 'https://api.coindesk.com/v1/bpi/currentprice.json');
//decode json
$jsonArray = json_decode($json, true);
//print json
print_r($jsonArray).'<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin</title>
</head>
<body>

    <div>
        <h1>Time</h1>
        <?php echo $jsonArray['time']['updated']; ?>
    </div>

    <div>
        <h1>Bitcoin Prices</h1>
        <h2>USD</h2> 
        <?php echo '$'.$jsonArray['bpi']['USD']['rate_float']; ?>
        <h2>Pound</h2> 
        <?php echo $jsonArray['bpi']['GBP']['rate_float']; ?>
        <h2>Euro</h2> 
        <?php echo $jsonArray['bpi']['USD']['rate_float']; ?>
    </div>
    <br><br>
    <?php
   echo $jsonArray['disclaimer'];
    ?>
</body>
</html>
