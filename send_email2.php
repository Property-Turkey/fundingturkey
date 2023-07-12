<?php 





    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';


require_once('locale.php');
require_once('configs.php');

$error_msg = '';
$email_body = '';
$email_message = '';
$required_fields = ['name', 'email', 'phone'];

$srvr = strpos($_SERVER['SERVER_NAME'], 'fundingturkey.com') === false ? 'fundingturkey.com' : 'fundingturkey.com';

foreach($_POST as $key => $value) {
    if(in_array($key, $required_fields)){
        empty($value) ? $error_msg=__('please_fill_the_field')." <b>". __( $key ) .'</b>' : '';
    }
    $email_message .= '
          <tr>
            <th>'.__( $key ).':</th>
            <td>'.$value.'</td>
          </tr>';
}

if(empty($error_msg)){

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.fundingturkey.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'noreply@fundingturkey.com';                     //SMTP username
        $mail->Password   = '--Password--';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        $mail->CharSet    = "UTF-8";
        $mail->SMTPDebug  = false;

        //Recipients
        $mail->setFrom('noreply@fundingturkey.com', 'Funding Turkey');
        $mail->addAddress('matt@fundingturkey.com');     //Add a recipient
        
    //     $mail->addAddress('ellen@example.com');               //Name is optional
    //     $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('ft@ftportfoy.com');     //Add a recipient
        $mail->addCC('muhammad@propertyturkey.com');
        $mail->addBCC('osama@propertyturkey.com');

        //Attachments
    //     $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //     $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $userinfo = '<i>Browser</i>: '.@$_SERVER['HTTP_USER_AGENT'].
                    '<br> <i>Country IP</i>: <a href="http://whatismyipaddress.com/ip/'.@$_SERVER['REMOTE_ADDR'].'">'.@$_SERVER['REMOTE_ADDR'].'</a>
                    <br> <i>Language</i>: '.@$_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $to = 'pool@fundingturkey.com' ; 
        $mail->Subject = "Contact from : ".$_POST['name'];;
        $mail->AltBody = implode( '\n\n', $_POST );
        $mail->Body = '
            <table cellpadding="1">
            <tr>
                <th colspan="2">New message from '.$_SERVER['SERVER_NAME'].'</th>
            </tr>
            '.$email_message.'
            <tr>
                <th>Info: </th>
                <td>'.$userinfo.'</td>
            </tr>
            </table>';

        $mail->send();
        echo json_encode(['status'=>'SUCCESS', 'msg'=>__('email-sent')]); die();
    } catch (Exception $e) {
        echo json_encode(['status'=>'FAIL', 'msg'=>$mail->ErrorInfo]); die();
    }
}else{
    echo json_encode(['status'=>'FAIL', 'msg'=>$error_msg]); die();
}

?>