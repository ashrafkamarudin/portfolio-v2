<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part( 'components/navbar' ); ?>
    <main class="mx-auto max-w-7xl px-4 sm:mt-8 sm:px-6 md:mt-12 lg:mt-16 lg:px-8 xl:mt-20">
        
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'blogs/single', get_post_format() );
        endwhile; endif;
	?>
    </main>
</body>
</html>