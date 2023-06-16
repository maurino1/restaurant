<?php

require_once "connectie.php";

class werknemer
{


    public $werknemerEmail;
    public $werknemerNaam;
    public $werknemerFunctie;
    public $werknemerContact;
    public $werknemerAdres;
    public $werknemerPostcode;
    public $werknemerWachtwoord;


    function __construct($werknemerEmail = NULL, $werknemerNaam = NULL, $werknemerFunctie = NULL, $werknemerContact = NULL, $werknemerAdres = NULL, $werknemerPostcode = NULL, $werknemerWachtwoord = NULL )
    {
        $this->werknemerEmail = $werknemerEmail;
        $this->werknemerNaam = $werknemerNaam;
        $this->werknemerFunctie = $werknemerFunctie;
        $this->werknemerContact = $werknemerContact;
        $this->werknemerAdres = $werknemerAdres;
        $this->werknemerPostcode = $werknemerPostcode;
        $this->werknemerWachtwoord = $werknemerWachtwoord;
    }

    function set_werknemerEmail($werknemerEmail)
    {
        $this->werknemerEmail = $werknemerEmail;
    }

    function set_werknemerNaam($werknemerNaam)
    {
        $this->werknemerNaam = $werknemerNaam;
    }

    function set_werknemerFunctie($werknemerFunctie)
    {
        $this->werknemerFunctie = $werknemerFunctie;
    }

    function set_werknemerContact($werknemerContact)
    {
        $this->werknemerContact = $werknemerContact;
    }

    function set_werknemerAdres($werknemerAdres)
    {
        $this->werknemerAdres = $werknemerAdres;
    }

    function set_werknemerPostcode($werknemerPostcode)
    {
        $this->werknemerPostcode = $werknemerPostcode;
    }

    function set_werknemerWachtwoord($werknemerWachtwoord)
    {
        $this->werknemerWachtwoord = $werknemerWachtwoord;
    }

    function get_werknemerEmail()
    {
        return $this->werknemerEmail;
    }

    function get_werknemerNaam()
    {
        return $this->werknemerNaam;
    }

    function get_werknemerFunctie()
    {
        return $this->werknemerFunctie;
    }
    function get_werknemerContact()
    {
        return $this->werknemerContact;
    }

    function get_werknemerAdres()
    {
        return $this->werknemerAdres;
    }

    function get_werknemerPostcode()
    {
        return $this->werknemerPostcode;
    }

    function get_werknemerWachtwoord()
    {
        return $this->werknemerWachtwoord;
    }


    public function afdrukken()
    {
        echo $this->get_werknemerEmail();
        echo "";
        echo $this->get_werknemerNaam();
        echo "<br/>";
        echo $this->get_werknemerFunctie();
        echo "<br/>";
        echo $this->get_werknemerContact();
        echo "<br/>";
        echo $this->get_werknemerAdres();
        echo "<br/>";
        echo $this->get_werknemerPostcode();
        echo "<br/>";
        echo $this->get_werknemerWachtwoord();
        echo "<br/>";
    }


    public function createwerknemer()
    {
        global $conn;

        $werknemerId = NULL;
        $werknemerEmail = $this->get_werknemerEmail();
        $werknemerNaam = $this->get_werknemerNaam();
        $werknemerFunctie = $this->get_werknemerFunctie();
        $werknemerContact = $this->get_werknemerContact();
        $werknemerAdres = $this->get_werknemerAdres();
        $werknemerPostcode = $this->get_werknemerPostcode();
        $werknemerWachtwoord = $this->get_werknemerWachtwoord();



        $sql = $conn->Prepare("insert into werknemer
values (:werknemerId,:werknemerEmail, :werknemerNaam, :werknemerFunctie, :werknemerContact, :werknemerAdres, :werknemerPostcode, :werknemerWachtwoord) ");

        $sql->bindParam(":werknemerId", $werknemerId);
        $sql->bindParam(":werknemerEmail", $werknemerEmail);
        $sql->bindParam(":werknemerNaam", $werknemerNaam);
        $sql->bindParam(":werknemerFunctie", $werknemerFunctie);
        $sql->bindParam(":werknemerContact", $werknemerContact);
        $sql->bindParam(":werknemerAdres", $werknemerAdres);
        $sql->bindParam(":werknemerPostcode", $werknemerPostcode);
        $sql->bindParam(":werknemerWachtwoord", $werknemerWachtwoord);
        $sql->execute();

        echo "De werknemer is toegevoegd: </br>";
    }
    public
    function updatewerknemer($werknemerId)
    {
        global $conn;

        $werknemerId;
        $werknemerEmail = $this->get_werknemerEmail();
        $werknemerNaam = $this->get_werknemerNaam();
        $werknemerFunctie = $this->get_werknemerFunctie();
        $werknemerContact = $this->get_werknemerContact();
        $werknemerAdres = $this->get_werknemerAdres();
        $werknemerPostcode = $this->get_werknemerPostcode();
        $werknemerWachtwoord = $this->get_werknemerWachtwoord();

        $sql = $conn->prepare("
									update werknemer
									set werknemerId=:werknemerId, werknemerEmail=:werknemerEmail, werknemerNaam=:werknemerNaam, 
									    werknemerFunctie=:werknemerFunctie, werknemerContact=:werknemerContact, werknemerAdres=:werknemerAdres, werknemerPostcode=:werknemerPostcode, werknemerWachtwoord=:werknemerWachtwoord    
									where werknemerId=:werknemerId");


        $sql->bindParam(":werknemerId", $werknemerId);
        $sql->bindParam(":werknemerEmail", $werknemerEmail);
        $sql->bindParam(":werknemerNaam", $werknemerNaam);
        $sql->bindParam(":werknemerFunctie", $werknemerFunctie);
        $sql->bindParam(":werknemerContact", $werknemerContact);
        $sql->bindParam(":werknemerAdres", $werknemerAdres);
        $sql->bindParam(":werknemerPostcode", $werknemerPostcode);
        $sql->bindParam(":werknemerWachtwoord", $werknemerWachtwoord);
        $sql->execute();
    }

    public function readwerknemer ()
    {
        global $conn;

        $sql = $conn->prepare(" SELECT * FROM werknemer");
        $sql->execute();
        foreach ($sql as $werknemer) {
            echo $werknemer["werknemerId"] . " - ";
            $this->set_werknemerEmail($werknemer["werknemerEmail"]);
            echo $werknemer["werknemerEmail"] . " - ";
            $this->set_werknemerNaam($werknemer["werknemerNaam"]);
            echo $werknemer["werknemerNaam"] . " - ";
            $this->set_werknemerFunctie($werknemer["werknemerFunctie"]);
            echo $werknemer["werknemerFunctie"] . " - ";
            $this->set_werknemerContact($werknemer["werknemerContact"]);
            echo $werknemer["werknemerContact"] . " - ";
            $this->set_werknemerAdres($werknemer["werknemerAdres"]);
            echo $werknemer["werknemerAdres"] . " <br/> ";
            $this->set_werknemerPostcode($werknemer["werknemerPostcode"]);
            echo $werknemer["werknemerPostcode"] . " <br/> ";
            $this->set_werknemerWachtwoord($werknemer["werknemerWachtwoord"]);
            echo $werknemer["werknemerWachtwoord"] . " <br/> ";
        }
    }

    public function searchwerknemer($werknemerId)
    {

        global $conn;

        $sql = $conn->prepare("select * from werknemer
                               where werknemerId = :werknemerId");

        $sql->bindParam(":werknemerId", $werknemerId);
        $sql->execute();

        foreach ($sql as $werknemer) {
            echo $werknemer["werknemerId"] . "<br>";
            echo $this->werknemerEmail = $werknemer["werknemerEmail"] . "<br>";
            echo $this->werknemerNaam = $werknemer["werknemerNaam"] . "<br>";
            echo $this->werknemerFunctie = $werknemer["werknemerFunctie"] . "<br>";
            echo $this->werknemerContact = $werknemer["werknemerContact"] . "<br>";
            echo $this->werknemerAdres = $werknemer["werknemerAdres"] . "<br>";
            echo $this->werknemerPostcode = $werknemer["werknemerPostcode"] . "<br>";
            echo $this->werknemerWachtwoord = $werknemer["werknemerWachtwoord"] . "<br>";


        }
    }

    public function deletewerknemer($werknemerId)
    {
        global $conn;

        $sql = $conn->prepare(" DELETE FROM werknemer
        where werknemerId = :werknemerId");

        $sql->bindParam(":werknemerId", $werknemerId);
        $sql->execute();
    }


}