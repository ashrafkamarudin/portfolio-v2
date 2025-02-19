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
            } 
        ?>

    </main>

    <!-- <section class="w-full bg-indigo-500 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-left">
            <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Services</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                What I Can offer You
            </p>
            </div>
        <div>
    </section> -->

    <section class="text-gray-200 bg-gray-900">
        <div class="max-w-6xl mx-auto px-5 py-24">
            <div class="text-left mb-20">
                <h2 class="text-base text-indigo-500 font-semibold tracking-wide uppercase">Services</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    The Work I can do for You
                </p>
                <div class="flex mt-6 justify-start">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-10 md:w-2/4 md:mb-0 mb-6 flex flex-col">
                    <div class="pattern-dots-md gray-light">
                        <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-2">
                                <svg class="w-6 h-6" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div class="flex-grow">
                                <h2 class=" text-xl title-font font-medium mb-3">Web Development</h2>
                                <p class="leading-relaxed text-sm text-justify">With 3 years of development experience, I will help you craft a working solution for your business needs. 😍 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-10 md:w-2/4 md:mb-0 mb-6 flex flex-col">
                    <div class="pattern-dots-md gray-light">
                        <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-5 flex-shrink-0">
                                <svg class="w-6 h-6" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div class="flex-grow">
                                <h2 class=" text-xl title-font font-medium mb-3">Programming Tutor</h2>
                                <p class="leading-relaxed text-sm text-justify">I can teach you current technology stack that I use or latest stack that I've learned for a price 🎨.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between p-5 mt-5 hidden lg:flex">
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow">
                    <i class="fab fa-laravel fa-4x text-red-500"></i>
                </div>
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow" style="animation-delay: 1s;">
                    <i class="fab fa-vuejs fa-4x text-green-500"></i>
                </div>
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow" style="animation-delay: 2s;">
                    <i class="fab fa-node fa-4x text-green-800"></i>
                </div>
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow" style="animation-delay: 3s;">
                    <i class="fab fa-php fa-4x text-indigo-500"></i>
                </div>
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow" style="animation-delay: 4s;">
                    <i class="fab fa-js fa-4x text-yellow-500"></i>
                </div>
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow" style="animation-delay: 5s;">
                    <i class="fab fa-bootstrap fa-4x text-indigo-500"></i>
                </div>
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow" style="animation-delay: 4s;">
                    <i class="fab fa-html5 fa-4x text-red-500"></i>
                </div>
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow" style="animation-delay: 3s;">
                    <i class="fab fa-css3 fa-4x text-blue-500"></i>
                </div>
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow" style="animation-delay: 2s;">
                    <i class="fab fa-sass fa-4x text-pink-500"></i>
                </div>
                <div class="w-24 h-24 rounded-full items-center flex justify-center bg-gray-200 animate-bounce-slow" style="animation-delay: 1s;">
                    <i class="fab fa-wordpress fa-4x text-blue-500"></i>
                </div>
            </div>
            

            <div class="flex justify-between p-5 lg:hidden word-break">
                <p>
                    <i class="fab fa-laravel fa-4x text-red-500 mr-2"></i>
                    <i class="fab fa-vuejs fa-4x text-red-500 mr-2"></i>
                    <i class="fab fa-node fa-4x text-green-800 mr-2"></i>
                    <i class="fab fa-php fa-4x text-indigo-500 mr-2"></i>
                    <i class="fab fa-js fa-4x text-yellow-500 mr-2"></i>
                    <i class="fab fa-html5 fa-4x text-red-500 mr-2"></i>
                    <i class="fab fa-css3 fa-4x text-blue-500 mr-2"></i>
                    <i class="fab fa-sass fa-4x text-pink-500 mr-2"></i>
                    <i class="fab fa-wordpress fa-4x text-blue-500 mr-2"></i>
                </p>
            </div>
        </div>

    </section>

    <section class="bg-indigo-100 h-auto lg:h-screen py-24">
        <div class="max-w-6xl px-5 mx-auto md:px-none">
            <div class="text-left mb-20">
                <h2 class="text-base text-green-700 font-semibold tracking-wide uppercase">Contact Me</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Let's Get in Touch
                </p>
                <div class="flex mt-6 justify-start">
                    <div class="w-16 h-1 rounded-full bg-green-700 inline-flex"></div>
                </div>
            </div>
        </div>
        <div class="max-w-4xl flex items-center flex-wrap mx-auto">

            <!--Main Col-->
            <div id="profile" class="w-full lg:w-3/5 lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75">
            

                <div class="p-4 md:p-12 text-center lg:text-left">
                    <!-- Image for mobile view-->
                    <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" loading="lazy" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/images/image.JPG);"></div>
                    
                    <h1 class="text-3xl font-bold pt-8 lg:pt-0">Ashraf Kamarudin</h1>
                    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
                    <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg> Software Engineer</p>
                    <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start">
                        <i class="fas fa-envelope-open-text h-4 fill-current text-green-700 pr-4"></i>ashrafkamarudin1995@gmail.com</i>
                    </p>
                    <p class="pt-8 text-sm">Contact me anytime, I will get back to you as soon as possible. You may also reach me at my social medias, though I rarely use them now. </p>

                    <div class="pt-12 pb-8">
                        <a href="mailto: ashrafkamarudin1995@gmail.com" class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
                            Get In Touch
                        </a> 
                    </div>

                    <div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
                        <a class="link" href="https://web.facebook.com/ashraf.kamarudin" data-tippy-content="@facebook_handle"><svg class="h-6 fill-current text-gray-600 hover:text-blue-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg></a>
                        <a class="link" href="https://www.instagram.com/ashee_kamarudin/" data-tippy-content="@instagram_handle"><svg class="h-6 fill-current text-gray-600 hover:text-red-600" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
                        <a class="link" href="https://twitter.com/ashee_k" data-tippy-content="@twitter_handle"><svg class="h-6 fill-current text-gray-600 hover:text-blue-500" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg></a><!-- <a class="link" href="#" data-tippy-content="@dribble_handle"><svg class="h-6 fill-current text-gray-600 hover:text-green-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Dribbble</title><path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"/></svg></a> -->
                        <a class="link" href="https://www.linkedin.com/in/ashraf-kamarudin/" data-tippy-content="@linkedin_handle"><i class="fab fa-linkedin fa-2x h-6 fill-current text-gray-600 hover:text-blue-700"></i></a>
                        <a class="link" href="https://github.com/ashrafkamarudin" data-tippy-content="@github_handle"><svg class="h-6 fill-current text-gray-600 hover:text-gray-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg></a>
                        <a class="link" href="https://stackoverflow.com/users/story/4918908" data-tippy-content="@so_handle"><i class="fab fa-stack-overflow fa-2x h-6 fill-current text-gray-600 hover:text-red-500"></i></a>
                    </div>

                </div>

            </div>
        
            <!--Img Col-->
            <div class="w-full lg:w-2/5">
                <!-- Big profile image for side bar (desktop) -->
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/image.JPG" loading="lazy" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block bg-white" style="height: 600px; width: 600px">
                <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
                
            </div>

        </div>
    </section>

    <?php get_footer(); ?>
</body>
</html>