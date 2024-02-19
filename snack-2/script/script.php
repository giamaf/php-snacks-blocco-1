<?php
// Label pagina
$page_title = 'Dati form';

// Messaggio da mostrare in pagina
$message = 'Accesso negato';

$first_name = trim($_GET['firstname']);
$email = trim($_GET['email']);
$age = $_GET['age'];

if(strlen($first_name) < 3){
$info = 'Il numero minimo di caratteri è 3';
}else if(!strpos($email, '@') && !strpos($email, '.')){
$info = 'I simboli "@" "." sono obbligatori nel campo mail';    
}else if(!is_numeric($age)){
$info = 'L\'età deve essere un numero'; 
}else{
$message = 'Accesso riuscito';
$info = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
</head>

<body>
<h1><?= $message ?></h1>    
<p><?= $info ?></p>    
</body>

</html>