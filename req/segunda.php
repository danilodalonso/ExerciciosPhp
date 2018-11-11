<?php

session_start();

$_SESSION["segunda"] = "2";

?>

<a href="terceira.php">terceira.php</a>

<?php
print("<pre>");
var_dump($_SESSION);

?>