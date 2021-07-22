<?php 
 
// read json
$json = file_get_contents( 'https://api.coindesk.com/v1/bpi/currentprice.json');
//decode json
$jsonArray = json_decode($json, true);
//print json
//print_r($jsonArray).'<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bitcoin</title>
</head>
<body>

<h1>Bitcoin Prices</h1>

    <div class="time">
        <ul>
            <li> <?php echo date('l F j Y h:i:s A'); ?> </li>
        </ul> 
    </div>

    <div class="prices">

        <ul class="fixed" >
            <li><h2>USD</h2></li>
            <li><?php echo '$'.$jsonArray['bpi']['USD']['rate_float']; ?> </li>
        </ul>

        <ul>
            <li><h2>POUND</h2></li>
            <li><?php echo '$'.$jsonArray['bpi']['GBP']['rate_float']; ?> </li>
        </ul>

        <ul>
            <li><h2>EURO</h2></li>
            <li><?php echo '$'.$jsonArray['bpi']['EUR']['rate_float']; ?> </li>
        </ul>
        
    </div>
    
    <footer>
        <?php
            echo $jsonArray['disclaimer'];
        ?>
    </footer>
    
</body>
</html>
