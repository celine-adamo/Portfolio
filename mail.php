<?php
/* if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "celineadamo.ca@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
 */

require_once '../../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
  ->setUsername('78312fd5dda912')
  ->setPassword('8666f1a023e4a7')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($_POST['subject']))
  ->setFrom(['john@doe.com' => 'John Doe'])
  ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);
if($result){
    echo json_encode(["message"=>'Votre mail à bien été envoyé !']);
}