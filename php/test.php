<?php
$name = $_POST['name'];
$location = $_POST['location'];
$when = $_POST['whenseen'];
$timeofDay = $_POST['timeofday'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$message = "$name saw your pet at $location at $when, around $timeofDay. Contact $name at $email.";
if ($comments) $message .= "$name added the following comments: $comments";
$message = wordwrap($message, 70, "\r\n");

mail('marina.braverman@gmail.com', 'Marina\'s Form Test', $message);
echo "Thank you for letting me know about my pet's status! I will be in touch soon.";