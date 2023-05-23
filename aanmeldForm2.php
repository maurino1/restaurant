<?php
    require "werknemer.php";

    echo "<h1>Aanmeldformulier werknemer </h1>";
    $werknemerEmail=$_POST["emailvak"];
    $werknemerWachtwoord=$_POST["wachtwoordvak"];
    $werknemer1 = new werknemer($werknemerEmail,$werknemerWachtwoord);
    $werknemer1->aanmelden();

    echo "Deze werknemer is aangemeld: <br/>";
    $werknemer1->afdrukkenWerknemer();

    echo "<br><br/><a href='hoofdmenu.php'>terug naar hoofdmenu</a>";
?>
