<?php
include 'config.php';
include 'ads.php';

$extension=array("jpeg","jpg","png","gif","tiff","tga","psd","tif","bmp","tgz","bz2","iso","torrent","7z","ace","gtr","gz","tar","zip","rar","pps","docx","doc","pdf","ram","ra","rm","amr","wma","wmv","swf","flv","3ga","mov","m4a","acc","oga","aac","m4v","3g2","avi","3gp","mp4","mkv","apk","ogg","mp3","mpeg","ogm","dll","bat","exe");
$array = [];
foreach ($_FILES['item_file']['error'] as $key => $error) {
  $salt = uniqid(rand(),true);
  $ext = strtolower(pathinfo($_FILES['item_file']['name'][$key],PATHINFO_EXTENSION));
  if ($error == UPLOAD_ERR_OK) {
    if (in_array($ext, $extension)) {
      $tmpName = $_FILES['item_file']['tmp_name'][$key];
      $filename = basename(md5($_FILES['item_file']['name'][$key].$salt).".".$ext);
      move_uploaded_file($tmpName, "uploads/$filename");
      array_push($array, $filename);
    }
  }
}
function endsWith($haystack, $needle){
    $length = strlen($needle);
    if ($length == 0) {
      return true;
    }
    return (substr($haystack, - $length) === $needle);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo $name ?> - Your Files</title>
  <meta name="description" content="<?php echo $description ?>">
  <meta name="author" content="<?php echo $OwnerName ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="application-name" content="BlackUpload">
  <link rel="shortcut icon" type="image/png" href="favicon.png" />
  <meta name="designer" content="Black.Hacker">
  <meta name="copyright" content="DarkSoftwareCo">
  <meta name="keywords" content="<?php echo $tags ?>"/>
  <meta name="language" content="EN">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/sandstone/bootstrap.min.css">
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="terms.php">Terms of Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mailto:<?php echo $email; ?>">Report Abuse</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container pb-5 pt-5">
  <div class="row justify-content-center text-center">
    <div class="col-9">
  <div class="card">
    <div class="card-header">
      Your Uploaded Files
    </div>
    <div class="card-body">
      <h4 class="card-title">Your Files</h4>
<hr>
        <div class="container">
                <?php
                  foreach ($array as $file) {
                    echo "<div class='form-group'>";
                    if (endsWith($file,"exe")) {
                    echo "<img class='img-fluid rounded'  width='250' height='250'  src='icons/EXE.png'/>";
                    }
                    if (endsWith($file,"png") || endsWith($file,"jpeg") || endsWith($file,"jpg") || endsWith($file,"gif")) {
                        echo "<img class='img-fluid rounded border border-primary'  width='250' height='250'  src='$url/uploads/$file'/>";
                    } else {
                        echo"<img class='img-fluid rounded' src='icons/Document-Blank-icon.png'/>";
                    }
                    $token = md5($file);
                    echo "<div class='pt-1'></div>
                            <div class='row justify-content-center text-center'>
                            <input class='form-control col-9 justify-content-center text-center border border-dark' value='$url/uploads/$file'/>
                          </div>";
                    echo '</div>';
                }
                ?>
        </div>
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
      <p class="m-0 text-center text-white">Copyright &copy; <?php echo $name ?> - 2019</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>