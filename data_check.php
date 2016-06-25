<?php
//// define variables array and set to empty values
global $orderErr;
global $nameErr;
global $last_nameErr;
global $nameErr1;
global $last_nameErr1;
global $makeErr;
global $lineErr;
global $modelErr;
global $mileageErr;
global $licenseErr;

$errors = array('$orderErr' => "", 
                '$nameErr' => "", 
                '$last_nameErr' => "", 
                '$nameErr1' => "", 
                '$last_nameErr1' => "",
                '$makeErr' => "",
                '$lineErr' => "", 
                '$modelErr' => "", 
                '$mileageErr' => "",
                '$licenseErr' => "");

// $orderErr = $nameErr = $last_nameErr = $emailErr = $genderErr = $websiteErr = "";
$firstname = $lastname = $make = $model = $license = $mileage = $ordernumber = $firstname1 = $lastname1 = $day = $month = $year = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ordernumber"])) {
    $orderErr = "* Orden de reparación requerida";
  } else {
    $ordernumber = test_input($_POST["ordernumber"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9 ]*$/",$ordernumber)) {
      $orderErr = "* Solo números sin espacios permitidos"; 
    }
  }

  $errors = array($orderErr);

  if (empty($_POST["firstname1"])) {
    $nameErr1 = "* Nombre requerido";
  } else {
    $firstname1 = test_input($_POST["firstname1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Záéíóúñ]*$/",$firstname1)) {
      $nameErr1 = "* Solo letras y espacios en blanco permitidos"; 
    }
  }

  array_push($errors, $nameErr1);

  if (empty($_POST["lastname1"])) {
    $last_nameErr1 = "* Apellido requerido";
  } else {
    $lastname1 = test_input($_POST["lastname1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Záéíóúñ]*$/",$lastname1)) {
      $last_nameErr1 = "* Solo letras y espacios en blanco permitidos"; 
    }
  }

  array_push($errors, $last_nameErr1);

  if (empty($_POST["firstname"])) {
    $nameErr = "* Nombre requerido";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Záéíóúñ]*$/",$firstname)) {
      $nameErr = "* Solo letras y espacios en blanco permitidos"; 
    }
  }

  array_push($errors, $nameErr);

  if (empty($_POST["lastname"])) {
    $last_nameErr = "* Apellido requerido";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Záéíóúñ]*$/",$lastname)) {
      $last_nameErr = "* Solo letras y espacios en blanco permitidos"; 
    }
  }

  array_push($errors, $last_nameErr);

  if ($_POST['cat'] == "") {
    $makeErr = "* Marca del vehículo requerida";
  }

  array_push($errors, $makeErr);

    if ($_POST['subcat'] == "") {
    $lineErr = "* Línea del vehículo requerida";
  }

  array_push($errors, $lineErr);

  if (empty($_POST["model"])) {
    $modelErr = "* Modelo del vehículo requerido";
  } else {
    $model = test_input($_POST["model"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9 ]*$/",$model)) {
      $modelErr = "* Solo números sin espacios permitidos"; 
    }
  }

  array_push($errors, $modelErr);


if (empty($_POST["license"])) {
    $licenseErr = "* Placa del vehículo requerida";
  } else {
    $license = test_input($_POST["license"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9A-Z ]*$/",$license)) {
      $licenseErr = "* Solo letras en mayúscula y números sin espacios permitidos"; 
    }
  }

  array_push($errors, $licenseErr);

if (empty($_POST["mileage"])) {
    $mileageErr = "* Kilometraje del vehículo requerido";
  } else {
    $mileage = test_input($_POST["mileage"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9 ]*$/",$mileage)) {
      $mileageErr = "* Solo números sin espacios permitidos"; 
    }
  }

  array_push($errors, $mileageErr);

  
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