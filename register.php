<html>
    <head>
        <title>Inregistrarea utilizator</title>
    </head>
    <body>
    <a href="index.php">Mergi pe index</a>
    <br><br>
        <form action = "validare_date.php" method="POST">
        <table width="25%" border="0">
        <tr>
                <td>Username</td>
                <td><input type="text" name="user_id"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="full_name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Bio</td>
                <td><input type="text" name="bio"></td>
            </tr>
            <tr>
                <td></td>
                <input type = "submit" value = "ADD">
            </tr>

        </form>
        <!----Verificam daca formularul a fost trimis cu php ( if ) --->
        <?php

    if(isset($_POST['Submit'])){
        $username= $_POST['username'];
        $password = $_POST['password'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $bio = $_POST['bio'];

        // includem conexiunea db
        include_once ("config.php");

         // inseram datele utilizatorului
         $result = mysqli_query($mysqli,"INSERT INTO profiles(full_name,email,age,bio) VALUES ('$full_name','$email','$age','$bio')");

    // afisam mesajul, ca utilizatorul a fost adaugat cu succes

    echo "Utilizatorul a fost adaugat cu success.<a href='index.php'>Vizualizeaza utilizatorii</a>";

}
?>

</body>

</html>
  