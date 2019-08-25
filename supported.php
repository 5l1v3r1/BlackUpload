<? include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><? echo $name ?> - Supported Formats</title>
  <meta name="description" content="<? echo $description ?>">
  <meta name="author" content="<? echo $OwnerName ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="application-name" content="BlackUpload">
  <link rel="shortcut icon" type="image/png" href="favicon.png" />
  <meta name="designer" content="Black.Hacker">
  <meta name="copyright" content="DarkSoftwareCo">
  <meta name="keywords" content="<? echo $tags ?>"/>
  <meta name="language" content="EN">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/sandstone/bootstrap.min.css">
  <link rel="stylesheet" href="src/dataTables.bootstrap4.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><? echo $name ?></a>
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
        <a class="nav-link" href="mailto:<? echo $email?>">Report Abuse</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container pb-5 pt-5">
  <div class="card">
    <div class="card-header">
      Supported Formars
    </div>
    <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Format</th>
                    <th>Status</th>
                  </tr>
                </thead>

                <tbody>
                 <?php
$extension=array("jpeg","jpg","png","gif","tiff","tga","psd","tif","bmp","tgz","bz2","iso","torrent","7z","ace","gtr","gz","tar","zip","rar","pps","docx","doc","pdf","ram","ra","rm","amr","wma","wmv","swf","flv","3ga","mov","m4a","acc","oga","aac","m4v","3g2","avi","3gp","mp4","mkv","apk","ogg","mp3","mpeg","ogm","dll","bat","exe");
                  foreach ($extension as $ext) {
                    echo "<tr>";
                          echo '<td>'.$ext.'</td>';
                          echo '<td>Allowed</td>';
                    echo '</tr>';   
                  }
                ?>
                </tbody>
              </table>
            </div>
    </div>
  </div>
</div>

  <footer class="py-5 bg-primary">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; <? echo $name ?> - 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="src/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#dataTable').DataTable();
  });
  </script>
</body>
</html>