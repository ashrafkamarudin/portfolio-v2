<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title><?php echo get_bloginfo( 'name' ); ?></title>
<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/app.css" rel="stylesheet" type="text/css" defer>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="preload" as="style" onload="this.rel='stylesheet'" defer>
<link type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="preload" as="style" onload="this.rel='stylesheet'"  defer/>
<link href="https://unpkg.com/pattern.css" rel="preload" as="style" onload="this.rel='stylesheet'" defer>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 

<?php wp_head();?>