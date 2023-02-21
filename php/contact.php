<?php

    $array = array("firstname" => "","name" => "","email" => "","phone" => "","message" => "","firstnameError" => "","nameError" => "","emailError" => "","phoneError" => "","messageError" => "","isSuccess" => false);
    
    $emailTo = "lankoandeurbain8@gmail.com";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $array["firstname"] = verifyInput($_POST["firstname"]);
        $array["name"] = verifyInput($_POST["name"]);
        $array["email"] = verifyInput($_POST["email"]);
        $array["phone"] = verifyInput($_POST["phone"]);
        $array["message"] = verifyInput($_POST["message"]);
        $array["isSuccess"] = true;
        $emailText = "";

        if(empty($array["firstname"]))
        {
            $array["firstnameError"] = "Je veux connaitre ton prénom !";
            $array["isSuccess"] = false;
        } 
        else
        {
            $emailText .= "Prénom : {$array["firstname"]}\n"; 
        }

        if(empty($array["name"]))
        {
            $array["nameError"] = " Et oui Je veux connaitre même ton nom !";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Nom : {$array["name"]}\n"; 
        }

        if(!isEmail($array["email"]))
        {
            $array["emailError"] = "Tu essaie de me rouler? C'est pas un email ça !";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Email : {$array["email"]}\n"; 
        }

        if(!isPhone($array["phone"]))
        {
            $array["phoneError"] = "Que des chiffres et des espaces, stp....";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Téléphone : {$array["phone"]}\n"; 
        }

        if(empty($array["message"]))
        {
            $array["messageError"] = "tu a oubié(e) ton message !";
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Message : {$array["message"]}\n"; 
        }

        if($array["isSuccess"])
        {
        $headers = "From: {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReplay-To: {$array["email"]}";
            mail($emailTo, "Un message de mon site CV", $emailText, $headers);
            
        }
        
        echo json_encode($array);
    }

    function isPhone($var)
    {
        return preg_match("/^[0-9]*$/", $var);
    }
    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }
    function verifyInput($var)
    {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
    }
?>