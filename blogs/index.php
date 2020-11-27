<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="col-span-1 md:col-span-2 row-span-1 md:row-span-2 m-auto">
        <div class="sm:text-center lg:text-left">
            <span class="block text-sm md:text-base text-gray-600 xl:inline italic">Hello, I am</span>
            <h1 class="text-5xl sm:text-6xl md:text-7xl tracking-tight font-extrabold text-gray-900 mt-2"><span class="block xl:inline">Ashraf</span> <span class="block text-pink-500 xl:inline">Kamarudin</span></h1>
            <p class="mt-3 text-sm text-gray-500 sm:mt-5 sm:text-3xl sm:max-w-xl sm:mx-auto md:mt-5 md:text-3xl lg:mx-0 italic">Software Engineer @RunCloud</p>
            <div class="mt-5">
                <a class="mr-4" href="https://web.facebook.com/ashraf.kamarudin"><i class="fab fa-facebook fa-2x" style="color:#3273dc"></i></a> <a class="mr-4" href="https://www.instagram.com/ashee_kamarudin/" style="color: #e81c4f"><i class="fab fa-instagram fa-2x"></i></a> <a class="mr-4" href="https://twitter.com/ashee_k"><i class="fab fa-twitter fa-2x text-info" style="color: #209cee"></i></a> <a class="mr-4" href="https://www.linkedin.com/in/ashraf-kamarudin/"><i class="fab fa-linkedin fa-2x" style="color: #3273dc"></i></a> <a class="mr-4" href="https://github.com/ashrafkamarudin"><i class="fab fa-github fa-2x text-dark"></i></a> <a class="" href="https://stackoverflow.com/users/story/4918908" style="color: #ff5722 !important"><i class="fab fa-stack-overflow fa-2x"></i></a>
            </div>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                    <a class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10" href="#">Latest Work</a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10" href="#">Latest Story</a>
                </div>
            </div>
        </div>
    </div>

    <?php
        $count = 0;
        if ( have_posts() ) : while ( have_posts() ) : the_post(); $count++;

            if ($count === 7) {
                get_template_part( 'components/blog-featured', get_post_format() );

                continue;
            }

            get_template_part( 'components/blog-card', get_post_format() );
        endwhile; endif;
    ?>

</div>

<?php wp_link_pages(); ?>