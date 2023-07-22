<?php

// Facem conexiunea la baza de date utilizand fisierul de configurare

include_once ("config.php");

// Preluam toate datele utilizatorilor din baza de date

$result = mysqli_query($mysqli,"SELECT * FROM profiles ORDER BY id DESC ");
?>

<html>
<head>
    <title>Pagina principala</title>
</head>
<body>

    <a href="register.php">Adauga un nou utilizator</a>

    <table width="80%"border="1">

        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Bio</th>
            <th>Update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)){
            // afisam utilizatori din baza de date dupa nume, mobile si email
            echo "<tr>";
            echo "<td>".$user_data['full_name']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['age']."</td>";
            echo "<td>".$user_data['bio']."</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a>"; // editam si stergem utilizatori
        }
        ?>
    </table>

</body>
</html>
