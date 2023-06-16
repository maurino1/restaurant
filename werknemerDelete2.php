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

<form action="werknemerDelete3.php" method="post">

    <input type="hidden" name="werknemerIdVak" value=" <?php echo $werknemerId ?> ">

    <input type="hidden" name="verwijderBox" value="nee">
    <input type="checkbox" name="verwijderBox" value="ja">
    <label for="verwijderBox"> verwijder werknemer.</label><br/><br/>
    <input type="submit"><br/><br/>
</form>

<h2><a href="werknemerIndex.php">home</a></h2>
</div>
</body>
</html>

