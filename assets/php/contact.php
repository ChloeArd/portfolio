<?php

if (isset($_POST["email"], $_POST["subject"], $_POST['message'])) {

    $email = htmlentities(trim($_POST['email']));
    $to = "chloe.ardoise@gmail.com";
    $subject = htmlentities(trim($_POST['subject']));
    $message = htmlentities(trim($_POST['message']));
    $message = wordwrap($message, 70, "\r\n");
    $headers = array(
        'Reply-To' => $email,
        'Cc' => 'chloe.ardoise@gmail.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mail($to, $subject, $message, $headers, "-f " . $email);
        header("Location: ../../index.php?success=0");
    }
    else {
        header("Location: ../../index.php?error=1");
    }
}
else {
    header("Location: ../../index.php?error=0");
}