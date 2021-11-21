<?php


use PHPMailer\PHPMailer\PHPMailer;

 

  require_once '../../Admin/assets/php/vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require_once '../../Admin/assets/php/vendor/phpmailer/phpmailer/src/Exception.php';

  require_once '../../Admin/assets/php/vendor/phpmailer/phpmailer/src/SMTP.php';

  
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $msg = $_POST['message'];
  $subject="Inquiry From DLMS";

  $mail= new PHPMailer();

  $mail->isSMTP();
  $mail->Host="smtp.gmail.com";
  $mail->SMTPAuth=true;
  $mail->Username = "dlmslk2021@gmail.com";
  $mail->Password = "DLMS2021";
  $mail->Port = 465;

  $mail->SMTPSecure = "ssl"; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
     
  $mail->isHTML(true);
  $mail->setFrom($from_email,$from_name);
  $mail->addAddress("dlmslk2021@gmail.com");

   
  $mail->Subject = ($subject);
  
  $mail->Body="Name : $from_name <br><br> Email : $from_email <br><br> Message : $msg";

  if($mail->send()){
  //  $status="success";
    echo "Your message has been sent. Thank you!";

  }



  else{
   // $status="failed";
    echo "Something is wrong".$mail->ErrorInfo;

  }




  
  

