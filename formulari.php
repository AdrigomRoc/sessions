<!DOCTYPE html>
<html>
<body>
<?php
    if(isset($_POST["type"])){
        if($_POST["type"] === "login"){
            if(isset($_POST["password"])){
                $password = $_POST["password"];
            }
            if(isset($_POST["user"])){
                $user = $_POST["user"];
            }
            if(isset($password) && isset($user) && $password=="test" && $user=="test"){
                header("Location: formulari.php");
            }else{
                header("Location: sessio.php");
            }
        }
    }
?>
<form action="formulari.php" method="post">
    <input type="hidden" name="type" value="form">
    Colores:
    <input type="radio" id="color1"
           name="color" value="blu">
    <label for="color1">Blau</label>
    <input type="radio" id="color2"
           name="color" value="gre">
    <label for="color2">Verde</label>
    <input type="radio" id="color3"
           name="color" value="yel">
    <label for="color3">Groc</label>
    <br />
    <input type="submit">
</form>
</body>
</html>