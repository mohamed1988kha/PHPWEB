<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
    error_reporting(0);
    include ('connect.php');
    $msprache='Orginal';
    session_start();
    if (isSet($_SESSION['sprachetest'])) {
      $msprache=$_SESSION['sprachetest'];
    }
    if (isSet($_SESSION['sayedbadrantest'])) {
      $benutzername = $_SESSION['sayedbadrantest'];
      $sqlsprache= "select * from benutzer where benutzer = '$benutzername' ";
      $resultsprache = $conn->query($sqlsprache);
      while($rowsprache = $resultsprache->fetch_assoc()) {
        $msprache=$rowsprache['sprache'];
      }
    }
    
    if(is_null($_GET['msprache'])) {
      $msprache = 'العربية';
    }else{
      $msprache = $_GET['msprache'];
    }
    
    $sql = "select * from info where msprache = '$msprache'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
  ?>
  <style type="text/css">
    
        .intro {
          display: table;
          width: 100%;
          padding: 0;
          text-align: center;
          background: url(img/<?php echo $row['mimg1'] ?>) no-repeat center bottom;
          background-color: #e5e5e5;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          background-size: cover;
          -o-background-size: cover;
          
}
    </style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $row['mtitel'] ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
    <link rel="shortcut icon"  href="img/1.jpg">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 500px;

}

#Home {background-color: rgb(84,208,221);}
#News {background-color: rgb(84,208,221);}
#Contact {background-color: rgb(84,208,221);}
#About {background-color: rgb(84,208,221);}
</style>
</head> 
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->

    <script>
            var x = document.getElementsByClassName("intro");
            setTimeout(function createBtn() {
                setTimeout(function() {
                x[0].style.backgroundImage = "url(11.jpg)";
            } , 0);
            
            setTimeout(function() {
              x[0].style.backgroundImage = "url(22.jpg)";
            } , 4000);
            
            setTimeout(function() {
              x[0].style.backgroundImage = "url(33.jpg)";
            } , 8000);
            
            setTimeout(function() {
              x[0].style.backgroundImage = "url(44.jpg)";
            } , 12000);
            setTimeout(createBtn,16000);
            } , 0);
        </script>

<nav id="menu" class="navbar navbar-default navbar-fixed-top" >
  <div class="container" > 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <?php 
        $sql1 = "select * from info";
        $result1 = $conn->query($sql1);
        $sql2 = "select * from preis";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
    while($row1 = $result1->fetch_assoc()) {
      ?>
      <a href="index.php?msprache=<?php echo $row1['msprache'] ?>"><?php echo $row1['msprache'] ?></a>&nbsp;&nbsp;&nbsp;
      <?php
        }
      ?>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-rotate-270"></i> <?php echo $row['mtitel'] ?></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top" class="page-scroll"><?php echo $row['mstartseite'] ?></a></li>
        <li><a href="#about" class="page-scroll"><?php echo $row['müberuns'] ?></a></li>
        <li><a href="#portfolio" class="page-scroll"><?php echo $row['mproduckte'] ?></a></li>
        <li><a href="#contact" class="page-scroll"><?php echo $row['mkontakt'] ?></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1><?php echo $row['mline1'] ?></h1>
          <p><?php echo $row['mline2'] ?></p>
          
          <a href="test/user/login.php" class="btn btn-custom btn-lg page-scroll"><?php echo $row['mbutton1'] ?></a>
          <a href="test/user/login.php" class="btn btn-custom btn-lg page-scroll"><?php echo $row['mbutton2'] ?></a>
          <a href="test/user/adduser.php" class="btn btn-custom btn-lg page-scroll"><?php echo $row['mbutton3'] ?></a> 
          <a href="admin/loginpersonal.php" class="btn btn-custom btn-lg page-scroll"><?php echo $row['mbutton4'] ?></a>
          </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php echo $row['müberuns'] ?></h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/<?php echo $row['mimg2'] ?>" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <p><?php echo $row['mparagraph1'] ?></p>
          <p><?php echo $row['mparagraph2'] ?></p>
          <a href="#portfolio" class="btn btn-default btn-lg page-scroll"><?php echo $row['mproduckte'] ?></a> </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php echo $row['mproduckte'] ?></h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active"><?php echo $row['mall'] ?></a></li>
            <li><a href="#" data-filter=".handy"><?php echo $row['mdepartment1'] ?></a></li>
            <li><a href="#" data-filter=".Waschmaschine"><?php echo $row['mdepartment2'] ?></a></li>
            <li><a href="#" data-filter=".Kühlschrank"><?php echo $row['mdepartment3'] ?></a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/iphone12.jpg"  title="IPHONE 12,  <?php echo $row2['iphone12'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>IPHONE 12 <br> <br>  <br> <?php echo $row2['iphone12'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/iphone12.jpg" class="img-responsive" alt="Project Title">  </a>  </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 handy">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/iphone12promax2.jpg" title="IPHONE 12 PRO MAX,  <?php echo $row2['iphone12promax'] ?> " data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>IPHONE 12 PRO MAX <br> <br> <?php echo $row2['iphone12promax'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/iphone12promax2.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 handy">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/iphone133.jpg" title="IPHONE 13, <?php echo $row2['iphone133'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>IPHONE 13 <br> <br> <?php echo $row2['iphone133'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/iphone133.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 handy">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/Samsungzfold2.jpg" title="SAMSUNG GALAXY Z FOLD 2, <?php echo $row2['Samsungzfold2'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>SAMSUNG GALAXY Z FOLD 2 <br> <br> <?php echo $row2['Samsungzfold2'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/Samsungzfold2.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 handy">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/Samsungs20.jpg" title="SAMSUNG GALAXY S20, <?php echo $row2['Samsungs20'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>SAMSUNG GALAXY S20 <br> <br> <?php echo $row2['Samsungs20'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/Samsungs20.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 handy">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/Samsungs10.jpg" title="SAMSUNG GALAXY S10, <?php echo $row2['Samsungs10'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>SAMSUNG GALAXY S10 <br> <br> <?php echo $row2['Samsungs10'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/Samsungs10.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 handy">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/Samsungs9.jpg" title="SAMSUNG GALAXY S9, <?php echo $row2['Samsungs9'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>SAMSUNG GALAXY S9 <br> <br> <?php echo $row2['Samsungs9'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/Samsungs9.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 handy">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/Samsunga51.jpg" title="SAMSUNG GALAXY A51, <?php echo $row2['Samsunga51'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>SAMSUNG GALAXY A51 <br> <br> <?php echo $row2['Samsunga51'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/Samsunga51.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 handy">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/Samsunga222.jpg" title="SAMSUNG GALAXY A22, <?php echo $row2['Samsunga22'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>SAMSUNG GALAXY A22 <br> <br> <?php echo $row2['Samsunga22'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/Samsunga222.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 handy">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/xiaomi1.jpg" title="XIAOMI Redmi Note 10 Pro, <?php echo $row2['xiaomi'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>XIAOMI Redmi Note 10 Pro <br> <br> <?php echo $row2['xiaomi'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/xiaomi1.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 Kühlschrank">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/PKM.jpg" title="PKM Kühlschrank, <?php echo $row2['PKM'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>PKM Kühlschrank <br> <br> <?php echo $row2['PKM'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/PKM.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 Kühlschrank">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/Schneider.jpg" title="Schneider Kühlschrank, <?php echo $row2['Schneider'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Schneider Kühlschrank <br> <br> <?php echo $row2['Schneider'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/Schneider.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 Waschmaschine">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/Siemens.jpg" title="Siemens Waschmaschine, <?php echo $row2['Siemens'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Siemens Waschmaschine <br> <br> <?php echo $row2['Siemens'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/Siemens.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 Waschmaschine">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/AEG.jpeg" title="AEG Waschmaschine, <?php echo $row2['AEG'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>AEG Waschmaschine <br> <br> <?php echo $row2['AEG'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/AEG.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 Waschmaschine">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/miele.jpg" title="Miele Waschmaschine, <?php echo $row2['miele'] ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Miele Waschmaschine <br> <br> <?php echo $row2['miele'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/miele.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 Waschmaschine">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="admin/fun/addprodukt/samsungw.jpg" title="Samsung Waschmaschine, <?php echo $row2['samsungw'] ?> " data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Samsung Waschmaschine <br> <br> <?php echo $row2['samsungw'] ?></h4>
              </div>
              <img src="admin/fun/addprodukt/samsungw.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo $row['mGetinTouch'] ?></h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form action="admin/fun/addnachricht.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="<?php echo $row['mname'] ?>" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder= "<?php echo $row['memail'] ?>" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="nachricht" id="nachricht" class="form-control" rows="4" placeholder="<?php echo $row['mmassege'] ?>" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default btn-lg"><?php echo $row['msend'] ?></button>
      </form>
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2016 Spectrum. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<!--<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> -->
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<?php 
    }
?>
</body>
</html>