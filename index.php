<?php
echo "bonjour";

?>

$firstname = $_GET ["firstname"];
$firstname = $_GET ["firstname"];
$firstname = $_GET ["firstname"];
$firstname = $_GET ["firstname"];

echo "prenom: $firstname nom: $lastname mail: $mail le mdp en clair :$mdp";

$firstname = $_POST ["firstname"];
$firstname = $_POST ["firstname"];
$firstname = $_POST ["firstname"];
$firstname = $_POST ["firstname"];

echo 'prenom: '.$firstname. nom: $lastname mail: $mail le mdp en clair :$mdp";


insert into 'users' ('id user', 'lastname','firstname', 'email', 'phone', 'password', 'adress', 'picture' ) VALUES (NULL, 'test', 'prenomtest','test@test', NULL, 'onverra' '0', '\'/images/image.png\'');

INSERT INTO `users` (`Id_User`, `Lastname`,`Firstname`, `Email`, `Phone`, `Password`, `Address`, `Picture`) VALUES (NULL, 'Test', 'PrenomTest', 'Test@test', NULL, 'testtest', '0', '\'images/image.png\'');

SELECT * FROM `users` WHERE 1

SELECT Firstname FROM users; 

SELECT Email,password FROM users; 

select* from user where email= "test@test"



create table restau
(
ID_Restaurant  INT  A.I  Not Null P.K
Name→ VarChar(50) Not Null
Address_ID→INT  FK  Not Null
Open_Time→TEXT  Not Null
phone INT(10)  Not Null
Email  VarChar(60) Not Null
Max_Place INT(3) Not Null
)

INSERT INTO `restau` (`id_restau`, `name`,`address`, `Open_time`, `phone`, `Email`, `max_place`) VALUES (NULL, 'Test', 'PrenomTest', 'Test@test', NULL, 'testtest', '0', '\'images/image.png\'');



CREATE TABLE Reservations
(
Id_Reservations INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
Places INT(3) NOT NULL,
Date_Reservation DATE NOT NULL,
Open_Time TEXT NOT NULL,
Hours TIME NOT NULL,
Commentary VARCHAR(255) NOT NULL,
User_ID INT NOT NULL,
Restaurant_ID INT NOT NULL
);

INSERT INTO `resa` (`id_resarvation`, `Place`,`Date_Reservation`, `Open_time`, `commentary`, `user_id`, `restaurant`, `Picture`) VALUES (NULL, 'Test', 'PrenomTest', 'Test@test', NULL, 'testtest', '0', '\'images/image.png\'');
