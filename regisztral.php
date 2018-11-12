<?php 
require_once("db.php");

$nev = $_POST["name"];
$email = $_POST["email"];
$jelszo = $_POST["password"];
$jelszo_megerosites = $_POST["password_conf"];

    echo 'Add meg az összes adatot!!!!';
if (!$nev || !$email || !$jelszo || !$jelszo_megerosites) {
    
}

if ($jelszo !==$jelszo_megerosites)  {
echo'A két jelszó nem eggyeik meg';
}

$db = new DB();
$sql = "INSERT INTO `felhasznalok` (`id`, `nev`, `email`, `jelszo`, `salt`) VALUES (NULL, 
                                                                                   ," . $nev . ", 
                                                                                   " . $email . ",
                                                                                   " . $jelszo . ")
                                                                                   '')";                                                                                   
echo $db->query( $sql );    
