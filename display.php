<?php

if(isset($_POST['name']) && isset($_POST['prenom'])){
    echo "Bonjour" ." " .$_POST['name'] ." ".$_POST['prenom']; 
    echo "<br>";
    echo "<br>";
}

if(isset($_POST['email'])){
    echo "your email is" ." " .$_POST['email'];
    echo "<br>";
}


?>