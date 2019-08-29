<?php
include 'configuration/config.php';
include 'configuration/ads.php';
include 'configuration/socialmedia.php';
include 'configuration/mime.php';
$extension = array("jpeg","jpg","png","gif","ai","eps","ps","svg","webp","ico","tiff","tga","psd","tif","bmp","bz2","iso","torrent","7z","ace","tar","zip","rar","jar","pps","ppsx","docx","doc","pdf","ram","ra","rm","amr","wma","wmv","swf","flv","mov","m4a","acc","oga","aac","m4v","3g2","avi","3gp","mp4","mkv","apk","ogg","mp3","mpeg","ogm","dll","bat","exe","xls","xlsx","odt","ods");
$array = [];
if (isset($_POST['submit'])) {
  if (isset($_FILES['item_file'])) {
      foreach ($_FILES['item_file']['error'] as $key => $error) {
      $ext = strtolower(pathinfo($_FILES['item_file']['name'][$key],PATHINFO_EXTENSION));
      if ($error == UPLOAD_ERR_OK) {
        if (in_array($ext, $extension)) {        
              $tmpName =  $_FILES['item_file']['tmp_name'][$key];
              $md5hash = md5_file($_FILES['item_file']['tmp_name'][$key]);
              $filename = basename($md5hash.".".$ext);
              $filesize = $_FILES['item_file']['size'][$key];
              $type =  getMime($tmpName);
            if (in_array($type,$mime_types)) {
             if ($filesize >= 1024) {
              if (is_uploaded_file($tmpName)) {
                  move_uploaded_file($tmpName, "uploads/".$filename);
                  array_push($array, $filename);
              } else {
                $errormsg = "We couldn't upload some files";  
              }
             } else {
               $errormsg = "We couldn't upload some files"; 
             }
            } else {
              $errormsg = "We couldn't upload some files"; 
            }
         } else {
           $errormsg = "We couldn't upload some files"; 
        }
      }
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

function getMime($name){
      $finfo = finfo_open(FILEINFO_MIME_TYPE);
      $mtype = finfo_file($finfo,$name);
      finfo_close($finfo);
      return $mtype;
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
        <a class="nav-link" href="index.php"><span class="fa fa-home"></span> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="terms.php"><span class="fa fa-file-text"></span> Terms of Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><span class="fa fa-user"></span>  About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="report.php"><span class="fa fa-flag"></span> Report Abuse</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container pb-5 pt-5">
  <div class="row justify-content-center text-center">
    <div class="col-9">
    <?php
      if (!isset($_FILES['item_file']) && empty($_FILES['item_file'])) {
        echo '<div class="alert alert-danger mb-0">
                <b>No files selected.</b>
              </div>';   
      }

      if (isset($errormsg)) {
        echo '<div class="alert alert-danger mb-0">
                <b>'.$errormsg.'</b>
              </div>';   
      }
    ?>
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
                    echo "<img class='img-fluid rounded' src='icons/EXE.png'/>";
                    } elseif (endsWith($file,"png") || endsWith($file,"jpeg") || endsWith($file,"jpg") || endsWith($file,"gif")) {
                        echo "
                              <a href='$url/uploads/$file'>
                                <img class='img-fluid rounded border border-primary'  width='250' height='250'  src='$url/uploads/$file'/>
                                </a>
                              ";
                    } elseif(!endsWith($file,"exe")) {
                        echo"<img class='img-fluid rounded' src='icons/Document-Blank-icon.png'/>";
                    }
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
