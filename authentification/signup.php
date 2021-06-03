<?php


    if(isset($_POST['usernameSignUp']) && isset($_POST['passwordSignUp']) && isset($_POST['passwordRetypeSignUp']) ){

        echo "tout est set";

        if( !empty($_POST['usernameSignUp']) &&  !empty($_POST['passwordSignUp']) &&  !empty($_POST['passwordRetypeSignUp']) ){

            echo "tout est plein";
    
                $usernameEntre = $_POST['usernameSignUp'];
                $passwordEntre = $_POST['passwordSignUp'];
                $passwordRetypeEntre = $_POST['passwordRetypeSignUp'];

                    if($passwordEntre == $passwordRetypeEntre){

                                
                            require_once "auth/db.php";

                            //checker si le username est libre

                $maRequetePourCheckerSiLeUsernameEstLibre = "SELECT * FROM users WHERE username = '$usernameEntre'";
                        $retourRequeteCheckUsername = mysqli_query($maConnection, $maRequetePourCheckerSiLeUsernameEstLibre);
                        
                        if($retourRequeteCheckUsername->num_rows == 0){

                            echo "on peut l'inscrire";

                            $maRequeteInscription = "INSERT INTO users (username, password) VALUES ('$usernameEntre', '$passwordEntre')";
                            $resultatInscription = mysqli_query($maConnection, $maRequeteInscription);
                       
                                header("location: index.php?info=registered");
                        }else{
                            echo "username non disponible";
                        }




                    }else{
                        echo  "les deux mots de passe ne matchent pas";
                    }
    
    
    
    
        }else{
            echo "il manque des trucs dans le formulaire";
        }




    }else{
        echo "il manque des trucs";
    }



?>