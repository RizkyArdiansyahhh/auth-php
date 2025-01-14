<?php
require 'functions.php';

if(isset($_POST["register"])){
    if(register($_POST) > 0){
        echo "
        <script>
            alert('User baru berhasil ditambahkan');
        </script>
        ";
        header("Location: login.php");
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="src/output.css">

</head>

<body class="h-screen w-full bg-primary flex flex-row">
    <div class="w-1/3 h-full bg-transparent flex justify-center items-center">
        <img src="src/img/hero1.png" alt="">
    </div>
    <div class="w-2/3 h-full bg-white rounded-[40px_0px_0px_40px] flex justify-center items-center">
        <div class="h-5/6 w-4/6  flex flex-col gap-7 justify-center">
            <h1 class="text-5xl font-semibold">Create an account</h1>
            <form action="" method="post" class="flex flex-col gap-4">
                <div>
                    <input class="border-b-2 w-full py-2" type="text" name="username" placeholder="Username" required>
                </div>
                <div>
                    <input class="border-b-2 w-full py-2" type="password" name="password" placeholder="Password"
                        required>
                </div>
                <div>
                    <input class="border-b-2 w-full py-2" type="password" name="confirm-password"
                        placeholder="Konfirmasi Password" required>
                </div>
                <div class="mt-3">
                    <button type="submit" name="register"
                        class="px-4 py-2 bg-secondary w-full rounded-full text-white font-semibold border border-transparent hover:bg-white hover:text-secondary hover:border-secondary hover:shadow-sm hover:cursor-pointer transition ease-in-out duration-300">Register</button>
                </div>
            </form>
            <div>
                <p class="text-center text-base text-slate-600 underline font-medium">already have an account? <a
                        class="text-secondary" href="login.php">Login</a></p>
            </div>
        </div>
    </div>
</body>

</html>