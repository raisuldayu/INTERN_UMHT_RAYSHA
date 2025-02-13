<?php 
session_start(); 

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require 'function.php';

if( isset($_POST["submit"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;


            header("location: index.php");
            exit;
        }
        $error = true;
    }

}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
</head>
<body>
<h1>Login Admin</h1>

<?php if( isset($error) ) : ?>
   <p style="color: red; font-style: italic;">username / password salah!</p>
<?php endif; ?>

<ul>
<form action="" method="post">
    <li>
        <label for="">Username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">password :</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
</li>


</form>
</ul>

</body>
</html>