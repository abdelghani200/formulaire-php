<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formailaire php</title>
</head>
<body>
   
      <form action="display.php" method="post">
        <label for="">Nom:
        <input type="text" name="name"></label><br><br>
        <label for="">Prenom:</label>
        <input type="text" name="prenom"></label><br><br>
        <label for="">Email:</label>
        <input type="text" name="email"></label><br><br>
        <label for="">Telephone:</label>
        <input type="tel" name="phone">
        <button type="submit">Envoyer</button>
      </form>

</body>
</html>

