<?php 
$conn = mysqli_connect("localhost", "root", "", "books");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}




function register($data){
    global $conn;
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $confirmPassword = htmlspecialchars($data["confirm-password"]);
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if(empty($username) || empty($password) || empty($confirmPassword)){
        echo "<script>alert('Please fill in all fields')</script>";
        return false;
    }else if(mysqli_num_rows($result) > 0){
        echo "<script>alert('Username already exists')</script>";
        return false;
    }else if(strlen($password) < 8){
        echo "<script>alert('Password must be at least 8 characters')</script>";
        return false;
    }else if($password !== $confirmPassword){
        echo "<script>alert('Password does not match')</script>";
        return false;
    }else{
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$hashPassword')");
        return mysqli_affected_rows($conn);
    }
    }

?>