<?php

  // if 'exit' field was filled in on contact page, its a bot and exit and show error
if ($_POST["Hpot"] != "") {
  echo "<h1>Congratz You Have Arrived in the Hpot!</h1>";
  exit;
}

  // require Creds
  require ("../assets/libraries/phpmailer/PHPMailerAutoload.php");
  require ("../assets/creds/creds.php");

  // use INPUT class to get input instead of _POST and sanitize
  $contactName = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
  $contactEmail = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
  $contactMessage = trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));

  // If either are blank, show error on contact page
  if ($contactName == "" || $contactEmail == "" || $contactMessage == "") {
    header("location:/index.php?page=contact&email=error-blank");
  }
  elseif {
    $mail = new PHPMailer;
    // If email is not valid
    if (!$mail->ValidateAddress($contactEmail)) {
    // Show invalid email error on contact page
      header("location:/index.php?page=contact&email=error-invalid");
    }

    // Arrange email's body
    $emailBody = "Name " . $contactName;
    $emailBody .= "Email " . $contactEmail;
    $emailBody .= "Message " . $contactMessage;

    // Sends Email with class
    //SMTP needs accurate times, and the PHP time zone MUST be set
    //This should be done in your php.ini, but this is how to do it if you don't have access to that
        date_default_timezone_set('Etc/UTC');

    //Create a new PHPMailer instance
        $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
        $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
        $mail->SMTPDebug = 2;
    //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
    //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = $gmailUserName;
    //Password to use for SMTP authentication
        $mail->Password = $gmailPass;
    //Set who the message is to be sent from
        $mail->setFrom($contactEmail, $contactName);
    //Set an alternative reply-to address
    //    $mail->addReplyTo('replyto@example.com', 'First Last');
    //Set who the message is to be sent to
        $mail->addAddress($gmailReciepient, 'Awnold');

      $mail->isHTML(true);

      $mail->Subject = 'Portfolio Contact - From: ' . $contactName;
      $mail->Body    = '<h1>Portfolio Contact Form</h1><br>' . $contactMessage;

    if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
      exit;
    } else {
      echo 'Message has been sent';
    }

    header("location:/index.php?page=contact&email=thanks");  // Redirect header to contact page
  }
?>