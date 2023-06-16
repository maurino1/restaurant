<!DOCTYPE html>
<html lang="en">

<body>
<div class="alleWerknemer">
<h1>alle werknemers</h1>
<?php
require "werknemer.php";
$werknemer1 = new werknemer();
$werknemer1->readwerknemer();

?>
<h2><a href="werknemerIndex.php">home</a></h2>
</div>
</body>
</html>