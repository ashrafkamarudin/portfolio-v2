<div class="py-1">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                <?php get_template_part( 'components/tags-category-badges' ); ?>
            </p>
            <p class="mt-2 md:mt-5 text-5xl leading-12 lg:leading-8 font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                <?php the_title() ?>
            </p>
            <h2 class="mt-5 text-base text-pink-500 font-semibold tracking-wide uppercase leading-loose">
                <?php the_date(); ?> 
                <span class="text-gray-300 text-5xl md:text-3xl font-light ml-1 mr-5 md:mr-1 float-left md:float-none" style="vertical-align:bottom;"> / </span> 
                <br class="md:hidden">
                <a href="#" class="prose"><?php the_author(); ?></a></h2>
        </div>
    </div>
</div>
<div class="py-15 p-5 md:p-20 flex item-center">
    <div class="text-gray-600 font-light text-lg leading-loose text-left blog-content break-normal">
        <?php the_content(); ?>
    </div>
</div>