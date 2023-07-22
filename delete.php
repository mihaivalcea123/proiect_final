<?php

// includem fisierul config

include_once ("config.php");

// primim id in url

$id = $_GET['id'];

// stergem utilizatorul pe baza id-ului

$result = mysqli_query($mysqli,"DELETE FROM profiles WHERE id=$id");
header("Location: index.php");