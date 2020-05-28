<!DOCTYPE html>
<html lang="es">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Edugestion | Gestión Educacional</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/dist/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/dist/images/apple-touch-icon.png">
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/style.css">
    <link rel="stylesheet" href="/dist/css/responsive.css">
    <link rel="stylesheet" href="/dist/css/custom.css">
    <script src="/distjs/modernizr.js"></script>
    <link rel="stylesheet" href="/dist/css/custom.css">
    <link rel="stylesheet" href="/dist/fontawesome/css/all.min.css">
    
</head>
<body id="page-top" class="politics_version">
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v7.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="108730994193089"
        logged_in_greeting="¡Hola! En que te podemos ayudar"
        logged_out_greeting="¡Hola! En que te podemos ayudar">
    </div>
    <!-- <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div> -->
	
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="/dist/images/favicon-text.svg" width="254px" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#quienes">¿Quienes Somos?</a>
              </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#proyecto">Proyecto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#moodle">Platafoma</a>
              </li>
			{{-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger btn-success" href="#contact"><i class="fa fa-whatsapp"></i> Contacte con Nosotros</a>
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('/dist/uploads/banner2.png')">
		<div class="heading">
            <h1>Edugestión</h1>
            
			<p>"Somos un equipo de desarrollo de soluciones tecnológicas <br> para problemáticas institucionales en el areas académica y administrativa."</p>
			<h3 class="cd-headline clip is-full-width">
                <span>¿Que ofrecemos?</span>
                <br>
				<span class="cd-words-wrapper">
					<b class="is-visible">Plataformas Estudiantiles</b>
					<!-- <b></b> -->
					<b>Desarrollos infomáticos</b>
					<b>Sistemas Administrativos</b>
					<b>Páginas Institucionales</b>
				</span>
			</h3>
		</div>
	</section>

	<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div id="quienes" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>Acerca de EduGestión.</h2>
                        <p>Somos un equipo de desarrollo de soluciones tecnológicas para problemáticas institucionales en el areas académica y administrativa. <br> En busca de mejora continua ad hoc las necesidades de la institución. </p>
						{{-- <p>.</p> --}}
                        <a href="https://wa.me/56998299855" target="_blink" class="sim-btn btn-hover-new btn-success text-white" data-text=" Hablanos por whatsapp"><i class="fab fa-whatsapp"></i><span> Hablanos por whatsapp</span></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="/dist/uploads/items1.jpg" alt="" class="img-fluid img-rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div id="proyecto" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Proyecto EduGestión</h3>
                <p>Es un sistema web desarrollado para administraciones internas en establecimientos educacionales.</p>
            </div>

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
                            <!-- <i class="flaticon-seo"></i> -->
							<i class="fa fa-award"></i>
						</div>
						<h2>Inscripción de Eventos</h2>
						<p>Crea tu evento, supervisa los asistentes, preinscribe e inscribe. Revisa los reportes y analiza los resultados.</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="fas fa-vote-yea"></i>
						</div>
						<h2>Inscripción de Votación</h2>
						<p>Gestiona votaciones, asigna candidatos, vota de forma online. <strong>votación 100% confidencial y segura</strong>. Revisa los resultados en tiempo real.</p>
					</div>
                </div>
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="fas fa-fingerprint"></i>
						</div>
						<h2>Formularios</h2>
						<p>Crea formualarios para entrega, solicitud y prestamos de recursos a estudiantes o a terceros. Registra de manera rápida y eficaz.</p>
					</div>
                </div>
                
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="fab fa-chromecast"></i>
						</div>
						<h2>Videollamadas</h2>
						<p>Incorpora un canal de reunión con los usuarios de la plataforma, de forma oculta con clave o privada.</p>
					</div>
                </div>
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="fas fa-user-clock"></i>
						</div>
						<h2>Toma de Hora</h2>
						<p>Reserva hora de atención de los alumnos a la agenda de un especialista, verifica la disponibilidad y calendario de la agenda.</p>
					</div>
                </div>
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="fas fa-user-graduate"></i>
						</div>
						<h2>Alumnos</h2>
						<p>Gestiona a los alumnos, crea, edita y asigna fotos, para que el sistema reconozca los alumnos.</p>
					</div>
                </div>
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="fas fa-biking"></i>
						</div>
						<h2>Estacionamiento de Bicicletas</h2>
						<p>Registra la entrada y salida de bicicleta mendiante dos simples pasos. Genera reportes de frecuencias y analiza los resultados.</p>
					</div>
                </div>
            </div>
        </div>
    </div>
	<div id="moodle" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Plataformas Educacionales</h3>
                <p>.</p>
            </div>

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
                            <!-- <i class="flaticon-seo"></i> -->
							<i class="fa fa-award"></i>
						</div>
						<h2>Crear cursos didáctivos e interactivos.</h2>
						<p>Crea diferentes tipos de experiencias enseñando desde métodos didáctivos y divertidos que ofrece la plataforma.</p>
					</div>
                </div>
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="fab fa-chromecast"></i>
						</div>
						<h2>Clases online</h2>
						<p>Crea tu propia clase en linea, sin limites ni restricciones. Graba, comparte y guarda tu clase virtual.</p>
					</div>
                </div>
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="fas fa-user-graduate"></i>
						</div>
						<h2>Alumnos</h2>
						<p>Gestiona a los alumnos, analiza su participación y sus avances mediente la gamificación.</p>
					</div>
                </div>
            </div>
        </div>
    </div>
	{{-- <div id="fotos" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Portfolio</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->
			
			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-left">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".gal_a">Web Development</button>
						<button data-filter=".gal_b">Creative Design</button>
						<button data-filter=".gal_c">Graphic Design</button>
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-01.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="/dist/uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-02.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="/dist/uploads/gallery_img-02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-03.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="/dist/uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-04.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="/dist/uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-05.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="/dist/uploads/gallery_img-05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-06.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="/dist/uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
    </div> --}}
    
    <div class="social-bar">
        <a href="https://www.facebook.com/Edugestioncl-108730994193089" class="icon icon-facebook fab fa-facebook"target="_blank"></a>
        <a href="https://wa.me/56998299855" class="icon icon-whatsapp fab fa-whatsapp" target="_blank"></a>
        <!-- <a href="https://www.instagram.com/#name" class="icon icon-instagram  fa fa-instagram" target="_blank"></a> -->
    </div>
    
    
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Dominic</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div>

    <script src="/dist/js/all.js"></script>
	<script src="/dist/js/jquery.mobile.customized.min.js"></script>
	<script src="/dist/js/jquery.easing.1.3.js"></script> 
	<script src="/dist/js/parallaxie.js"></script>
	<script src="/dist/js/headline.js"></script>
    <script src="/dist/js/custom.js"></script>
    <script src="/dist/js/jquery.vide.js"></script>
</body>
</html>