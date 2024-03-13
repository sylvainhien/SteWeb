<?php
include 'connect.php';

if(isset($_POST['submit'])) {
 
 $nom =$_POST['nom'];
 $email =$_POST['email'];
 $text =$_POST['text'];
 
 $sql = " INSERT INTO presence(`nom`, `email`, `text`) VALUES ('$nom',' $email',' $text')";

 $result = mysqli_query($conn,$sql);
}

echo 'Vos information ont bel et bien été envoyé,merci !! <a href="index.php">Cliquez ici pour révénir a la page précédente</a>';