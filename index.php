
<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin col-md-9" style="float:left; margin-top:50px;">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-loop">
        <header>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          By: <?php the_author(); ?>
        </header>
        <?php the_excerpt(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>No s'ha trobat cap post en esta categoria</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Presentacion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Projectos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Tema final 2ASIX</h2>
          <p class="text-white-50">Esta en la entrada de nuestro tema, como podemos ver usaremos bootstrap para ello. Muchas gracias por elegir este tema para ti.</p>
        </div>
      </div>
      <img    class="img-fluid" src="<?php bloginfo('template_url');?>/ipad.png" alt=""> 
     
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      
      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php bloginfo('template_url');?>/curs.png" alt=""> 
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Mis cursos</h4>
                <p class="mb-0 text-white-50">Estos son los cursos que hemos estado implementando durante todo este año.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php bloginfo('template_url');?>/blog.jpg" alt=""> 
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Mi wordpress</h4>
                <p class="mb-0 text-white-50">Aqui os voy a dejar el link de mi sitio web para que os podais pasar a echar un vistazo a mis presentaciones.<a href=https://presentacionesdad.wordpress.com>Mi blog</a></p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">IES Jaume el Just II, Tabernes de la valldigna</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">Danielabad2asix@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
      </div>

    </div>
  </section>

</body>
<?php get_footer(); ?>
</html>
