
<?php

if(empty($_POST['username'])){
    $username_error = "Please entrer the username";
}

if(empty($_POST['password'])){
    $password_error = "Please entrer the password";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation-php</title>
</head>
<body>
    <form action="" method="post" auto_complete=""off>
        <input type="text" name="username"> 
        <span> <?php if(isset($username_error)) echo $username_error; ?> </span> <br><br>
        <input type="password" name="password">
        <span> <?php if(isset($password_error)) echo $password_error; ?> </span>
        <input type="submit" value="Registrer">
    </form>
</body>
</html>