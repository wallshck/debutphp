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







<?
$stmt = $dbh->query("SELECT * FROM Address");

$AllRows = $stmt->fetchAll();

//$Allrows => ["id_address"=>4,"Number"=>98,"address"=> "rue sully","zip"=>80000,"City"=> "Amiens"]
                

foreach($AllRows as $row){
    echo "Vous habitez au ".$row["Number"]." ".$row["Address"];
    echo " Code postal: ".$row["Zip"];
    echo " Dans la ville de ".$row["City"]."<br>";
}

$stmt = $dbh->query("SELECT * FROM Address WHERE ID_address=1");

$Rows = $stmt->fetch();

//$rows = ["id_address"=>4,"Number"=>98,"address"=> "rue sully","zip"=>80000,"City"=> "Amiens"]
        //["id_address"=>4,"Number"=>98,"address"=> "rue sully","zip"=>80000,"City"=> "Amiens"]
        //["id_address"=>4,"Number"=>98,"address"=> "rue sully","zip"=>80000,"City"=> "Amiens"]
        //["id_address"=>4,"Number"=>98,"address"=> "rue sully","zip"=>80000,"City"=> "Amiens"]

foreach($AllRows as $row){
    echo "Vous habitez au ".$row["Number"]." ".$row["Address"];
    echo " Code postal: ".$row["Zip"];
    echo " Dans la ville de ".$row["City"]."<br>";
}

?>