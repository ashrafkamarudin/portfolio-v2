<div class="grid sm:block lg:grid xl:block grid-cols-2 grid-rows-2 items-center p-6 pt-2 hover:shadow-lg group block p-4 border border-gray-200 transition duration-500 transform hover:-translate-y-0.5 cursor-pointer" onClick="window.location='<?php the_permalink(); ?>';">
    <div>
        <span class="sr-only">Date</span>
        <div class="group-hover:text-light-blue-200 leading-6 font-medium text-base text-gray-600">
            <span class="self-start"><?php echo get_the_date(); ?></span> <span class="text-gray-300 text-3xl font-light ml-1 mr-1"> / </span> by <a href="#"><?php the_author(); ?></a>
        </div>
    </div>
    <div>
        <span class="sr-only">Title</span>
        <div class="font-bold sm:mb-4 group-hover:text-pink-600 lg:mb-0 xl:mb-4 text-xl mt-5">
            <?php the_title(); ?>
        </div>
    </div>
    <div class="mt-6">
        <badge class="badge-default group-hover:text-yellow-600 group-hover:bg-yellow-100 blog-card text-sm font-medium">
            Blog Post
        </badge>
    </div>
</div>