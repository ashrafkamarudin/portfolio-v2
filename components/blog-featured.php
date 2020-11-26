<div class="col-span-2 row-span-2 group block rounded-lg p-4 p-10">
    <div class="grid sm:block lg:grid xl:block grid-cols-2 grid-rows-2 items-center p-6 pt-2">
        <div>
            <span class="sr-only">Date</span>
            <div class="group-hover:text-light-blue-200 leading-6 font-medium text-base text-gray-600">
                <span class="self-start"><?php the_date(); ?></span> <span class="text-gray-300 text-3xl font-light ml-1 mr-1"> / </span> by <a href="#"><?php the_author(); ?></a>
            </div>
        </div>
        <div>
            <span class="sr-only">Title</span>
            <div class="group-hover:text-light-blue-200 text-base font-medium sm:mb-4 lg:mb-0 xl:mb-4 text-3xl mt-5">
                <?php the_title(); ?>
            </div>
        </div>
        <div>
            <span class="sr-only">Description</span>
            <p class="text-base font-light sm:mb-4 lg:mb-0 xl:mb-4 text-base text-gray-600 mt-5 leading-loose">
                <?php echo wp_trim_words(get_the_content(), 20, ' ...'); ?>
            </p>
        </div>
        <div class="mt-6">
            <badge class="badge-danger text-sm font-medium">
                Blog Post
            </badge>
        </div>
        <div class="mt-6">
            <button class="bg-transparent text-indigo-900 font-semibold py-3 px-5 border border-indigo-300 transition duration-500 transform hover:-translate-y-0.5 rounded-full focus:outline-none">
                Continue Reading
            </button>
        </div>
    </div>
</div>