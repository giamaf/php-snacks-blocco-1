<?php
// Titolo pagina
$page_title = 'PHP Snacks';
$main_title = 'NBA Matches';

// Creo array dei matches
$matches = [
 'match-1' =>  [
                 'teams' => [
                                'Los Angeles Lakers',
                                'Chicago Bulls'
                            ] ,

                 'points' => rand(70, 110)
                   
               ],
 
 'match-2' =>  [
                 'teams' => [
                                'Cleveland Cavaliers',
                                'San Antonio Spurs'
                            ] ,

                 'points' => rand(70, 110)
                   
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
    <ul class="d-flex">
        <?php foreach ($matches as $match): ?>

            <li class="mx-1"><?=  $match['teams'][0] . ' - ' ?></li>
        
        <?php endforeach; ?>

        
        <?php foreach ($matches as $match): ?>
            <li> <?=  $match['points'] . ' - ' ?></li>
            
        <?php endforeach; ?>
    </ul>
</body>

</html>