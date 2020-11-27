<div class="items-center p-6 pt-2 hover:shadow-lg group block p-4 border border-gray-200 transition duration-500 transform hover:-translate-y-0.5 cursor-pointer bg-white" onClick="window.location='<?php the_permalink(); ?>';">
    <div class="w-full">
        <span class="sr-only">Date</span>
        <div class="group-hover:text-light-blue-200 leading-6 font-medium text-xs md:text-sm text-gray-600">
            <span class="self-start"><?php echo get_the_date(); ?></span> <span class="text-gray-300 text-3xl font-light ml-1 mr-1"> / </span> By <a href="#" class="prose"><?php the_author(); ?></a>
        </div>
    </div>
    <div class="w-full">
        <span class="sr-only">Title</span>
        <div class="font-bold sm:mb-4 group-hover:text-pink-600 lg:mb-0 xl:mb-4 text-2xl mt-2">
            <?php the_title(); ?>
        </div>
    </div>
    <div class="w-full mt-6 leading-loose">
        <?php get_template_part( 'components/tags-category-badges' ); ?>
    </div>
</div>