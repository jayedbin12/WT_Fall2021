<?php

$formdata = array(
    'firstname' => $_POST["fname"],
    'lastName'=> $_POST["lname"],
    'age' => $_POST['age'],
    'designation'=> $_POST["designation"],
    'language'=> $_POST["language"],
    'email' => $_POST["email"],
    'password'=> $_POST["password"],
    'image' => $_POST["myfile"]
);

$existingdata = file_get_contents('mydata.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);


if(file_put_contents("mydata.json", $jsondata)) {
     echo "Data successfully saved <br>";
 }
else 
     echo "no data saved";

$data = file_get_contents("mydata.json");
$mydata = json_decode($data);


?>