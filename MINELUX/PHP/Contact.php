<?php

$array = array("firstname" => "", "name" => "", "email" => "","phone" => "","message" => "", "firstname" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);

$emailTo = "yamakoserges@gmail.com";

if($_SERVER["REQUEST_METHOD"] == "POST")
    
{
     $array["firstname"] = verifyInput($_POST["firstname"]);
     $$array["name"] = verifyInput($_POST["name"]);
     $$array["email"] = verifyInput($_POST["email"]);
     $$array["phone"] = verifyInput($_POST["phone"]);
     $$array["message"] = verifyInput($_POST["message"]);
     $array["isSuccess"] = true;
     $emailText = "";
    
    if(empty($array["firstname"]))
        {
        $array["firstnameError"]= "Je veux connaitre ton prenom !";
        $array ["isSuccess"] = false;
        }
    else
    {
        $emailText .= "Firstname: {$array["firstname"]}\n";
    }
     if(empty($array["name"]))
        {
        $array["nameError"] = "Oui je veux tout savoir meme ton Nom!";
        $array ["isSuccess"] = false;
        }
    else
    {
        $emailText .= "Name: {$array["name"]}\n";
    }
    if(empty($array["email"]))
        {
        $array["emailError"] = "Qu est ce que tu veux me dire ?";
        $array ["isSuccess"] = false;
        }
    else
    {
        $emailText .= "Message: {$array["email"]}\n"; 
    }
     if(!isPhone($array["phone"]))
    {
        $array["phoneError"] = "Que des chiffres et des espaces SVP";
        $array ["isSuccess"] = false; 
    }
    else
    {
        $emailText .= "Phone: {$array["phone"]}\n";
    }
    if(empty($array["message"]))
        {
        $array["messageError"] = "T'essaies de me rouler? C'est pas un email !";
        $array["isSuccess"] = false;
        }
    else
    {
        $emailText .= "Email: {$array["message"]}\n";
    }
   
    if ($array["isSuccess"])
    {
        $headers = "From: {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReplay-To: {$array["email"]}";
        mail($emailTo, "Un message de votre site" , $emailText, $headers);
        
    }
        echo json_encode($array);
    }

    function isPhone($var)
    {
        return preg_match("/^[0-9 ]*$/", $var);
    }
function isEmail($var)
    {
    return filter_var($var, FILTER_VALIDATE_EMAIL);
    }
function verifyInput($var)
    {
        $var = trim($var);
        $var = stripcslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }

?>