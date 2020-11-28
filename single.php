<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part( 'components/navbar' ); ?>
    <main class="max-w-7xl md:p-4 py-8 sm:mt-8 sm:px-6 md:mt-12 lg:mt-16 lg:px-8 xl:mt-20 bg-white mb-5">
        
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'blogs/single', get_post_format() );
        endwhile; endif;
	?>
    </main>

<?php get_footer(); ?>
</body>
</html>