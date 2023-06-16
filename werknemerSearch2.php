<!doctype html>
<html>
<head>
</head>
<body>

<div class="paginaInfo">
<?php
require "werknemer.php";

$werknemerId = $_POST["werknemerIdVak"];
$werknemer1 = new werknemer();
$werknemer1->searchwerknemer($werknemerId);
?>

<<h2><a href="werknemerIndex.php">home</a></h2>
</div>
</body>
</html>
