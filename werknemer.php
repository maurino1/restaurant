<?php

require "connectie.php";
class werknemer
{
    protected $werknemerEmail;
    protected $werknemerWachtwoord;

    public function __construct($werknemerEmail = NULL, $werknemerWachtwoord = NULL)
    {
        $this->werknemerEmail = $werknemerEmail;
        $this->werknemerWachtwoord = $werknemerWachtwoord;
    }

    public function getWerknemerEmail()
    {
        return $this->werknemerEmail;
    }

    public function getWerknemerWachtwoord()
    {
        return $this->werknemerWachtwoord;
    }
public function aanmelden()
{
    global $conn;
    $werknemerEmail=$this->getWerknemerEmail();
    $werknemerWachtwoord=$this->getWerknemerWachtwoord();
    $wachtwoordHash=password_hash($werknemerWachtwoord, PASSWORD_DEFAULT);
    $sql = $conn->prepare
    ("
        insert into medewerker values 
        (:werknemerEmail, :werknemerWachtwoord)
    ");
    $sql->bindParam(":werknemerEmail",$werknemerEmail);
    $sql->bindParam(":werknemerWachtwoord", $wachtwoordHash);
    $sql->execute();
    echo    "de werknemer is in de database gezet.<br/>";

}
public function inloggen()
{
        require"connectie.php";
}
    public function alleWerknemers()
    {
        global $conn;
        require "connectie.php";
        $sql = $conn->prepare
        ("select * from medewerker");
        $sql->execute();
        foreach($sql as $werknemer);
        {
            echo $this->werknemerEmail=$werknemer["werknemerEmail"]."-";
            echo $this->werknemerWachtwoord=$werknemer["werknemerWachtwoord"]."<br/>";
        }
    }
    public function afdrukkenWerknemer()
    {
        echo $this->getWerknemerEmail();
        echo "<br/>";
        echo $this->getWerknemerWachtwoord();
    }
}
?>