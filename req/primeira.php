<?php
session_start();

$_SESSION["primeira"] = "1";
$_SESSION["segunda"] = " ";
$_SESSION["terceira"] = " ";


?>

<a href="segunda.php">segunda.php</a>

<?php

print("<pre>");
var_dump($_SESSION);

?>