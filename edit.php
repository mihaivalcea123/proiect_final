<?php

// includem conexiunea
include_once ("config.php");

// verificam daca formularul a fost trimis si actualizat

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $bio = $_POST['bio'];


   

    // actualizam in db

    
    $result1 = mysqli_query($mysqli,"UPDATE profiles SET full_name='$full_name',email = '$email',age = '$age',bio = '$bio'WHERE id=$id");
    header("Location: index.php");
}
?>
<!---afisam datele utilizatorului selectate pe id, dar prima opara inchidem php dupa deschidem iar-->
<?php
$id =$_GET['id'];
    $result = mysqli_query($mysqli,"SELECT * FROM profiles WHERE  id=$id");

    while ($user_data = mysqli_fetch_array($result)){
        $full_name= $user_data['full_name'];
        $email = $user_data['email'];
        $age = $user_data['age'];
        $bio = $user_data['bio'];
       
    }
// sa vedem cum si daca functioneaza

?>
<html>
<head>
    <title>Actualizeaza utilizatori</title>
</head>
    <body>
    <a href="index.php">Pagina index</a>
    <br><br>
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="full_name" value=<?php echo $full_name;?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" value=<?php echo $age;?>></td>
            </tr>
            <tr>
                <td>Bio</td>
                <td><input type="text" name="bio" value=<?php echo $bio;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    </body>
</html>
