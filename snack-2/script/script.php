<?php
// Label pagina
$page_title = 'Dati form';

// Messaggio ed info da mostrare in pagina
$message = 'Accesso negato';
$info = '';
$text_color = 'text-danger';


$first_name = trim($_GET['firstname']);
$email = trim($_GET['email']);
$age = $_GET['age'];

if(strlen($first_name) > 3){
$info = "Il numero minimo di caratteri è 4!";
}else if(!strpos($email, '@') || !strpos($email, '.')){
$info = 'I simboli "@" "." sono obbligatori nel campo mail!';    
}else if(!$age || !is_numeric($age)){
$info = 'Inserire un\'età valida!';
}else{
$message = 'Accesso riuscito';
$text_color = 'text-success';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Bootstrap -->
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />

    <title><?= $page_title ?></title>
</head>

<body>
    <div class="container-fluid">
        <h1 class=<?= $text_color ?>><?= $message ?></h1> 
        <?php if($message !== 'Accesso riuscito'): ?>   
        <p> <strong><?= $info ?></strong></p>
        <?php endif; ?>    
    </div>
    </body>

</html>