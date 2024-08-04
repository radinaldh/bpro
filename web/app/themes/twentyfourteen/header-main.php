<!doctype html>
<html>


<!-- Mirrored from Bethany Professional.temptics.com/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 May 2024 16:13:48 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/vendor/font-awesome/all.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/vendor/splide/splide.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/vendor/slim-select/slimselect.css" />
    <title>Bethany Professional</title>
    <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon-white.png">
    <!-- tailwind css -->
    <link href="<?= get_template_directory_uri(); ?>/src/output.css" rel="stylesheet" />

    <!-- custom css -->
    <link href="<?= get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- overlay -->
    <div class="et-overlay group">
        <div class="opacity-0 pointer-events-none group-[.active]:opacity-100 group-[.active]:pointer-events-auto transition ease-linear duration-300  bg-etBlack/80 fixed inset-0 z-[60]"></div>
    </div>
    <!-- overlay -->

    <!-- sidebar -->
    <div class="et-sidebar group">
        <div class=" group-[.active]:translate-x-0 translate-x-[100%] transition-transform ease-linear duration-300 fixed right-0 w-full max-w-[25%] xl:max-w-[30%] lg:max-w-[40%] md:max-w-[50%] sm:max-w-[60%] xxs:max-w-full bg-[#18377e] h-full z-[100] overflow-auto p-[50px] lg:p-[30px] space-y-[40px]">
            <!-- heading -->
            <div class="et-sidebar-heading">
                <div class="logo flex justify-between items-center">
                    <a href="index.html"><img class="img-mw-100" src="assets/img/logo-white.png" alt="logo"></a>

                    <button type="button" class="et-sidebar-close-btn border border-white/50 w-[45px] aspect-square shrink-0 text-white text-[22px] rounded-full hover:text-etBlue hover:bg-white"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>

            <!-- mobile menu -->
            <div class="et-header-nav-in-mobile"></div>
        </div>
    </div>

    <!-- HEADER SECTION START -->
    <header class="et-header to-be-fixed py-[30px] xxs:py-[20px] fixed top-0 w-full px-[155px] xxxl:px-[100px] xxl:px-[40px] xs:px-[20px] z-50">
        <div class="flex justify-between items-center">
            <!-- logo -->
            <div class="logo shrink-0">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="img-mw-100" src="<?= get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="logo">
                </a>
            </div>

            <div class="et-header-right flex items-center gap-[60px] xl:gap-[30px]">
                <div class="to-go-to-sidebar-in-mobile flex md:flex-col md:items-start items-center gap-[100px] xl:gap-[30px] md:gap-y-[15px]">
                    <!-- nav -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'et-header-nav flex md:flex-col gap-x-[43px] font-kanit text-[15px] font-normal',
                        'walker' => new Custom_Walker_Nav_Menu(),
                    ));
                    ?>
                </div>

                <!-- mobile menu button -->
                <button type="button" class="et-mobile-menu-open-btn hidden md:inline-block bg-etBlue rounded-full w-[50px] aspect-square text-white text-[18px] hover:bg-etBlue"><i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END -->

    <main>