<?php
$Name = $_POST["Name"];
$Couleur = $_POST["Couleur"];
$nombre = $_POST["nombre"];


$host = "localhost";
$port = "3306";
$dbname = "repas";
$charset = "UTF8";
$user = "root";
$password = "";

//Data Source Name 
$dsn = "mysql:host=$host:$port;dbname=$dbname;charset=$charset";

try{
    //ma bdd
    //Database Handle
    $dbh = new PDO($dsn,$user,$password);
    echo 'bien co';
}catch(PDOException $e){
    var_dump($e);
    echo 'cheh';
}
//ma requete prepapré
//statement handle
$stmt= $dbh->prepare("INSERT INTO produit(Name,Couleur,nombre,) VALUES(:Name,:Couleur,:nombre);");

$stmt->bindParam(':Name', $Name);
$stmt->bindParam(':Couleur', $Couleur);
$stmt->bindParam(':nombre', $nombre);

 $stmt->execute();
?>

