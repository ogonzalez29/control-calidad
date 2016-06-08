<?php
//// define variables array and set to empty values
$errors = array('$orderErr' => "", '$nameErr' => "");


$orderErr = $nameErr = $last_nameErr = $emailErr = $genderErr = $websiteErr = "";
$order = $name = $last_name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["order"])) {
    $orderErr = "* Orden de reparación requerida";
  } else {
    $order = test_input($_POST["order"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9 ]*$/",$order)) {
      $orderErr = "* Solo números sin espacios permitidos"; 
    }

  }

  if (empty($_POST["name"])) {
    $nameErr = "* Nombre requerido";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "* Solo letras y espacios en blanco permitidos"; 
    }
  }

  if (empty($_POST["last_name"])) {
    $last_nameErr = "* Apellido requerido";
  } else {
    $last_name = test_input($_POST["last_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
      $last_nameErr = "* Solo letras y espacios en blanco permitidos"; 
    }
  }
  
  // if (empty($_POST["email"])) {
  //   $emailErr = "Email is required";
  // } else {
  //   $email = test_input($_POST["email"]);
  //   // check if e-mail address is well-formed
  //   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //     $emailErr = "Invalid email format"; 
  //   }
  // }
    
  // if (empty($_POST["website"])) {
  //   $website = "";
  // } else {
  //   $website = test_input($_POST["website"]);
  //   // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
  //   if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  //     $websiteErr = "Invalid URL"; 
  //   }
  // }

  // if (empty($_POST["comment"])) {
  //   $comment = "";
  // } else {
  //   $comment = test_input($_POST["comment"]);
  // }

  // if (empty($_POST["gender"])) {
  //   $genderErr = "Gender is required";
  // } else {
  //   $gender = test_input($_POST["gender"]);
  // }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>