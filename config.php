<?php
// incepem sa facem conexiunea


$mysqli = new mysqli ('localhost','root','','crud1');
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }