<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>

<body>
    <?php
session_start();  
require_once "helper.php";
login("Admin");
?>
    <h1>Halaman Admin</h1>
    <hr>
    Username : <?=$_SESSION['login']['username'] ?>
    Level : <?=$_SESSION['login']['level'] ?>
    <br>
    <a href="index.php"><button>Halaman utama</button></a>
    <a href="logout.php"><button>Logout</button></a>
</body>

</html>