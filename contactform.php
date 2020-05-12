<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dinner Requests</title>
        <link rel="stylesheet" type="text/css" href="styles2.css">
        <link href="https://fonts.googleapis.com/css?family=Concert+One|Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Thank you for sending!</h1>
        <img id="image" src="mama2.png"/>

        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
        
        try {
            // Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
              ->setUsername('tbuwad@gmail.com')
              ->setPassword('xxxxxxxx')
            ;
        
            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
        
            // Create a message
            $body = $_POST['message'];
        
            $message = (new Swift_Message('New Dinner Request'))
              ->setFrom(['tbuwad@gmail.com' => 'Anonymous'])
              ->setTo(['xxxxxxxxxx@vmobile.ca'])
              ->setBody($body)
              ->setContentType('text/html')
            ;
        
            // Send the message
            $mailer->send($message);

        } catch(Exception $e) {
            echo $e->getMessage();
        }
        ?>

    </body>
</html>