<?php
header ('Content-type: text/html; charset=UTF-8');
session_start();
if(isset($_SESSION['user_id'])){
    header("Location: dashboard.php");
    exit;
}

$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'usuario' && $password === 'senha'){
        $_SESSION['user_id'] = 1;
        header("Location: dashboard.php");
        exit;
    } else{
        $message = "USUARIO ou SENHA incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
    Nome: <input type="text" name="username"> <br>
    Senha: <input type="password" name="password"> <br>

    <button type="submit">Confirmar</button>
    </form>
</body>

</html>