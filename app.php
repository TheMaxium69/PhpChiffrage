<div style="color: white; background: #343a40;"><?php
$modeInscription = false;
$isLoggedIn = false;
$leSecret = "non mais c'est un secret";

if($isLoggedIn){

    require_once "revelation.php";

}else if ($modeInscription){
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
</div>
