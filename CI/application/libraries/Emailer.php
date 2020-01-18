<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

class Emailer {
    public function sendmail($subject, $content){
    $mgClient = new Mailgun('0c0874b393d015d961cbffa8b9d1084e-a9919d1f-66b570e0');
    $domain = "sandbox2e5f95826a6b466e8b38dc95e5c5da53.mailgun.org";
    # Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Automail <postmaster@sandbox2e5f95826a6b466e8b38dc95e5c5da53.mailgun.org>',
	'to'	=> 'Jeff <hokahwai@hotmail.com>',
	'subject' => $subject,
	'text'	=> $content
));
    }
}

?>
