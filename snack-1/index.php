<?php
// Titolo pagina
$page_title = 'PHP Snacks';
$main_title = 'NBA Matches';

// Creo array dei matches
$matches = [
   [
    'home_team' => 'Los Angeles Lakers',
    'away_team' => 'Chicago Bulls',
    'ht_points' => rand(70, 100),
    'at_points' => rand(70, 100)
   ],
 
   [
    'home_team' => 'Cleveland Cavaliers',
    'away_team' => 'San Antonio Spurs',
    'ht_points' => rand(70, 100),
    'at_points' => rand(70, 100)
   ],
 
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-grid.min.css' integrity='sha512-ZuRTqfQ3jNAKvJskDAU/hxbX1w25g41bANOVd1Co6GahIe2XjM6uVZ9dh0Nt3KFCOA061amfF2VeL60aJXdwwQ==' crossorigin='anonymous'/>
    
    <link rel="stylesheet" href="style.css" />

    <title><?= $page_title ?></title>

</head>
<body>
    <h1><?= $main_title ?></h1>
    <ul>
        <?php foreach ($matches as $match): ?>

           <li>
            <?= $match['home_team'] ?> - <?= $match['away_team'] ?> | <?= "{$match['ht_points']} - {$match['at_points']}" ?>
           </li>
        
        <?php endforeach; ?>

        
        
    </ul>
</body>

</html>