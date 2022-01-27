<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){

      if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        //submit the form
        $user = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $usermessage = $_POST['message'];
    
        $to = "peter.a.mabalod@gmail.com";
        $body = "";
    
        $body .= "From: ".$user. "\r\n";
        $body .= "Email: ".$email. "\r\n";
        $body .= "Subject: ".$subject. "\r\n";
        $body .= "Message: ".$usermessage. "\r\n";
    
    
        mail($to, $subject, $body);
        $message_sent = true;
      }
      
      
    }
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    
    <?php
    if ($message_sent):
      header("Location:thankyou.html");
    ?>
    
    
    
        
    
    <?php
    else:
    ?>


    <nav class="navbar">
        <div class="brand-title">RTPM<br>DSHS</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="faculty.html">Faculty</a></li>
            <li><a href="countdown.html">Countdown</a></li>
          </ul>
        </div>
      </nav>

      <section class="contact">
        <div class="content">
          <h2><b>Contact Us</b> </h2>
          
        </div>
        <div class="container">
          <div class="contactinfo">
            <div class="box">
              <div class="icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <div class="text">
                
                <h3>Address</h3>
                <p>Maria Asuncion Village, Daro, Dumaguete City, Philippines 
                </p>
              </div>
            </div>
            <div class="box">
              <div class="icon">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
              <div class="text">
                
                <h3>Email:</h3>
                <p>ssg.rtpmdshs1987@gmail.com
                </p>
              </div>
            </div>
            <div class="box">
              <div class="icon">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <div class="text">
                
                <h3>Phone:</h3>
                <p>422 53111
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="contactform">
          <form action="main.php" method="post">
            <h2>Send Message</h2>
            <div class="inputbox">
              <input type="text" name="name" required="required">
              <span>Full Name</span> 
            </div>
            <div class="inputbox">
              <input type="email" name="email" required="required">
              <span>Email</span> 
            </div>
            <div class="inputbox">
              <input type="text" name="subject" required="required">
              <span>Subject</span> 
            </div>
            <div class="inputbox">
              <textarea name="message" required="required"></textarea>
              <span>Type your message...</span> 
            </div>
            <div class="inputbox">
              <input type="submit" value="Send">
            </div>
          </form>
        </div>
      </section>

      
      <section class="footer">
        <div class="social">
          <a href="https://www.instagram.com/theduscianssg/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://web.facebook.com/DuscianGateway" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/duscian_gateway?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
      </div>
 
          <ul class="list">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="about.html">About</a>
            </li>
            <li>
              <a href="contact.html">Contact</a>
            </li>
          </ul>
          <p class="copyright">
              Group 1 @ 2021
          </p>
      </section>
      <script src="script.js"></script>
      <?php
    endif;
    ?>
</body>
</html>