<?php 
include 'config.php';
include 'ads.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo $name ?> - File Uploading Service</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="terms.php">Terms of Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mailto:<?php echo $email?>">Report Abuse</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container pb-5 pt-5">
  <div class="row justify-content-center text-center">
    <div class="col-8">
      <div class="card">
        <div class="card-header">
          Upload Your Files
        </div>
        <div class="card-body">
          <h4 class="card-title">Select Files</h4>
          <form enctype="multipart/form-data" role="form" method="POST" action="upload.php">
            <div class="form-group" id="dvFile">
                   <input type="file" class="form-control-file" id="item_file[]" name="item_file[]" multiple="multiple">
                   <input type="file" class="form-control-file pt-3" id="item_file[]" name="item_file[]" multiple="multiple">
                   <input type="file" class="form-control-file pt-3" id="item_file[]" name="item_file[]" multiple="multiple">
                   <input type="file" class="form-control-file pt-3" id="item_file[]" name="item_file[]" multiple="multiple">
            </div>
            <button id="submit" type="submit" class="btn btn-primary">Upload Files</button> <a onclick="add_more()" class="btn btn-primary text-white">Add a File</a>
          </form>
        </div>
        <div class="card-footer mb-0">
          <p class="mb-0">Note: Supported formats: <a href="supported.php">See Here...</a></p>
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
<script type="text/javascript">
  function  add_more() {
  var txt = "<input type=\"file\" class=\"form-control-file pt-3\" id=\"item_file[]\" name=\"item_file[]\" multiple=\"multiple\">";
   $("#dvFile").append(txt);
}
</script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
