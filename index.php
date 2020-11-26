<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/app.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    
    <?php wp_head();?>
</head>
<body>
	<!-- This example requires Tailwind CSS v2.0+ -->
	<div class="relative bg-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6">
			<div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
				<div class="flex justify-start lg:w-0 lg:flex-1">
					<a href="#"><!-- <span class="sr-only">Workflow</span> -->
					 <!-- <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt=""> -->
					<h2 class="text-base font-extrabold tracking-tight text-gray-900 sm:text-base"><span class="block text-pink-500">Ashraf Kamarudin's.</span></h2></a>
				</div>
				<div class="-mr-2 -my-2 md:hidden">
					<button class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" type="button"><span class="sr-only">Open menu</span> <!-- Heroicon name: menu -->
					 <svg aria-hidden="true" class="h-6 w-6" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></button>
				</div>
				<div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">

                    <?php if ( has_nav_menu('navbar-menu') ) : foreach (get_menu_items('navbar-menu') as $item) { ?>
                        <a class="whitespace-nowrap font-medium hover:text-gray-900 ml-8 <?php echo is_menu_active($item) ? 'text-pink-500' : 'text-gray-500'; ?>" href="<?php echo $item->url ?>"><?php echo $item->post_title ?></a>
                    <?php } endif; ?>
				</div>
			</div>
        </div>
        
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
        
        <br><br><br><br><br><br><br>
	</div>
</body>
</html>