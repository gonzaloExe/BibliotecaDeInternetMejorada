<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Libroonline.org - Lee, imagina y aprende</title>
	<link rel="icon" href="assets/img/libro-abierto.png" type="image/png">
  <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="assets/css/pagina.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="pagina.php"><img src="assets/img/loopa.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="pagina.php">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Categoria</a>
                <ul class="dropdown-menu">
                  <?php
              //incluimos el fichero de conexion
              include_once('view/config/dbconect.php');

              $database = new Connection();
              $db = $database->open();
              try{  
                $sql = 'SELECT * FROM category';
                foreach ($db->query($sql) as $row) {
                  ?>
                   <li class="nav-item"><a class="nav-link" href="category.php?id=<?php echo $row['id_cate']; ?>"><?php echo $row['nomcate']; ?></a></li>
                    
                  <?php 
                }
              }
              catch(PDOException $e){
                echo "Hubo un problema en la conexión: " . $e->getMessage();
              }

              //Cerrar la Conexion
              $database->close();

              ?>
                 
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Autor</a>
                <ul class="dropdown-menu">

                  <?php
              //incluimos el fichero de conexion
              include_once('view/config/dbconect.php');

              $database = new Connection();
              $db = $database->open();
              try{  
                $sql = 'SELECT * FROM author';
                foreach ($db->query($sql) as $row) {
                  ?>
                   <li class="nav-item"><a class="nav-link" href="autor.php?id=<?php echo $row['id_au']; ?>"><?php echo $row['nomau']; ?><?php echo $row['apeau']; ?></a></li>
                    
                  <?php 
                }
              }
              catch(PDOException $e){
                echo "Hubo un problema en la conexión: " . $e->getMessage();
              }

              //Cerrar la Conexion
              $database->close();

              ?>
                  
                  
                </ul>
							</li>
							
               <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
             
              <li class="nav-item"><a class="button button-header" href="#">+1000 LIBROS GRATIS</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="assets/img/ase.png" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>Leer es divertido</h4>
              <h1>Los mejores libros a tu alcance</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>¿QUIERES EMPEZAR A LEER?</p>
          <h2>Elige un <span class="section-intro__style">Tema</span></h2>
        </div>
        <div class="row">
          <?php
      //incluimos el fichero de conexion
      include_once('view/config/dbconect.php');

      $database = new Connection();
      $db = $database->open();
      try{  
        $sql = 'SELECT * FROM category';
        foreach ($db->query($sql) as $row) {
          ?>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="assets/img/imagenes/<?php echo $row['foto']; ?>" alt="">
              </div>
              <div class="card-body">
      <h4 class="card-product__title"><a href="category.php?id=<?php echo $row['id_cate']; ?>"><?php echo $row['nomcate']; ?></a></h4>

              </div>
            </div>
          </div>
          <?php 
        }
      }
      catch(PDOException $e){
        echo "Hubo un problema en la conexión: " . $e->getMessage();
      }

      //Cerrar la Conexion
      $database->close();

    ?>
       
        </div>
      </div>
    </section>

<section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>¿QUÉ AUTOR TE GUSTARÍA LEER?</p>
          <h2>Elige un <span class="section-intro__style">Autor</span></h2>
        </div>
        <div class="row">
          <?php
      //incluimos el fichero de conexion
      include_once('view/config/dbconect.php');

      $database = new Connection();
      $db = $database->open();
      try{  
        $sql = 'SELECT * FROM author';
        foreach ($db->query($sql) as $row) {
          ?>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="assets/img/imagenes/<?php echo $row['foto']; ?>" alt="">
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="autor.php?id=<?php echo $row['id_au']; ?>"><?php echo $row['nomau']; ?> <?php echo $row['apeau']; ?></a></h4>
               
              </div>
            </div>
          </div>
          <?php 
        }
      }
      catch(PDOException $e){
        echo "Hubo un problema en la conexión: " . $e->getMessage();
      }

      //Cerrar la Conexion
      $database->close();

    ?>
       
        </div>
      </div>
    </section>

  <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
         
          <h2>Nuestras últimas  <span class="section-intro__style">reseñas</span></h2>
        </div>
        <div class="row">
          <?php
      //incluimos el fichero de conexion
      include_once('view/config/dbconect.php');

      $database = new Connection();
      $db = $database->open();
      try{  
        $sql = 'SELECT libro.id_libro, libro.nomli, libro.foto,libro.link,author.id_au, category.id_cate,category.nomcate,author.nomau, author.apeau, author.alias, author.biblio,  author.fecna, author.email, edito.id_edi, edito.nomedi,libro.lugar, libro.anedi, libro.numpa, libro.idioma, libro.sinop, libro.estado FROM libro INNER JOIN category ON libro.id_cate=category.id_cate INNER JOIN author ON libro.id_au=author.id_au INNER JOIN edito ON libro.id_edi=edito.id_edi';
        foreach ($db->query($sql) as $row) {
          ?>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="assets/img/imagenes/<?php echo $row['foto']; ?>" alt="">
              </div>
              <div class="card-body">
                <h4 class="card-product__title"><a href="category_detail.php?id=<?php echo $row['id_libro']; ?>"><?php echo $row['nomli']; ?></a></h4>
               
              </div>
            </div>
          </div>
          <?php 
        }
      }
      catch(PDOException $e){
        echo "Hubo un problema en la conexión: " . $e->getMessage();
      }

      //Cerrar la Conexion
      $database->close();

    ?>
       
        </div>
      </div>
    </section>

    <!-- ================ Subscribe section start ================= --> 
    <section class="subscribe-position">
      <div class="container">
        <div class="subscribe text-center">
          <h3 class="subscribe__title">Get Update From Anywhere</h3>
          <p>Bearing Void gathering light light his eavening unto dont afraid</p>
          <div id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
              <div class="form-group ml-sm-auto">
                <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
                <div class="info"></div>
              </div>
              <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

            </form>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ================ Subscribe section end ================= --> 

    

  </main>


  <!--================ Start footer Area  =================-->	
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="#">Home</a></li>
								<li><a href="#">Categoria</a></li>
								<li><a href="#">Autor</a></li>
								
								<li><a href="#">Contact</a></li>
                <li><a href="#">Login</a></li>
							</ul>
						</div>
					</div>

					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Head Office
								</p>
								<p>123, Main Street, Your City</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									+123 456 7890 <br>
									+123 456 7890
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									free@infoexample.com <br>
									www.infoexample.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
	</footer>
	<!--================ End footer Area  =================-->



  <script src="assets/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="assets/vendors/skrollr.min.js"></script>
  <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="assets/vendors/jquery.ajaxchimp.min.js"></script>
  <script src="assets/vendors/mail-script.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>