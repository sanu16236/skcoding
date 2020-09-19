<?php 
   $result="";
  if(isset($_POST['submit'])){
    require('phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer;

    //Server settings
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sanu16236@gmail.com';                     // SMTP username
    $mail->Password   = '8292657637';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('sanu16236@gmail.com');    // Add a recipient
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Subject:'.$_POST['subject'];
    $mail->Body    = '<h4><b style="font-size:17px;">Name: </b>'.$_POST['name'].'<br style="font-size:17px;"><b>Email: </b>'.$_POST['email'].'<b style="font-size:17px;">Mobile: </b>'.$_POST['mobile'].'<br><b style="font-size:17px;">Message: </b>'.$_POST['message'].'</h4>';
    
    if(!$mail->send()){
       $result="Something went wrong. Please try again...";
    }else{
      $result="Thanks! ".$_POST['name']." for contacting me. i'll get back to you soon!";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="keyword" content="skcoding.com,skcoding,coding,best website making company in muzaffarpur,website builder in muzaffarpur,coding.com">
  <meta name="description" content="Hii this is SHANU and i am a Web Developer. I know both language, means fornt end and backend. I make both Static and Daynimic Website. If you want to make your website in your buddget then Contact me.  Thank U.....">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SK-Coding</title>
  <!--bootstrap cdn -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- fontAwesome cdn --->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- josefin sans font family -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<!-- custom css --->
<link rel="stylesheet" href="css/style.css">
<!-- favicon icon -->
<link rel="shortcut icon" href="img/icont.png" type="image/x-icon">
</head>
<body data-spy="scroll" data-offset="150" data-target="#nav">
 <div id="loader"></div>
<header>
<!-- <div class="container"> -->
   <nav id="navbar-example2" class="navbar navbar-light px-4 bg-light fixed-top navbar-expand-md">
        <a class="navbar-brand logo" href="#"><Span><i class="fa fa-pencil"></i>SK</Span>CODING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggle" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="toggle">
       
        <ul class="navbar-nav ml-auto" id="nav">
          <li class="nav-item">
            <a class="nav-link" href="#index">Home</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#myskills">My Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
        </ul>
        </div>
      </nav>
      
  <div class="container-fluid banner" id="index">
    <div class="container text-center d-flex justify-content-center align-items-center text-white" style="min-height:600px;">
      <div class="banner-text">
         <h3>I am a Web Developer!</h3>
         <h1 class="text-uppercase" style="font-size:40px; font-weight:700;">Welcome to <span style="color:#01c496;">SK</span>CODING.</h1>
         <p style="font-size:18px; font-weight:500;">I make different types of website like Sk Coding and more.</p>
         <div class="banner-btn text-center"><a href="#contact" class="btn btn-lg btn-primary shadow-sm">Contact Us</a></div>
      </div>
    </div>
  </div>
</header>

<!-- skills section -->
<section class="bg-light py-5" id="myskills">
    <h3 class="text-center">My Skills</h3>

  <div class="container mt-3">
      <div class="row">
        <div class="col-md-5">
          <h4 class="text-uppercase mt-3">html</h4>
  <div class="progress">
   <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%">99%</div>
</div>
<h4 class="text-uppercase mt-3">css</h4>
  <div class="progress">
   <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">95%</div>
</div>
<h4 class="text-uppercase mt-3">javascript</h4>
  <div class="progress">
   <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">87%</div>
</div>
<h4 class="text-uppercase mt-3">jquery</h4>
  <div class="progress">
   <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
</div>
<h4 class="text-uppercase mt-3">bootstrap</h4>
  <div class="progress">
   <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">77%</div>
</div>
<h4 class="text-uppercase mt-3">php</h4>
  <div class="progress">
   <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
</div> 
<h4 class="text-uppercase mt-3">mysql</h4>
  <div class="progress">
   <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">73%</div>
</div>   
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 text-center mt-lg-3 mt-5 ">
          <img src="img/profile.jpg" alt="profile-image" class="profile-img">
        <h2 class="mt-2">Shanu Kumar</h2>
        <nav class="navbar">
        <ul class="nav mx-auto">
          <li class="list-item social-icon"><a target="_blank" href="https://www.facebook.com/profile.php?id=100009981164496" class="nav-link"><i class="fa fa-facebook-square"></i></a></li>
          <li class="list-item social-icon "><a target="_blank" href="https://www.instagram.com/sanu16236/?hl=en" class="nav-link"><i class="fa fa-instagram"></i></a></li>
          <li class="list-item social-icon"><a target="_blank" href="https://api.whatsapp.com/send?text=Hello&phone=918292657637" class="nav-link"><i class="fa fa-whatsapp"></i></a></li>

          </ul>
        </nav>
        </div>

      </div>
    </div>

</section>

<!-- Portfolio section -->

<section class="py-3 bg-white" id="portfolio">
<h3 class="text-center">Portfolio</h3>
<div class="container-fluid work-section"> 
<div class="container mx-auto mt-4 text-center text-white">
<div class="container">
  <div class="row my-1 my-md-5">
    <div class="col-md-3 col-sm-6 mt-3"><a href="img/portfolio1.jpg"><img src="img/portfolio1.jpg" alt="" width="100%" height="100%"></a></div>
    <div class="col-md-3 col-sm-6 mt-3"><a href="img/portfolio2.jpg"><img src="img/portfolio2.jpg" alt="" width="100%" height="100%"></a></div>
    <div class="col-md-3 col-sm-6 mt-3"><a href="img/portfolio3.jpg"><img src="img/portfolio3.jpg" alt="" width="100%" height="100%"></a></div>
    <div class="col-md-3 col-sm-6 mt-3"><a href="img/portfolio4.jpg"><img src="img/portfolio4.jpg" alt="" width="100%" height="100%"></a></div>

  </div>
  <div class="row">
    <div class="col-md-3 col-sm-6 mt-3"><a href="img/portfolio5.jpg"><img src="img/portfolio5.jpg" alt="" width="100%" height="100%"></a></div>
    <div class="col-md-3 col-sm-6 mt-3"><a href="img/portfolio6.jpg"><img src="img/portfolio6.jpg" alt="" width="100%" height="100%"></a></div>
    <div class="col-md-3 col-sm-6 mt-3"><a href="img/portfolio7.jpg"><img src="img/portfolio7.jpg" alt="" width="100%" height="100%"></a></div>
    <div class="col-md-3 col-sm-6 mt-3"><a href="img/portfolio8.jpg"><img src="img/portfolio8.jpg" alt="" width="100%" height="100%"></a></div>

  </div>
</div>
</div>
</div>
</section>

<!-- About us section -->

<section class="py-5 bg-light" id="about">
<h3 class="text-center">About Me</h3>
<div class="container-fluid about-section">
  
<div class="container mx-auto mt-1 text-center text-white">
  <h2 style="letter-spacing:2px;" class="text-light mb-5">A true Coder is always thinking about Coding !</h2>
 <p> Hii, This is Shanu and I Welcome All of you who's Visit on my website <span>SK</span>CODING.
I am a Web Developer and i learn coding from online Platforms with the help of my Brother.
I have an experience of 1 year in coding. I know all skills which you see above in skills section.
<br>
If you have any idea and you want to make a website Please contact me. I am always ready for help you.
I can make a website for you in your budget.
<br><br>
<span style="letter-spacing:2px;" class="d-block pb-4">-- Thank You --</span></p>


</div>
</div>
</section>

<!-- Contact us section -->

<section class="py-3 bg-white" id="contact">
<h3 class="text-center">Contact Me</h3>
<div class="container-fluid contact-section"> 
<div class="container mx-auto mt-4 text-center text-white">
<div class="row text-left">
  <div class="col-md-6">
    <form method="post" class="contact-form my-4 text-dark bg-light">
      <h3 class="text-dark text-center">Contact Me</h3>
      <h3 class="text-success my-3 mx-auto"><?php echo $result; ?></h3>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" required autocomplete="off" name="name" id="name" class="form-control bg-light" placeholder="Name">
          </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" required autocomplete="off" name="mobile" id="mobile" class="form-control bg-light" placeholder="Mobile">
          </div>
        </div>
      </div>
      <div class="form-group">
  <label for="email">Email</label>
  <input type="email" required class="form-control bg-light" autocomplete="off" id="email" placeholder="Email" name="email">
</div>
<div class="form-group">
  <label for="subject">Subject</label>
  <input type="text" required class="form-control bg-light" autocomplete="off" placeholder="Subject" id="subject" name="subject">
</div>
<div class="form-group">
  <label for="message">Message</label>
<textarea name="message" required class="form-control bg-light" id="message"rows="8" name="message" placeholder="Message"></textarea>  
</div>
<input type="submit" name="submit" class="btn btn-primary btn-block" value="Send">
    </form>
  </div>
  <div class="col-md-6">
    <div class="contact-text text-light text-center">
    <h4><i class="fa fa-phone-square"></i><b> Mobile:</b></h4>
    <h3>8292657637</h3><br>
    <h4><i class="fa fa-envelope-o"></i><b> Email:</b></h4>
    <h3>sanu16236@gmail.com</h3>
    </div>
  </div>

</div>
</div>
</div>
</section>
<footer class="text-center p-3 font-size-5">
  <p>Copyright &copy; <span id="fdate"></span> | All Right Reserved.
  Design & Developed by SHANU KUMAR.</p>
</footer>

  <!-- JS, Popper.js, and jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>