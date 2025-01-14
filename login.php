<?php 
session_start();
require 'functions.php';

if(isset($_SESSION["username"])){
    header("Location: index.php");
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");

    if(!empty($username) && !empty($password)){
        if(mysqli_num_rows($result) === 1){
        $user = mysqli_fetch_assoc($result);

            if(password_verify($password, $user["password"])){
                $_SESSION["username"] = $user["username"];
                header("Location: index.php");
            }else{
                echo "
                <script>
                    alert('Wrong password');
                </script>
                ";
            }
        }else{
            echo "<script>alert('Username not found')</script>";
        }
    }else{
        echo "<script>alert('Please fill in all fields')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="src/output.css">

</head>

<body class="h-screen w-full bg-primary flex flex-row">
    <div class="w-2/3 h-full bg-white  flex justify-center items-center">
        <div class="h-5/6 w-4/6  flex flex-col gap-7 justify-center">
            <h1 class="text-5xl font-semibold">Login Account</h1>
            <form action="" method="post" class="flex flex-col gap-4">
                <div>
                    <input class="border-b-2 w-full py-2" type="text" name="username" placeholder="Username">
                </div>
                <div>
                    <input class="border-b-2 w-full py-2" type="password" name="password" placeholder="Password">
                </div>
                <div>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="font-semibold text-sm text-slate-600">Remember me</label>
                </div>
                <div>
                    <button type="submit" name="login"
                        class="px-4 py-2 bg-secondary w-full rounded-full text-white font-semibold border border-transparent hover:bg-white hover:text-secondary hover:border-secondary hover:shadow-sm hover:cursor-pointer transition ease-in-out duration-300">Login</button>
                </div>
            </form>
            <div>
                <p class="text-center text-base text-slate-600 underline font-medium">don't have an account? <a
                        class="text-secondary" href="register.php">Login</a></p>
            </div>
        </div>
    </div>
    <div class="w-1/3 h-full bg-transparent flex justify-center items-center">
        <img src="src/img/hero2.png" alt="">
    </div>
</body>

</html>