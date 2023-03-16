<?php
function my_phpmailer_example( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = 'smtp.google.com';
    $phpmailer->SMTPAuth = true; // Ask it to use authenticate using the Username and Password properties
    $phpmailer->Port = 587;
    $phpmailer->Username = 'vivo5plus2439@gmail.com';
    $phpmailer->Password = '41324372439';

    // Additional settings…
    $phpmailer->SMTPSecure = 'tls'; // Choose 'ssl' for SMTPS on port 465, or 'tls' for SMTP+STARTTLS on port 25 or 587
    $phpmailer->From = "vivo5plus2439@gmail.com";
    $phpmailer->FromName = "Neil Axinto (CEO)";
}
// add_action( 'phpmailer_init', 'my_phpmailer_example' );

// if(isset($_POST['send_test_mail'])){    
//     if(isset($_POST['email']))
//         $to = $_POST['email'];
//     else{
//         $to = 'axintoneil@gmail.com';
//     }
//     $subject = 'axintoneil.com mail';
//     if(isset($_POST['message']))
//         $message = $_POST['message'];
//     else{
//         $message = "message is empty";
//     }

//      add_action( 'phpmailer_init', 'my_phpmailer_example' );          

//     wp_mail( $to, $subject, $message );

//     remove_action( 'phpmailer_init', 'my_phpmailer_example' );

//     echo '<script>alert("icheck daw imo mail if nasend na ba...");</script>';
// }

  

    $to = 'axintoneil@gmail.com';
    
    $subject = 'test php mailer';

    $message = "message is empty";
    

     add_action( 'phpmailer_init', 'my_phpmailer_example' );          

    wp_mail( $to, $subject, $message );

    remove_action( 'phpmailer_init', 'my_phpmailer_example' );

    echo '<script>alert("icheck daw imo mail if nasend na ba...");</script>';

?>