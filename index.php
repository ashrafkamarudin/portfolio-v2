<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part( 'components/navbar' ); ?>

    <main class="mx-auto max-w-7xl px-4 sm:mt-8 sm:px-6 md:mt-12 lg:mt-16 lg:px-8 xl:mt-20">
        
        <?php
            if ( is_front_page() && is_home() ) {
                get_template_part( 'blogs/index' );
            } elseif ( is_front_page() ) {
                // static homepage
            } elseif ( is_home() ) {
                // get_template_part( 'blogs/index' );
            } else {
                //everyting else
            }
            ?>
    </main>
</body>
</html>