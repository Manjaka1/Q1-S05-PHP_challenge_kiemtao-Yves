<?php
if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){

    }else 
    echo 'veuillez remplir tous le champs...'
}
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
    <form method="POST" action="index.php"></form>
    <input type="text" name="pseudo" autocomplete="off">
    </br>
    <input type="password" name="mdp" autocomplete="off">
    <br/><br/>
    <input type="submit" name="envoi">

</html>