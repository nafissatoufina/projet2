<?php 
$servername='localhost';
$username='root';
$database='portfolio';
$passeword='';

if(!empty($_POST["send"])) {
	$nom = $_POST["nom"];
	$prenom= $_POST["prenom"];
	$adresse_email = $_POST["mail"];
    $message = $_POST["message"];
    
    //on établi la connexion
$conn=new mysqli($servername,$username,$passeword,$database);
//on vérifi la connexion
if($conn->connect_error){
    die('erreur:' .$conn->connect_error);
}
echo'connexion reuissi <br>';
 
$sql = "INSERT INTO informations (nom, prenom,adresse_email, message) VALUES ('" . $nom. "', '" . $prenom. "','" . $adresse_email. "','" . $message. "')";
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);	
}
//l'envoie du mail
if(!empty($_POST["send"])) {
    $nom= $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse_email = $_POST["mail"];
    $message = $_POST["message"];
    $toEmail = "VotreAdresse@gmail.com";
    $mailHeaders = "From: " . $nom . "<". $adresse_email .">\r\n";
    if(mail($toEmail,$nom, $prenom, $message,$adresse_email, $mailHeaders)) {
      $mail_msg = "Vos informations de contact ont été reçues avec succés.";
      $type_mail_msg = "success";
    }else{
      $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
      $type_mail_msg = "error";
    }
  }
?>