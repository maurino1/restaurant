<?php

require "connectie.php";
class werknemer0

{

    //properties
    public $naam;
    public $postcode;
    public $email;
    public $contact;
    public $adres;

    public $woonplaats;

    //constructor
    function __construct($naam = NULL, $postcode = NULL, $contact = NULL, $email = NULL, $adres = NULL, $woonplaats = NULL )
    {

        $this->naam = $naam;
        $this->postcode = $postcode;
        $this->contact = $contact;
        $this->email = $email;
        $this->adres = $adres;
        $this->woonplaats = $woonplaats;

    }

    //setters
    function set_email($email)
    {
        $this->email = $email;
    }



    function set_name($naam){
        $this->naam = $naam;
    }

    function set_postcode($postcode){
        $this->postcode = $postcode;
    }

    function set_contact($contact)
    {
        $this->contact = $contact;
    }

    function set_adres($adres)
    {
        $this->adres = $adres;
    }

    function set_woonplaats($woonplaats)
    {
        $this->woonplaats = $woonplaats;
    }

    //getters

    function get_name(){
        return $this->naam;
    }

    function get_postcode(){
        return $this->postcode;
    }

    function get_contact()
    {
        return $this->contact;
    }
    function get_adres()
    {
        return $this->adres;
    }

    function get_woonplaats()
    {
        return $this->woonplaats;
    }

    function get_email()
    {
        return $this->email;
    }






    // functies voor crud


    public function afdrukken()
    {
        echo $this->get_name();
        echo "<br/>";
        echo $this->get_email();
        echo "<br/>";
        echo $this->get_telefoonnummer();
        echo "<br/>";
        echo $this->get_adres();
        echo "<br/>";
        echo $this->get_postcode();
        echo "<br/>";

    }

    public function createLeverancier(){
        $werknemerId = NULL;
        $naam = $this->get_name();
        $email = $this->get_email();
        $contact = $this->get_contact();
        $adres = $this->get_adres();
        $postcode = $this->get_postcode();
        $woonplaats = $this->get_woonplaats();
        global $conn;

        $sql = $conn->Prepare("INSERT INTO medewerker VALUES(:werknemerId, :werknemerNaam, :werknemerEmail, :werknemerTelefoonNummer, :werknemerAdres, :levPostcode, :werknemerWachtwoord)");
        $sql->execute([
            'levid' => $leverancierid,
            "levnaam" => $naam,
            "levcontact" => $contact,
            "levEmail" => $email,
            "levAdres" => $adres,
            "levPostcode" => $postcode,
            "levWoonplaats" => $woonplaats,
        ]);
        echo"de leverancier is toegevoegd";
    }

    public function readLeverancier(){
        global $conn;
        $sql = $conn->Prepare(" SELECT * FROM leveranciers
        
        
        ");

        $sql->execute();
        foreach($sql as $student)
        {
            echo $student ["levid"] . " - ";
            echo $this->naam= $student ["naam"]. " - ";
            echo $this->postcode = $student ["postcode"]. "<br>";
        }

    }
    public function searchLeverancier($leverancierid){
        require "LeverancierConnect.php";
        $sql = $conn->Prepare("SELECT * FROM medewerker WHERE werknemerId = :werknemerId  ");
        $sql->bindParam(":medewerkerId", $medewerkerId);
        $sql->execute();

        foreach($sql as $student){
            echo $student["medewerkerId"] . "<br>";
            echo $student["naam"] . "<br>";
            $this->naam=$student["naam"];
            echo $student["postcode"] . "<br>";
            $this->postcode=$student["postcode"];

        }
    }
    public function deleteLeverancier($werknemerId)
    {
        require "connectie.php";
        // statement maken
        $sql = $conn->prepare("
									delete from medewerker
									where leverancierid = :werknemerId
								 ");
        // variabele in de statement zetten
        $sql->bindParam(":werknemerId", $werknemerId);
        $sql->execute();
    }

    public function updateLeverancier($leverancierid)
    {
        require "connectie.php";
        // gegevens uit het object in variabelen zetten
        $leverancierid;
        $naam 		= $this->get_name();
        $postcode 	= $this->get_postcode();
        // statement maken
        $sql = $conn->prepare("
									update leverancier
									set adres=:adres, naam=:naam, postcode=:postcode
									where werknemerId=:werknemerId
								 ");
        // variabelen in de statement zetten
        $sql->bindParam(":werknemerId", $werknemerId);
        $sql->bindParam(":adres", $adres);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":postcode", $postcode);
        $sql->execute();
    }

}
}