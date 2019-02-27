<html <?php language_attributes();?> > 
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="description" content='Plantilla WPCustom'/>

    <title><?php bloginfo('name')?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"  />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/bootstrap/bootstrap.min.css"  />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/imgs/favicon.ico"  />
    <?php wp_head(); ?>

</head>
<body>

  <!-- Header -->
  <header class="masthead">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding-top:40px";>
      <div class="container col-md-3">
         <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="nav-menu col-md-9">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>
            
</nav>
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">DANI ABAD 2 ASIX</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-9">Os presento este tema creado por mi para vosotros.</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Vamos alla!</a>
      </div>
    </div>
  </header>
</body> 