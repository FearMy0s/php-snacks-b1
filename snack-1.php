<?php
$Match = [
    [
        'Home' => 'PennaTeam',
        'Host' => 'CucchiaioTeam',
        'HomePoint' => 23,
        'HostPoint' => 25,
    ]
    [
        'Home' => 'PannaTeam',
        'Host' => 'CavoloTeam',
        'HomePoint' => 20,
        'HostPoint' => 21,
    ]
    [
        'Home' => 'PrimoTeam',
        'Host' => 'CuculoTeam',
        'HomePoint' => 25,
        'HostPoint' => 22,
    ]
    [
        'Home' => 'PenaTeam',
        'Host' => 'CrunchTeam',
        'HomePoint' => 27,
        'HostPoint' => 21,
    ]
    ]
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
<h1>ciao</h1>
    <ul>
        <?php
            for($i = 0; $i < count($Match); $i++) {
                echo "<li> {$Match[$i]['Home']} - {$Match[$i]['Host']} | {$Match[$i]['HomePoint']} - {$Match[$i]['HostPoint']} </li>";
            }
         ?>
     </ul>
</body>
</html>
