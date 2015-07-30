<?php
    # Send and log the email

    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $reply_to = $_POST['email'];
    $headers = 'From: '.$from_email."\r\n";
    $headers .= 'Reply-To: '.$reply_to. "\r\n";

    # Log the message in case it doesn't get to me
    $log_contents = "Sent: ".date('Y-m-d H:i:s')."\r\n";
    $log_contents .= "Subject: ".$subject."\r\n";
    $log_contents .= "Reply-to: ".$reply_to."\r\n";
    $log_contents .= "Message: ".$message."\r\n";
    $log_contents .= "\r\n=======================================\r\n\r\n";
    file_put_contents($contact_log_file, $log_contents, FILE_APPEND);

    # Send message to myself
    $success = mail($my_email, $subject, $message, $headers);
?>

    <div class="status-message">
        <?php if($success): ?>
            <h2>Thanks for your note!</h2>
            <p class="lead">I'll be in touch soon!</p>
        <?php else: ?>
            <h2>Uh oh, something went wrong&hellip;</h2>
            <p class="lead"><a href="/contact">Try again,</a> or <a href="#">find me on LinkedIn.</a></p>
        <?php endif; ?>
    </div>