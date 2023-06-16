<!doctype html>
<html>
<head>
</head>
<body>
<div class="paginaInfo">
    <?php
    require "werknemer.php";


    $werknemerId = $_POST["werknemerId"];
    $werknemerEmail = $_POST["werknemerEmail"];
    $werknemerNaam = $_POST["werknemerNaam"];
    $werknemerFunctie = $_POST["werknemerFunctie"];
    $werknemerContact = $_POST["werknemerContact"];
    $werknemerAdres = $_POST["werknemerAdres"];
    $werknemerPostcode = $_POST["werknemerPostcode"];

    $werknemerId1 = new werknemer($werknemerId, $werknemerEmail, $werknemerNaam, $werknemerFunctie, $werknemerContact, $werknemerAdres, $werknemerPostcode);
    $werknemerId1->updatewerknemer($werknemerId);
    echo "geupdate: <br/>";
    echo $werknemerId . "<br/>";
    $werknemerId1->afdrukken();

    ?>
    <h2><a href="werknemerIndex.php">home</a></h2>
</div>
</body>
</html>
