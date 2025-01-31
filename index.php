<?php


require __DIR__ . '/inc/all.inc.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (!empty($_POST['submit'])) {
    $mailConfig = new  Contact\MailConfig();
    if (isset($_POST['terms']) && $_POST['terms'] == 'Yes') {

        $isMailSent = $mailConfig->sendMail($_POST['email'], $_POST['name'], $_POST['message']) ?? '';
        if ($isMailSent) {
            $_POST['email'] = '';
            $_POST['name'] = '';
            $_POST['message'] = '';
        }
    } else {
        $errorMessage = 'You must accept the terms and conditions';
    }
}

require __DIR__ . '/views/index.view.php';
