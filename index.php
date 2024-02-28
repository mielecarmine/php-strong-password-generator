<?php
require_once './functions.php';


// function generate_password($pass_length, $password, $alph) {
//     for($i = 0; $i < $pass_length; $i++) {
//         $password .= $alph[rand(0, strlen($alph) - 1)];
//     }
//     return $password;
// }

$alph = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz#<>%$&!?^*-_=";
$password = '';

if(!empty($_GET)) {
    $password_length = (int) $_GET['password_length'];
    var_dump($password_length);
    $password = generate_password($password_length,$password,$alph);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Strong password generator</title>
</head>
<body>
    <div class="container">
        <form action="./index.php" method="GET">
            <h3 class="mb-3">Quanto dev'essere lunga la password?</h3>
            <input type="text" class="form-control" name="password_length">
            <button class="btn btn-primary mt-3">Send</button>
        </form>

        <h3 class="mb-3">La password generata:</h3>
        <span>
            <?= $password ?>
        </span>
    </div>
</body>
</html>