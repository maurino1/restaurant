<!doctype html>
<html>
<head>
</head>
<body>
<div class="paginaInfo">
<?php
require "werknemer.php";

$werknemerId = $_POST["werknemerIdVak"];
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen == "ja") {
    echo "werknemer is verwijderd <br/>";
    $werknemer1 = new werknemer();
    $werknemer1->deletewerknemer($werknemerId);
} else {
    echo "werknemer kon niet worden verwijderd <br/>";
}
?>
<h2><a href="werknemerIndex.php">home</a></h2>
</div>
</body>
</html>
