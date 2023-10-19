<!DOCTYPE html>
<html lang="en">






<?php
$url=$_SERVER["REQUEST_URI"];
?>




<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="source/styles/css.css">
  <link rel="stylesheet" href="source/styles/vid.css">

  <!-- иконка -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">

  <title>hit</title>
</head>

<body>




  <header>
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="source/files/logo.png" alt="pic"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link <?if($url=='/main'){echo 'active';}?>" aria-current="page" href="/main">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link <?if($url=='/pricing'){echo 'active';}?>" href="/pricing">Pricing</a></li>
            <li class="nav-item"><a class="nav-link <?if($url=='/contact'){echo 'active';}?>" href="/contact">Contact</a></li>

            <li class="nav-item"><a class="nav-link " href="#"><img src="source/images/tg.png" alt="" width="20px"></a>
            </li>
            <li class="nav-item"><a class="nav-link " href="#"><img src="source/images/yt.png" alt="" width="20px"></a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

  </header>




  <?php
// echo '<p class="php">';
// echo $_SERVER["REQUEST_URI"];
// echo '</p>';


if($url=='/main' || $_SERVER["REQUEST_URI"]=='/'){include 'main.php';}else
if($url=='/contact'){include 'other.php';}else
if($url=='/pricing'){include 'pricing.php';}else
if(preg_match('#^/news[1-6]$#', $url)){include "other.php";}else
{include "articles/404.php";}

?>
 








  <footer class="mt-4">
    <div class="container-fluid mt-4  footer-text     text-center">
      <div class="row">

        <div class="col-lg-4 col-md-12 footer-text    text-center">

          <p>olegussawa 2023</p>

        </div>


        <div class="col-lg-4 col-md-12">

          <p>olspol<br><? include "articles/time.php";?><br>t.me/olsawa</p>

        </div>


        <div class="col-lg-4 col-md-12 mess">
          <a href="https://t.me/olsawa"><img src="source/images/tg.png" alt="" width="25px"></a>

          <a href="https://www.youtube.com/"><img src="source/images/yt.png" alt="" width="25px"></a>
        </div>




      </div>
    </div>


  </footer>















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>
</body>

</html>