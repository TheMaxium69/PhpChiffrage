<?php




$modeInscription = false;

$isLoggedIn = false;
$leSecret = "non mais c'est un secret";

var_dump($isLoggedIn);

if($isLoggedIn){

    require_once "revelation.php";

}else{
    require_once "login.php";

}
if(isset($_POST['modeInscription']) && $_POST['modeInscription']== "on"){

    $modeInscription = true;
    require_once "signup.php";
}
if(isset($_POST['modeInscription']) && $_POST['modeInscription']== "off"){

    $modeInscription = false;
}


if($modeInscription){
    require_once "signup.php";
}






?>