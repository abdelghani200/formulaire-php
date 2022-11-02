<?php

echo filter_input(INPUT_GET,"num", FILTER_SANITIZE_NUMBER_INT);


?>


<form action="" method="get">
     <input type="text" name="num">
     <input type="submit" value="Send">
</form>