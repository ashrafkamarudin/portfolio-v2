<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part( 'components/navbar' ); ?>
    <main class="max-w-6xl mt-20 py-8 md:max-w-4xl bg-white mb-5 mx-auto">
        
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'blogs/single', get_post_format() );
        endwhile; endif;
	?>
    </main>

<?php get_footer(); ?>
</body>
</html>