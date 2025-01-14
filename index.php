<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="src/output.css">
</head>

<body class="h-screen w-full flex flex-col justify-center items-center">
    <H1 class="font-bold text-secondary text-5xl">Hello <?= $_SESSION["username"]; ?></H1>
    <a href="logout.php"
        class="px-3 py-10 font-semibold underline text-secondary hover:text-black  hover:cursor-pointer transition ease-in-out duration-300  ">Logout</a>
</body>

</html>