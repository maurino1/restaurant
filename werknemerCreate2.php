<!doctype html>
<html>
<!--  -->
    <head>
        <title>werknemer create</title>
    </head>
    <body>
    <h1>werknemer create</h1>
        <?php
        require "werknemer.php";
        // uitlezen vakjes van KlantenCreate1 -----
        $werknemerEmail = $_POST["werknemerEmailVak"];
        $werknemerNaam = $_POST["werknemerNaamVak"];
        $werknemerFunctie= $_POST["werknemerFunctieVak"];
        $werknemerContact= $_POST["werknemerContactVak"];
        $werknemerAdres = $_POST["werknemerAdresVak"];
        $werknemerPostcode = $_POST["werknemerPostcodeVak"];
        $werknemerWachtwoord = $_POST["werknemerWachtwoordVak"];
        // maken object -------------------------------
        $werknemer1 = new werknemer($werknemerEmail, $werknemerNaam, $werknemerFunctie, $werknemerContact, $werknemerAdres, $werknemerPostcode, $werknemerWachtwoord);
        $werknemer1->createwerknemer();

        // afdrukken object ---------------------------

        $werknemer1->afdrukken(); //hallo
        ?>
    </body>
</html>
