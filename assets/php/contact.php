<?php

if (isset($_POST["email"], $_POST["subject"], $_POST['message'], $_POST['name'])) {

    $email = htmlentities(trim($_POST['email']));
    $to = "chloe@chloeard.fr";
    $subject = htmlentities(trim($_POST['subject']));
    $message = htmlentities(trim($_POST['message'])) . " De " . htmlentities(trim($_POST['name']));
    $message = wordwrap($message, 70, "\r\n");
    $headers = array(
        'Reply-To' => $email,
        'Cc' => 'chloe@chloeard.fr',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mail($to, $subject, $message, $headers, "-f " . $email);
        header("Location: ../../?success=0");
    }
    else {
        header("Location: ../../?error=1");
    }
}
else {
    header("Location: ../../?error=0");
}