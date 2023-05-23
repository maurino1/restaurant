<?php
    echo "<h1>Alle medewerkers</h1>";

    Require "werknemer.php";
    $werknemer1 = new werknemer();
    $werknemer1 ->alleWerknemers();
    echo "<br><br/><a href='hoofdmenu.php'>terug naar index.</a>";
