<?php

// $name = $_POST["name"]; 
// $class = $_POST["class"];
// $niveau= (int)$_POST["niveau"];
// $race=  $_POST["race"];
// $specialisation= $_POST["specialisation"];
// $guild= $_POST["guild"];


// $host = "localhost";
// $port = "3306";
// $dbname = "Devliveroo";
// $charset = "UTF8";
// $user = "root";
// $password = "";

//Data Source Name 
// $dsn = "mysql:host=$host:$port;dbname=$dbname;charset=$charset";

// try{
    //ma bdd
    //Database Handle
//     $dbh = new PDO($dsn,$user,$password);
//     echo 'bien co';
// }catch(PDOException $e){
//     var_dump($e);
//     echo 'cheh';
// }
//ma requete prepapré
//statement handle
// $stmt= $dbh->prepare("INSERT INTO perso(name,class,class,niveau,race,specialisation,guild,) VALUES(:name,:class,:niveau,:race,:specialisation,:guild);");



// $stmt->bindParam(':name', $name);
// $stmt->bindParam(':class', $class);
// $stmt->bindParam(':niveau', $niveau);
// $stmt->bindParam(':race', $race);
// $stmt->bindParam(':specialisation', $specialisation);
// $stmt->bindParam(':guild', $niveau);

//  $stmt->execute();
// ?>

<!-- user -->
<!-- id=>AI=>INT=>NOTNULL=>PK 

AI = AUTO INCREMENTATION

INT = INREGRER

PK => PRIMARY KEY

NOM -> varCHar(20)->notnull
prenom -> varCHar(20)->notnull
email -> VarChar(60)->notnull
Telephone -> int(10)->null
mot de passe -> VarChar(255)->NOTNULL
adresse -> int(100)->NOTNULL->PK
Photo de profil->varchar(255)->null

info qui se repette si cettte info peu etre degouter ça doit etre une table


id_adress PK

N° -> int(20)->notnull
rue -> VarChart(100)NOTNULL
codepostale -> INT(5)->notnull
ville-> VarChar(50)-NOTNULL


ID_restau PK

NOM -> varchar(50)->notnul
ADRESSE -> varchar(100)->notnull fk
Telephone -> INT(20)->notnull
open_Time-> text ->not null
email->v

ID_reservation Pk

user->varchar->notnul->FK
restau->vachar(50)->notnull->FK
date->varchar(50)->notnull
heure->int(20)->NOTNULL -->





<input type="button" name="" value="" id="" required >

