<?php
echo "i do work\n";
$msg = "sup yo\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
$headers .= 'From: from@example.com' . "\r\n" .
'Reply-To: reply@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$mail=mail('lucascondon21@gmail.com','My subject11',$msg,$headers);
if($mail){
  echo "Thank you for using our mail form\n";
}else{
  echo "Mail sending failed.\n"; 
}
// $name = strip_tags($_POST['name']);
// $email_address = strip_tags($_POST['email']);
// $phone = strip_tags($_POST['phone']);
// $message = strip_tags($_POST['message']);
   
// Create the email and send the message
// $to = 'lcondon@bennington.edu'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
// $email_subject = "Website Contact Form: ";
// $email_body = `You have received a new message from your website contact form.\n\n`.`Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message`;
// $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";   
// mail($to,$email_subject,$email_body,$headers);
// return true;

?>