<?php

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $emailTo = ""; /* Put email here.. */
        $headers = "From: ".$emailFrom;
        $properMessage = 'Wiadomość od: '.$name.'\n\n'.$message;

        mail($emailTo, $subject, $properMessage, $headers);
        header('Location: index.php'); /* Change this */
    }

?>