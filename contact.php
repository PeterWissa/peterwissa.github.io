<?php 

if (isset($_POST['SUBMIT'])) {
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailTo = "peter.wissa@icloud.com";
$headers = "From: ".mailFrom;
$txt = "You have received an e-mail from ".$name."."\n\n".$message;



mail($mailTo, $subject, $txt, $headers);

header("Location: index.php?mailsend");

}
