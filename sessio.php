<!DOCTYPE html>
<html>
<body>
<?php
session_start();
    if(isset($_POST["type"])){
        if($_POST["type"] === "login"){
            if(isset($_POST["password"])){
                $password = $_POST["password"];
            }
            if(isset($_POST["user"])){
                $user = $_POST["user"];
            }
            if(isset($password) && isset($user) && $password=="test" && $user=="test"){
                $_SESSION["guarda"] = $user;
                header("Location: formulari.php");
            }else{
                header("Location: sessio.php");
            }
        }
    }
?>
<form action="sessio.php" method="post">
    <input type="hidden" name="type" value="login">
    Usuari:
    <input type="text" name="user">
    <br/>
    Contrasenya:
    <input type="password" name="password">
    <br />
    <input type="submit">
</form>
</body>
</html>