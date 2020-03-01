
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=($title) ? $title : 'Blink Photography' ?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles  -->
  <link href="css/index.css" rel="stylesheet">

  <!-- Slick styles  -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>

  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-purple border-right" id="sidebar-wrapper">
      <img src ="logo/logo.png" class="logo img-fluid">
      <div class="list-group list-group-flush">
        <?=($_SERVER['REQUEST_URI'] !='/blink_photography/index.php') ? '' : 'class="active"'   ?><a href="index.php" class="list-group-item list-group-item-action bg-purple">Home</a>
        <?=($_SERVER['REQUEST_URI'] !='/blink_photography/testimonials.php') ? '' : 'class="active"'   ?><a href="testimonials.php" class="list-group-item list-group-item-action bg-purple">Testimonials</a>
        <?=($_SERVER['REQUEST_URI'] !='/blink_photography/portfolio.php') ? '' : 'class="active"'   ?><a href="portfolio.php" class="list-group-item list-group-item-action bg-purple">Portfolio</a>
        <?=($_SERVER['REQUEST_URI'] !='/blink_photography/contact.php') ? '' : 'class="active"'   ?><a href="contact.php" class="list-group-item list-group-item-action bg-purple">Contact</a>
      </div>
        <div class="footers"><p class="footer1">&#43;97258 323 1679 photos.blink&#64;gmail.com <br>&copy; Blink Photography 2016</br></p>
            <p class="footer2">logo: passiondesigns@gmail.com</p>
        </div>
    </div>

      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
      </nav>

