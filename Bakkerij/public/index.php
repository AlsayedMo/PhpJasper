<?php
/**
 * Display all errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Test a mail
 */
$mailTo = 'persoon@nieuwsbrief.nl';

// Define the headers so we can use HTML
$headers  = "From: afzender@testmail.nl\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// define the subject
$subject = 'Voorbeeld test mail';

// define the html content
$html = 'hoi tester,<br>' . "\n\r";
$html .= 'Dit is een voorbeeld mail van mij.<br>' . "\n\r";
$html .= 'En hier staat een link: <a href="https://www.w3schools.com/php/func_mail_mail.asp">Mail voorbeeld</a><br>' . "\n\r";
$html .= 'groetjes,<br>' . "\n\r";
$html .= 'De test mail server';

// send the mail using php mail 
$res = mail($mailTo, $subject, $html, $headers);

/**
 * Display the result
 */
echo 'is de mail verstuurd? ';
var_dump( $res);
