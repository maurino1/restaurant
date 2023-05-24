<?php
    require "werknemer.php";

    echo "<h1>Aanmeldformulier werknemer </h1>";
    $werknemerNaam=$_POST["naam"];
    $werknemerEmail=$_POST["emailvak"];
    $werknemerWachtwoord=$_POST["wachtwoordvak"];
    $werknemerTelefoonNummer=$_POST["telefoonnummer"];
    $werknemerAdress=$_POST["adress"];
    $werknemerPostcode=$_POST["postcode"];
    $werknemer1 = new werknemer($werknemerEmail,$werknemerWachtwoord);
    $werknemer1->aanmelden();

    echo "Deze werknemer is aangemeld: <br/>";
    $werknemer1->afdrukkenWerknemer();

    echo "<br><br/><a href='hoofdmenu.php'>terug naar hoofdmenu</a>";

