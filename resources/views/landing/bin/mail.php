<?php
if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $query = $_POST['query'];
    // 
            $to = 'langmaschool@gmail.com'; 
            $subject = 'New Lead The Sun Village';
            $from =  $email;

           // To send HTML mail, the Content-type header must be set
	        $headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	        // Create email headers
	        $headers .= 'From: '.$from."\r\n".
	            'Reply-To: '.$from."\r\n" .
	            'X-Mailer: PHP/' . phpversion();

            // Compose a simple HTML email message
            $message = '<html><body>';
            $message .= '<p> <strong> Name </strong> - '.$name.'</p>';
            $message .= '<p> <strong> Mobile </strong> - '.$mobile.'</p>';
            $message .= '<p> <strong> Email </strong> -'.$email.'</p>';
            $message .= '<p> <strong> Message </strong> -'.$query.'</p>';
            $message .= '</body></html>';

            if (mail( $to,  $subject, $message, $headers)) {
                header("Location: https://thesunvillage.com/thank-you.html", true, 301);
               // exit();
          }
    // 
    // send mail user
     $to = $_POST['email']; 
            $subject = 'Thanks for contacting The Sun Village';
            $from =  'langmaschool@gmail.com';

           // To send HTML mail, the Content-type header must be set
	        $headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	        // Create email headers
	        $headers .= 'From: '.$from."\r\n".
	            'Reply-To: '.$from."\r\n" .
	            'X-Mailer: PHP/' . phpversion();

            // Compose a simple HTML email message
            $message = '
            <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>The Sun Village</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
  </head>
<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img src="https://thesunvillage.com/assets/images/logo1.png">
                      </a>
                      <!-- ***** Logo End ***** -->
                      
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
  <img src="https://thesunvillage.com/assets/images/heading-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Thank You for Contacting The Sun Village</h6>
          <h2>Our Executive will contact you soon.</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>';
           
        $mail1 = mail( $to,  $subject, $message, $headers);
        exit();
}
?>
