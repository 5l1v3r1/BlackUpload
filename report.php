<?php 
include 'configuration/config.php';
include 'configuration/ads.php';
include 'configuration/socialmedia.php';

if (isset($_POST['submit'])) {
    $fname = isset($_POST['firstname']) ? $_POST['firstname']: '';
    $lname = isset($_POST['lastname']) ? $_POST['lastname']: '';
    $name = $fname.' '.$lname;
    $email = isset($_POST['email']) ? $_POST['email']: '';
    $subject = isset($_POST['subject']) ? $_POST['subject']: '';
    $message = isset($_POST['message']) ? $_POST['message']: '';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= ='From: '.$OwnerName.'<'.$email.'>';
    mail($email, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name; ?> - Report Abuse</title>
    <meta http-equiv="content-language" content="en">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="author" content="<?php echo $OwnerName ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="application-name" content="BlackUpload">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="designer" content="Black.Hacker">
    <meta name="copyright" content="DarkSoftwareCo">
    <meta name="keywords" content="<?php echo $tags ?>"/>
    <meta name="language" content="EN">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/litera/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="src/css/custom.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><?php echo $name ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><span class="fa fa-home"></span> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="terms.php"><span class="fa fa-file-text"></span> Terms of Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><span class="fa fa-user"></span>  About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="report.php"><span class="fa fa-flag"></span> Report Abuse</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container pb-5 pt-5">
  <div class="row justify-content-center text-center">
    <div class="col-7">
      <div class="card">
        <div class="card-header">
          <b>Report Abuse</b>
        </div>
        <div class="card-body">
          <form role="form" method="POST">
          	<div class="form-row justify-content-center text-center">
          	   <div class="col-4">
          		<div class="form-group">
          			<input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name">
          		  </div>
          		</div>

          		<div class="col-4">
          		<div class="form-group">
          			<input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name">
          		 </div>
          		</div>

          		<div class="form-group col-8">
          			<input type="email" name="email" id="subject" class="form-control" placeholder="Email Address">
          		</div>

          		<div class="form-group col-8">
          			<input type="subject" name="subject" id="subject" class="form-control" placeholder="Subject">
          		</div>

          		<div class="form-group col-8">
          			<textarea class="form-control" name="message" id="message" rows="5">Your Message</textarea>
          		</div>
          	</div>
          	<button type="submit" id="submit" class="btn btn-primary rounded">Send Report</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="row pb-4">
        <a href="<?php echo $ad1Link ?>"><img class="img-fluid rounded" src="<?php echo $ad1Image ?>" /></a>
      </div>
      <div class="row pl-5 pb-4">
        <a href="<?php echo $ad2Link ?>"><img class="img-fluid rounded" src="<?php echo $ad2Image ?>" /></a>
      </div>
      <div class="row pl-5 pb-4">
        <a href="<?php echo $ad3Link ?>"><img class="img-fluid rounded" src="<?php echo $ad3Image ?>" /></a>
      </div>
      <div class="row pl-5 pb-4">
        <a href="<?php echo $ad4Link ?>"><img class="img-fluid rounded" src="<?php echo $ad4Image ?>" /></a>
      </div>
    </div>
  </div>

    <footer class="py-5 bg-primary">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; <?php echo $name." - ".date('Y') ?></p>
      <div data-aos="slide-up">
        <div class="container text-center pt-3 h6">
            <ul class="list-inline">
              <li class="list-inline-item circle"><a href="<?php echo $twitter ?>"><i class="onhover fa fa-twitter fa-stack circle-twitter"></i></a></li>
              <li class="list-inline-item circle"><a href="<?php echo $facebook ?>"><i class="onhover fa fa-facebook fa-stack circle-facebook"></i></a></li>
              <li class="list-inline-item circle"><a href="<?php echo $linkedin ?>"><i class="onhover fa fa-linkedin fa-stack circle-linkedin"></i></a></li>
              <li class="list-inline-item circle"><a href="<?php echo $instagram ?>"><i class="onhover fa fa-instagram fa-stack circle-instagram"></i></a></li>
              <li class="list-inline-item circle"><a href="<?php echo $snapchat ?>"><i class="onhover fa fa-snapchat-ghost fa-stack circle-snapchat"></i></a></li>
            </ul>
        </div>  
      </div>
    </div>
    <!-- /.container -->
  </footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>
</body>
</html>
