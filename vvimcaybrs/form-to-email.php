<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];

$alimentos = $_POST['alimentos'];
$bebidas = $_POST['bebidas'];


//Validate first
if(empty($name)) 
{
    echo "Nombre obligatorio!";
    exit;
}


$email_from = '';//<== update the email address
$email_subject = "Alimentos y Bebidas";
$email_body = "Update alimentos y bebidas \n Asociado: $name.\n".
    "Reporte de alimentos y bebidas faltantes \n".
	"\n ---------- Alimentos ----------".
	"\n $alimentos\n".
	"\n ---------- Bebidas ----------".
	"\n $bebidas\n".
	
    
$to = "ays.santacruz@marriotthotels.com";//<== update the email address
$headers = "From: $name \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: vvimcaybrsthank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 