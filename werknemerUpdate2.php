<!doctype html>
<html>
<head>
</head>
<body>
<div class="paginaInfo">
    <?php

    require "werknemer.php";
    $werknemerId = $_POST["werknemerId"];
    $werknemerId1 = new werknemer();
    $werknemerId1->searchwerknemer($werknemerId);

    $werknemerEmail = $werknemerId1->get_werknemerEmail();
    $werknemerNaam = $werknemerId1->get_werknemerNaam();
    $werknemerFunctie = $werknemerId1->get_werknemerFunctie();
    $werknemerContact = $werknemerId1->get_werknemerContact();
    $werknemerAdres = $werknemerId1->get_werknemerAdres();
    $werknemerPostcode = $werknemerId1->get_werknemerPostcode();
    $werknemerWachtwoord = $werknemerId1->get_werknemerWachtwoord();
    ?>

    <form action="werknemerUpdate3.php" method="post">

        <input type="hidden" name="werknemerId" value="<?php echo $werknemerId; ?> "><br/>
        <input type="text" name="werknemerEmail" value="<?php echo $werknemerEmail; ?> "><br/>
        <input type="text" name="werknemerNaam" value="<?php echo $werknemerNaam; ?> "><br/>
        <input type="text" name="werknemerFunctie" value="<?php echo $werknemerFunctie; ?> "><br/>
        <input type="text" name="werknemerContact" value="<?php echo $werknemerContact; ?> "><br/>
        <input type="text" name="werknemerAdres" value="<?php echo $werknemerAdres; ?> "><br/>
        <input type="text" name="werknemerPostcode" value="<?php echo $werknemerPostcode; ?> "><br/>
        <input type="text" name="werknemerWachtwoord" value="<?php echo $werknemerWachtwoord; ?> "><br/>
        <input type="submit"><br/><br/>
    </form>
    <h2><a href="werknemerIndex.php">go back to shows</a></h2>
</div>
</body>
</html>
