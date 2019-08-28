<?php 
include 'configuration/config.php';
include 'configuration/ads.php';
include 'configuration/socialmedia.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title><?php echo $name ?> - About Us</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="about.php"><span class="fa fa-user"></span>  About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="report.php"><span class="fa fa-flag"></span> Report Abuse</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container pb-5 pt-5">
	<div class="card">
	  <div class="card-header">
	    About BlackUpload
	  </div>
	  <div class="card-body">
	    <h3 class="card-title">About Us</h3>
      <p>BlackUpload is a free and anonymous file-sharing platform. You can store and share data of all types (files, images, music, videos etc...). There is no limit, you download at the maximum speed of your connection and everything is free.</p>

      <h3>Supported Formats</h3>
      <p>
        We support more then 50 format <a href="supported.php">See Here...</a>
      </p>

      <h3>No registration required</h3>
      <p>Use BlackUpload immediatly, no registration required.</p>

      <h3>Privacy and Anonymity</h3>
      <p>Respecting our users is essential. We do not store any personal data, we do not sell anything.</p>
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