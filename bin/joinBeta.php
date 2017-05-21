<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['facebook'])     ||
   empty($_POST['gradyear'])     ||
   empty($_POST['city'])     ||
   empty($_POST['state'])     ||
   empty($_POST['highschool'])     ||
   empty($_POST['communityService'])     ||
   empty($_POST['activities'])     ||
   empty($_POST['referred'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$facebook = strip_tags(htmlspecialchars($_POST['facebook']));
$gradyear = strip_tags(htmlspecialchars($_POST['gradyear']));
$city = strip_tags(htmlspecialchars($_POST['city']));
$state = strip_tags(htmlspecialchars($_POST['state']));
$highschool = strip_tags(htmlspecialchars($_POST['highschool']));
$communityService = strip_tags(htmlspecialchars($_POST['communityService']));
$activities = strip_tags(htmlspecialchars($_POST['activities']));
$referred = strip_tags(htmlspecialchars($_POST['referred']));

// Create the email and send the message
$to = 'betathetapimn@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "PNM Interest Form:  $name";
$email_body = "You have received a new message from your website PNM Interest form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nFacebook:\n$facebook\n\nGraduation Year:$gradyear\n\nCity: $city\n\nState:  $state\n\nHighschool: $highschool\n\n communityService: $communityService\n\n activities: $activities\n\nReferal Info:\n$referred";
$headers = "From: noreply@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
