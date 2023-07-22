<?php
$mysqli = new mysqli ('localhost','root','','crud1');
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$age = $_POST['age'];
$bio = $_POST['bio'];






if(empty($full_name ) or empty($email) or empty($age) or empty($bio)){
    echo "Va rugam completati toate campurile!";

}else{
    $mysqli->query("INSERT INTO profiles(full_name,email,age,bio)VALUES('$full_name','$email','$age','$email')");
    echo "Utilizatorul a fost inregistrat cu succes!";
}

?>
