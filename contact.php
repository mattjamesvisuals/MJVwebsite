<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?>
<!DOCTYPE html> 
<html>
<head>
    <title>Matt James Visuals</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-theme.min.css">
   <!-- custom styles -->
    <link rel="stylesheet" media="screen" href="css/main.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <!--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" -->
</head>
<body>
   <nav class="navbar navbar-inverse">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
   </div>
  <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Home</a></li>
        <li><a href="bio.html">Bio</a></li>
        <li><a href="paintings.html">Paintings</a></li>
        <li><a href="charcoal.html">Charcoal</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>
  </div>
  </nav>
    

<div class="icon">
    <ul class="social">
        <li><a href="contact.php"><img src="img/mail.png"></a></li>
        <li><a href="https://plus.google.com/u/0/115177500087185628581/about/p/pub"></a><img src="img/google.png"></li>
        <li><a href="https://instagram.com/mattjamesvisuals/"><img src="img/instagram.png"></a></li>
        <li><a href="https://www.facebook.com/mattjamespaints"><img src="img/facebook.png"></a></li>
    </ul>
</div>
<div class="logo">Matt James Visuals</div>
<div class="matchbox"><a href="main.html"></a><img src="img/matchbox.png"/></div>
<div class="form">
<form action="contact.php" method="POST"> 
    <input type="hidden" name="action" value="submit"> 
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Your message:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Send email"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message from mattjamesvisuals.com"; 
        mail("mattjamesvisuals@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?>
</div>
<div class="copyright">&#169 2015 Matt James Visuals. All rights reserved</div>
<!-- Latest compiled and minified JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>