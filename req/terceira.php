<?php

session_start();

$_SESSION["terceira"] = "3";

?>

<a href="terceira.php">terceira.php</a>

<?php
print("<pre>");
var_dump($_SESSION);

?>