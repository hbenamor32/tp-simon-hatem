
<?php
// define variables and set to empty values
$firstNameErr = $lastNameErr = $phoneErr =  $emailErr  = $commentaireErr = "";
$firstName = $lastName = $phone = $email = $music = $instrument = $commentaire = "";

$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nom"])) {
        $lastNameErr = "Last name is required";
        $error = true;
    } else {
        $lastName = $_POST["nom"];
    }
        if (empty($_POST["prenom"])) {
            $firstNameErr = "First is required";
            $error = true;
        } else {
            $firstName = $_POST["prenom"];
        }
    if (empty($_POST["tel"])) {
        $phoneErr = "Phone is required";
        $error = true;
    } else {
        $phone = $_POST["tel"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $error = true;
    } else {
        if(test_email($_POST["email"]))
        $email = $_POST["email"];
        else {
            $emailErr = "email not valid";
            $error = true;
        }
    }

    $music = $_POST["music"];

    $instrument = $_POST["instrument"];


    if (empty($_POST["comments"])) {
        $commentaireErr = "Comments are required";
        $error = true;
    } else {
        if(test_comment($_POST["comments"]))
        $commentaire = $_POST["comments"];
        else {
            $error = true;

            $commentaireErr = "Comment must be more than 10 words";
        }
        }

    if($error){
        echo nl2br($firstNameErr."\n
        ".$lastNameErr."\n".$phoneErr."\n".$emailErr."\n"
            . $commentaireErr);
    }else
    echo nl2br ("formulaire valide \n
    first name:".$firstName."\n
    last name:".$lastName."\n
    phone: ".$phone."\n
    email: ".$email."\n
    music: ".$music."\n
    instrument: ".$instrument."\n
    comment: ".$commentaire);

}

function test_comment($comment){
    $commentArray= explode(" ",$comment);
     if(count($commentArray)>= 10) return true;
     else return false;

}

function test_email($email){

   //email valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else
    return false;



}
?>