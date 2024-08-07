<?php

/**
 * Template Name: Event Template
 */

get_header('main'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lc-lightbox-lite@1.3.1/css/lc_lightbox.min.css">

<style>
    .praise,
    .test-right {
        display: none;
    }

    .et-testimony {
        height: 300px;
    }

    .latest-event {
        opacity: 0.4 !important;
        cursor: not-allowed !important;
    }

    .latest-event a {
        cursor: not-allowed !important;
    }

    @media(max-width:600px) {

        .et-testimony {
            height: 350px;
        }

        .modal-content {
            width: 95% !important;
        }

        .praise,
        .test-right {
            display: block;
        }
    }

    @media(min-width:1600px) {
        .modal-content {
            top: 200px !important;
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {
                top: -200px !important;
                opacity: 0
            }

            to {
                top: 200px !important;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -200px !important;
                opacity: 0
            }

            to {
                top: 200px !important;
                opacity: 1
            }
        }

        .modal-content {
            width: 45% !important;
        }

    }

    .modal {
        display: none;
        position: fixed;
        z-index: 99999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 60%;
        height: auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.5s;
        animation-name: animatetop;
        animation-duration: 0.5s;
        z-index: 99;
        top: 40px;
        padding: 30px;
        border-radius: 20px;
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {
            top: -100px;
            opacity: 0
        }

        to {
            top: 40px;
            opacity: 1
        }
    }

    @keyframes animatetop {
        from {
            top: -100px;
            opacity: 0
        }

        to {
            top: 40px;
            opacity: 1
        }
    }

    .close {
        color: #aaa;
        /* float: right; */
        font-size: 20px;
        font-weight: bold;
        position: absolute;
        top: 10px;
        right: 20px;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    @media(max-width:600px) {
        .et-events-tab-navs {
            flex-wrap: nowrap;
            overflow: scroll;
            gap: 10px;
        }
    }

    .hero-banner::before {
        content: '';
        background-color: rgb(0 13 131 / 0.7);
        height: 100%;
        width: 100%;
        top: 0;
        bottom: 0;
    }
</style>

<!-- BREADCRUMB SECTION START -->
<?php if(have_rows('hero_banner')) :?>
<?php while(have_rows('hero_banner')) : the_row();
    $hero_image = get_sub_field('hero_image');
    $hero_title = get_sub_field('hero_title');
?>
    <section style="background-image:url('<?= ($hero_image != NULL) ? $hero_image : '' ?>'); background-size:cover; background-position:center" class="hero-banner et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('<?= get_template_directory_uri() ?>/assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
            <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">
                <?= ($hero_title == NULL) ? the_title() : $hero_title  ?></h1>
            <ul class="inline-flex items-center gap-[10px] font-medium text-[16px] text-[16px] sm:text-[12px]">
                <li class="opacity-80"><a href="<?= home_url()?>/" class="hover:text-etBlue">Home</a></li>
                <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
                <li class="current-page"><?= the_title()?></li>
            </ul>
        </div>
    </section>
<?php endwhile;?>
<?php endif;?>
<!-- BREADCRUMB SECTION END -->

<!-- EVENTS SLIDER START -->
<div class="container mx-auto max-w-[1200px] pt-[120px] lg:pt-[80px] md:pt-[60px] px-[12px] xl:max-w-full">
    <div class="relative">
        <div class="et-events-slider swiper">
            <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'category_name' => 'Event',
                        'post_type'=> ['post'],
                        'orderby'    => 'date',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                    );
                    $result = new WP_Query( $args );
                    if ( $result-> have_posts() ) : 
                ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); 
                    $image_banner = get_field('image_banner', $post->ID);
                    $image_thumbnail = get_field('image_thumbnail', $post->ID);
                    $date = get_field('date', $post->ID);
                    // Mengonversi string tanggal menjadi objek DateTime
                    $tanggal = DateTime::createFromFormat('d F Y', $date);
                    // Mendapatkan tanggal hari ini
                    $now = new DateTime();
                    $time = get_field('time', $post->ID);
                    $event_small_description = get_field('event_small_description', $post->ID);
                    $location = get_field('location', $post->ID);
                    $category_event = get_field('category_event', $post->ID);
                ?>
                <div class="swiper-slide group">
                    <div style="background-image:url('<?= $image_banner ?>')"
                        class="et-event bg-cover bg-no-repeat bg-top relative z-[1] rounded-[20px] overflow-hidden before:content-normal before:absolute before:inset-0 before:bg-gradient-to-b before:from-transparent before:to-black/70 before:-z-[1]">
                        <div
                            class="txt h-full flex flex-col justify-between items-start gap-[265px] lg:gap-[215px] xxs:gap-[165px] p-[40px] lg:p-[20px] pb-[50px] md:pb-[80px] text-white">
                            <div>
                                <div class="bg-etBlue rounded-full px-[15px] py-[4px]">
                                    <span class="font-light text-[18px] sm:text-[12px]">Upcoming Event</span>
                                </div>
                            </div>

                            <div>
                                <!-- date -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[4.5px] px-[15px] rounded-full inline-flex items-center justify-center xxs:flex-wrap gap-x-[24px] gap-y-[10px] mb-[20px] translate-y-[30px] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 transition ease-linear duration-[500ms]">
                                    <div class="date flex items-center gap-[10px]">
                                        <span class="icon">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2043_1443)">
                                                    <path
                                                        d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                        fill="var(--white)">
                                                    </path>
                                                    <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                        fill="var(--white)"></path>
                                                    <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                        fill="var(--white)">
                                                    </path>
                                                    <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                        fill="var(--white)">
                                                    </path>
                                                </g>
                                            </svg>
                                        </span>

                                        <span class="font-light text-[16px]"><?= $date ?>, at <?= $time ?> </span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[30px] xxs:text-[25px] font-medium leading-[1.4] max-w-[470px] mb-[8px] translate-y-[30px] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 transition ease-linear duration-[500ms] delay-[500ms]">
                                    <a href="#" class="hover:text-etBlue"><?= the_title()?></a></h3>

                                <!-- location -->
                                <div
                                    class="et-schedule-loaction flex items-center gap-[12px] translate-y-[30px] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 transition ease-linear duration-[500ms] delay-[1100ms]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)"></path>
                                        </svg>
                                    </span>
                                    <h6 class="font-kanit font-normal text-[16px]"><?= $location ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif;  ?>
            </div>
        </div>

        <!-- nav -->
        <div class="et-events-slider-nav flex gap-[16px] absolute -bottom-[20px] left-[50%] -translate-x-[50%] z-[1]">
            <button class="prev w-[60px] h-[60px] sm:w-[50px] sm:h-[50px] border border-[#d9d9d9] rounded-full text-[18px] hover:bg-etBlue hover:border-etBlue hover:text-white"><i class="fa-solid fa-arrow-left-long"></i></button>
            <button class="next w-[60px] h-[60px] sm:w-[50px] sm:h-[50px] border border-[#d9d9d9] rounded-full text-[18px] hover:bg-etBlue hover:border-etBlue hover:text-white"><i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
    </div>
</div>
<!-- EVENTS SLIDER END -->


<div class="py-[80px] lg:py-[80px] md:py-[60px] overflow-hidden">
    <!-- EVENTS SECTION START -->
    <section class="et-all-events">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
            <div class="flex lg:flex-wrap items-center justify-center lg:justify-center sm:justify-start gap-y-[15px] shadow-[0_4px_50px_rgba(0,0,0,0.07)] mb-[60px] rounded-full xxs:rounded-[30px] lg:py-[15px] px-[30px] pr-[6px] md:px-[20px] md:pr-[6px] py-[20px]">
                <div
                    class="et-events-tab-navs w-[100%] lg:w-full align-center flex xs:flex-wrap shrink-0 lg:justify-center sm:justify-start gap-[45px] md:gap-[30px] xxs:gap-[20px] md:gap-y-[15px]">
                    <a href="<?= home_url()?>/events"
                        class="tab-nav border-r border-[#d9d9d9] text-[14px] font-medium text-etBlack pr-[45px] pl-[10px] md:pr-[30px] xxs:pr-[20px] hover:text-etBlue">
                        <span>All</span>
                    </a>
                    <?php if(have_rows('category_event', 87)) :?>
                    <?php while(have_rows('category_event', 87)) : the_row();
                        $category_name = get_sub_field('category_name');
                        $category_link = get_sub_field('category_link');
                    ?>
                    <a href="<?= $category_link ?>" class="tab-nav border-r border-[#d9d9d9] text-[14px] font-medium text-etBlack pr-[45px] pl-[10px] md:pr-[30px] xxs:pr-[20px] hover:text-etBlue">
                        <span><?= $category_name ?></span>
                    </a>
                    <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div>

            <?php $type_page_event = get_field('type_page_event'); ?>
            <?php if($type_page_event == 'kkr') :?>
            <div class="et-schedules-tab-container">
                <div id="eventDetail">
                    <div class="all-scheduled-events space-y-[30px]">
                        <?php
                            $args = array(
                                'category_name' => 'Event',
                                'post_type'=> ['post'],
                                'orderby'    => 'date',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    array(
                                        'key'   => 'category_event', // Nama custom field
                                        'value' => $type_page_event, // Nilai yang dicari
                                        'compare' => "="
                                    )
                                )
                            );
                            $result = new WP_Query( $args );
                            if ( $result-> have_posts() ) : 
                        ?>
                        <?php while ( $result->have_posts() ) : $result->the_post(); 
                            $image_banner = get_field('image_banner', $post->ID);
                            $image_thumbnail = get_field('image_thumbnail', $post->ID);
                            $date = get_field('date', $post->ID);
                            // Mengonversi string tanggal menjadi objek DateTime
                            $tanggal = DateTime::createFromFormat('d F Y', $date);
                            // Mendapatkan tanggal hari ini
                            $now = new DateTime();
                            $time = get_field('time', $post->ID);
                            $event_small_description = get_field('event_small_description', $post->ID);
                            $location = get_field('location', $post->ID);
                            $category_event = get_field('category_event', $post->ID);
                            $link_reservation = get_field('link_reservation', $post->ID);
                        ?>
                        <div class="<?= ($now > $tanggal) ? 'latest-event' : '' ?> et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between">
                            <div class="w-[270px] sm:w-[300px] sm:mx-auto shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <a href="<?= $image_thumbnail ?>" class="image">
                                    <img src="<?= $image_thumbnail ?>" alt="scehduled-event-cover">
                                </a>
                            </div>
                            <div class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-center">
                                <div class="et-schedule__heading w-[80%] sm:w-full xs:text-center pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xs:justify-center">
                                        <div class="date flex items-center gap-[10px]">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2043_1443)">
                                                        <path
                                                            d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                    </g>
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $date ?></span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                        fill="var(--et-blue)" />
                                                    <path
                                                        d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                        fill="var(--et-blue)" />
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $time ?></span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"><?= the_title()?></a></h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]"><?= $category_event?></h4>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px] xs:justify-center">
                                        <span class="icon">
                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                    fill="var(--et-blue)" />
                                            </svg>
                                        </span>
                                        <h6 class="text-[16px] text-etGray"><?= $location ?></h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 flex-col gap-[16px] xxs:gap-[10px] xs:flex-wrap xs:jusity-center">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <?php if($link_reservation != NULL) : ?>
                                        <a href="<?= $link_reservation ?>" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Book Your Seat</a>
                                    <?php else :?>
                                    <a href="https://api.whatsapp.com/send?phone=6281131166111"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">More
                                        Info</a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif;  ?>
                    </div>
                </div>
            </div>
            <?php elseif($type_page_event == 'talkshow') : ?>
                <div class="et-schedules-tab-container">
                <div id="eventDetail">
                    <div class="all-scheduled-events space-y-[30px]">
                        <?php
                            $args = array(
                                'category_name' => 'Event',
                                'post_type'=> ['post'],
                                'orderby'    => 'date',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    array(
                                        'key'   => 'category_event', // Nama custom field
                                        'value' => $type_page_event, // Nilai yang dicari
                                        'compare' => "="
                                    )
                                )
                            );
                            $result = new WP_Query( $args );
                            if ( $result-> have_posts() ) : 
                        ?>
                        <?php while ( $result->have_posts() ) : $result->the_post(); 
                            $image_banner = get_field('image_banner', $post->ID);
                            $image_thumbnail = get_field('image_thumbnail', $post->ID);
                            $date = get_field('date', $post->ID);
                            // Mengonversi string tanggal menjadi objek DateTime
                            $tanggal = DateTime::createFromFormat('d F Y', $date);
                            // Mendapatkan tanggal hari ini
                            $now = new DateTime();
                            $time = get_field('time', $post->ID);
                            $event_small_description = get_field('event_small_description', $post->ID);
                            $location = get_field('location', $post->ID);
                            $category_event = get_field('category_event', $post->ID);
                            $link_reservation = get_field('link_reservation', $post->ID);
                        ?>
                        <div class="<?= ($now > $tanggal) ? 'latest-event' : '' ?> et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between">
                            <div class="w-[270px] sm:w-[300px] sm:mx-auto shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <a href="<?= $image_thumbnail ?>" class="image">
                                    <img src="<?= $image_thumbnail ?>" alt="scehduled-event-cover">
                                </a>
                            </div>
                            <div class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-center">
                                <div class="et-schedule__heading w-[80%] sm:w-full xs:text-center pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xs:justify-center">
                                        <div class="date flex items-center gap-[10px]">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2043_1443)">
                                                        <path
                                                            d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                    </g>
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $date ?></span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                        fill="var(--et-blue)" />
                                                    <path
                                                        d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                        fill="var(--et-blue)" />
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $time ?></span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"><?= the_title()?></a></h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]"><?= $category_event?></h4>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px] xs:justify-center">
                                        <span class="icon">
                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                    fill="var(--et-blue)" />
                                            </svg>
                                        </span>
                                        <h6 class="text-[16px] text-etGray"><?= $location ?></h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 flex-col gap-[16px] xxs:gap-[10px] xs:flex-wrap xs:jusity-center">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <?php if($link_reservation != NULL) : ?>
                                        <a href="<?= $link_reservation ?>" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Book Your Seat</a>
                                    <?php else :?>
                                    <a href="https://api.whatsapp.com/send?phone=6281131166111"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">More
                                        Info</a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif;  ?>
                    </div>
                </div>
            </div>
            <?php elseif($type_page_event == 'professional') : ?>
                <div class="et-schedules-tab-container">
                <div id="eventDetail">
                    <div class="all-scheduled-events space-y-[30px]">
                        <?php
                            $args = array(
                                'category_name' => 'Event',
                                'post_type'=> ['post'],
                                'orderby'    => 'date',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    array(
                                        'key'   => 'category_event', // Nama custom field
                                        'value' => $type_page_event, // Nilai yang dicari
                                        'compare' => "="
                                    )
                                )
                            );
                            $result = new WP_Query( $args );
                            if ( $result-> have_posts() ) : 
                        ?>
                        <?php while ( $result->have_posts() ) : $result->the_post(); 
                            $image_banner = get_field('image_banner', $post->ID);
                            $image_thumbnail = get_field('image_thumbnail', $post->ID);
                            $date = get_field('date', $post->ID);
                            // Mengonversi string tanggal menjadi objek DateTime
                            $tanggal = DateTime::createFromFormat('d F Y', $date);
                            // Mendapatkan tanggal hari ini
                            $now = new DateTime();
                            $time = get_field('time', $post->ID);
                            $event_small_description = get_field('event_small_description', $post->ID);
                            $location = get_field('location', $post->ID);
                            $category_event = get_field('category_event', $post->ID);
                            $link_reservation = get_field('link_reservation', $post->ID);
                        ?>
                        <div class="<?= ($now > $tanggal) ? 'latest-event' : '' ?> et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between">
                            <div class="w-[270px] sm:w-[300px] sm:mx-auto shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <a href="<?= $image_thumbnail ?>" class="image">
                                    <img src="<?= $image_thumbnail ?>" alt="scehduled-event-cover">
                                </a>
                            </div>
                            <div class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-center">
                                <div class="et-schedule__heading w-[80%] sm:w-full xs:text-center pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xs:justify-center">
                                        <div class="date flex items-center gap-[10px]">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2043_1443)">
                                                        <path
                                                            d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                    </g>
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $date ?></span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                        fill="var(--et-blue)" />
                                                    <path
                                                        d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                        fill="var(--et-blue)" />
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $time ?></span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"><?= the_title()?></a></h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]"><?= $category_event?></h4>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px] xs:justify-center">
                                        <span class="icon">
                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                    fill="var(--et-blue)" />
                                            </svg>
                                        </span>
                                        <h6 class="text-[16px] text-etGray"><?= $location ?></h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 flex-col gap-[16px] xxs:gap-[10px] xs:flex-wrap xs:jusity-center">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <?php if($link_reservation != NULL) : ?>
                                        <a href="<?= $link_reservation ?>" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Book Your Seat</a>
                                    <?php else :?>
                                    <a href="https://api.whatsapp.com/send?phone=6281131166111"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">More
                                        Info</a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif;  ?>
                    </div>
                </div>
            </div>
            <?php elseif($type_page_event == 'praise') : ?>
                <div class="et-schedules-tab-container">
                <div id="eventDetail">
                    <div class="all-scheduled-events space-y-[30px]">
                        <?php
                            $args = array(
                                'category_name' => 'Event',
                                'post_type'=> ['post'],
                                'orderby'    => 'date',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    array(
                                        'key'   => 'category_event', // Nama custom field
                                        'value' => $type_page_event, // Nilai yang dicari
                                        'compare' => "="
                                    )
                                )
                            );
                            $result = new WP_Query( $args );
                            if ( $result-> have_posts() ) : 
                        ?>
                        <?php while ( $result->have_posts() ) : $result->the_post(); 
                            $image_banner = get_field('image_banner', $post->ID);
                            $image_thumbnail = get_field('image_thumbnail', $post->ID);
                            $date = get_field('date', $post->ID);
                            // Mengonversi string tanggal menjadi objek DateTime
                            $tanggal = DateTime::createFromFormat('d F Y', $date);
                            // Mendapatkan tanggal hari ini
                            $now = new DateTime();
                            $time = get_field('time', $post->ID);
                            $event_small_description = get_field('event_small_description', $post->ID);
                            $location = get_field('location', $post->ID);
                            $category_event = get_field('category_event', $post->ID);
                            $link_reservation = get_field('link_reservation', $post->ID);
                        ?>
                        <div class="<?= ($now > $tanggal) ? 'latest-event' : '' ?> et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between">
                            <div class="w-[270px] sm:w-[300px] sm:mx-auto shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <a href="<?= $image_thumbnail ?>" class="image">
                                    <img src="<?= $image_thumbnail ?>" alt="scehduled-event-cover">
                                </a>
                            </div>
                            <div class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-center">
                                <div class="et-schedule__heading w-[80%] sm:w-full xs:text-center pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xs:justify-center">
                                        <div class="date flex items-center gap-[10px]">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2043_1443)">
                                                        <path
                                                            d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                    </g>
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $date ?></span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                        fill="var(--et-blue)" />
                                                    <path
                                                        d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                        fill="var(--et-blue)" />
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $time ?></span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"><?= the_title()?></a></h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]"><?= $category_event?></h4>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px] xs:justify-center">
                                        <span class="icon">
                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                    fill="var(--et-blue)" />
                                            </svg>
                                        </span>
                                        <h6 class="text-[16px] text-etGray"><?= $location ?></h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 flex-col gap-[16px] xxs:gap-[10px] xs:flex-wrap xs:jusity-center">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <?php if($link_reservation != NULL) : ?>
                                        <a href="<?= $link_reservation ?>" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Book Your Seat</a>
                                    <?php else :?>
                                    <a href="https://api.whatsapp.com/send?phone=6281131166111"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">More
                                        Info</a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif;  ?>
                    </div>
                </div>
            </div>
            <?php elseif($type_page_event == 'ibadah') : ?>
                <div class="et-schedules-tab-container">
                <div id="eventDetail">
                    <div class="all-scheduled-events space-y-[30px]">
                        <?php
                            $args = array(
                                'category_name' => 'Event',
                                'post_type'=> ['post'],
                                'orderby'    => 'date',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    array(
                                        'key'   => 'category_event', // Nama custom field
                                        'value' => $type_page_event, // Nilai yang dicari
                                        'compare' => "="
                                    )
                                )
                            );
                            $result = new WP_Query( $args );
                            if ( $result-> have_posts() ) : 
                        ?>
                        <?php while ( $result->have_posts() ) : $result->the_post(); 
                            $image_banner = get_field('image_banner', $post->ID);
                            $image_thumbnail = get_field('image_thumbnail', $post->ID);
                            $date = get_field('date', $post->ID);
                            // Mengonversi string tanggal menjadi objek DateTime
                            $tanggal = DateTime::createFromFormat('d F Y', $date);
                            // Mendapatkan tanggal hari ini
                            $now = new DateTime();
                            $time = get_field('time', $post->ID);
                            $event_small_description = get_field('event_small_description', $post->ID);
                            $location = get_field('location', $post->ID);
                            $category_event = get_field('category_event', $post->ID);
                            $link_reservation = get_field('link_reservation', $post->ID);
                        ?>
                        <div class="<?= ($now > $tanggal) ? 'latest-event' : '' ?> et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between">
                            <div class="w-[270px] sm:w-[300px] sm:mx-auto shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <a href="<?= $image_thumbnail ?>" class="image">
                                    <img src="<?= $image_thumbnail ?>" alt="scehduled-event-cover">
                                </a>
                            </div>
                            <div class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-center">
                                <div class="et-schedule__heading w-[80%] sm:w-full xs:text-center pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xs:justify-center">
                                        <div class="date flex items-center gap-[10px]">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2043_1443)">
                                                        <path
                                                            d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                    </g>
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $date ?></span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                        fill="var(--et-blue)" />
                                                    <path
                                                        d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                        fill="var(--et-blue)" />
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $time ?></span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"><?= the_title()?></a></h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]"><?= $category_event?></h4>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px] xs:justify-center">
                                        <span class="icon">
                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                    fill="var(--et-blue)" />
                                            </svg>
                                        </span>
                                        <h6 class="text-[16px] text-etGray"><?= $location ?></h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 flex-col gap-[16px] xxs:gap-[10px] xs:flex-wrap xs:jusity-center">
                                    <?php if($link_reservation != NULL) : ?>
                                        <a href="<?= $link_reservation ?>" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Book Your Seat</a>
                                    <?php else :?>
                                    <a href="https://api.whatsapp.com/send?phone=6281131166111"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">More
                                        Info</a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif;  ?>
                    </div>
                </div>
            </div>
            <?php elseif($type_page_event == 'default') : ?>
                <div class="et-schedules-tab-container">
                <div id="eventDetail">
                    <div class="all-scheduled-events space-y-[30px]">
                        <?php
                            $args = array(
                                'category_name' => 'Event',
                                'post_type'=> ['post'],
                                'orderby'    => 'date',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                            );
                            $result = new WP_Query( $args );
                            if ( $result-> have_posts() ) : 
                        ?>
                        <?php while ( $result->have_posts() ) : $result->the_post(); 
                            $image_banner = get_field('image_banner', $post->ID);
                            $image_thumbnail = get_field('image_thumbnail', $post->ID);
                            $date = get_field('date', $post->ID);
                            // Mengonversi string tanggal menjadi objek DateTime
                            $tanggal = DateTime::createFromFormat('d F Y', $date);
                            // Mendapatkan tanggal hari ini
                            $now = new DateTime();
                            $time = get_field('time', $post->ID);
                            $event_small_description = get_field('event_small_description', $post->ID);
                            $location = get_field('location', $post->ID);
                            $category_event = get_field('category_event', $post->ID);
                            $link_reservation = get_field('link_reservation', $post->ID);
                        ?>
                        <div class="<?= ($now > $tanggal) ? 'latest-event' : '' ?> et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between">
                            <div class="w-[270px] sm:w-[300px] sm:mx-auto shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <a href="<?= $image_thumbnail ?>" class="image">
                                    <img src="<?= $image_thumbnail ?>" alt="scehduled-event-cover">
                                </a>
                            </div>
                            <div class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-center">
                                <div class="et-schedule__heading w-[80%] sm:w-full xs:text-center pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xs:justify-center">
                                        <div class="date flex items-center gap-[10px]">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2043_1443)">
                                                        <path
                                                            d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                            fill="var(--et-blue)" />
                                                        <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                            fill="var(--et-blue)" />
                                                    </g>
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $date ?></span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                            <span class="icon">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                        fill="var(--et-blue)" />
                                                    <path
                                                        d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                        fill="var(--et-blue)" />
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= $time ?></span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"><?= the_title()?></a></h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]"><?= $category_event?></h4>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px] xs:justify-center">
                                        <span class="icon">
                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                    fill="var(--et-blue)" />
                                            </svg>
                                        </span>
                                        <h6 class="text-[16px] text-etGray"><?= $location ?></h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 flex-col gap-[16px] xxs:gap-[10px] xs:flex-wrap xs:jusity-center">
                                    <?php if($link_reservation != NULL) : ?>
                                        <a href="<?= $link_reservation ?>" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Book Your Seat</a>
                                    <?php else :?>
                                    <a href="https://api.whatsapp.com/send?phone=6281131166111"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">More
                                        Info</a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif;  ?>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
    </section>
    <!-- EVENTS SECTION END -->
</div>

<section class="et-testimonial overflow-hidden pb-[80px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <!-- heading -->
        <div class="et-testimonial-heading text-center mb-[46px] xl:mb-[26px] lg:mb-[16px] gap-[15px]">
            <h6 class="et-section-sub-title anim-text">Testimonials</h6>
            <h2 class="text-[35px] sm:text-[24px] anim-text">See Their Feedback</h2>
        </div>

        <!-- slider -->
        <div class="et-2-testimonial-slider swiper overflow-visible">
            <div class="right test-right">
                <div class="et-test-slider-nav flex gap-[16px] sm:gap-[12px]"
                    style="justify-content: center; margin:30px 0">
                    <button
                        class="prev border border-[#D9D9D9] rounded-full w-[60px] sm:w-[50px] h-[60px] sm:h-[50px] text-[18px] text-etBlack hover:bg-etBlue hover:border-etbg-etBlue hover:text-white">
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </button>
                    <button
                        class="next border border-[#D9D9D9] rounded-full w-[60px] sm:w-[50px] h-[60px] sm:h-[50px] text-[18px] text-etBlack hover:bg-etBlue hover:border-etbg-etBlue hover:text-white">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>
            <div class="swiper-wrapper">
                <!-- single testimony  -->
                <div class="swiper-slide">
                    <div
                        class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                        <!-- single testimony heading -->
                        <div
                            class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                            <div
                                class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Arif.png"
                                    alt="reviewer image"
                                    class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                            </div>
                        </div>

                        <div class="text-center">
                            <h5 class="text-black font-medium text-[20px] mb-[3px]">Arif Bijaksana</h5>
                            <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Florist & Wedding
                                Decoration</h6>
                            <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">BPro Talkshow adalah
                                salah
                                satu format ibadah yang saya tunggu, karena disitu saya bisa belajar pengaplikasian
                                Firman Tuhan
                                di era sekarang dengan segala kemajuan yang ada dan di dunia kerja dengan lebih detail
                                lewat
                                sesi QnA.</p>
                        </div>

                        <!-- quotation icon -->
                        <div class="absolute top-[40px] sm:top-[20px] left-[40px] sm:left-[20px]">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/quotation-blue.svg"
                                alt="quotation mark">
                        </div>

                        <!-- rating stars -->
                        <div
                            class="absolute bottom-0 left-[50%] -translate-x-[50%] translate-y-[50%] flex gap-[6px] bg-white shadow-[0_4px_25px_rgba(56,75,255,0.15)] p-[12px] rounded-full">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                        </div>
                    </div>
                </div>

                <!-- single testimony  -->
                <div class="swiper-slide">
                    <div
                        class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                        <!-- single testimony heading -->
                        <div
                            class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                            <div
                                class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                <img src="<?= get_template_directory_uri()?>/assets/new-img/profile.jpg"
                                    alt="reviewer image"
                                    class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                            </div>
                        </div>

                        <div class="text-center">
                            <h5 class="text-black font-medium text-[20px] mb-[3px]">Renita</h5>
                            <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Housewife</h6>
                            <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Harapan saya
                                kedepannya
                                BPro semakin lebih baik, lebih banyak teman yang bisa bergabung, dan bisa belajar
                                menjadi berkat
                                bagi sekitar kita.
                            </p>
                        </div>

                        <!-- quotation icon -->
                        <div class="absolute top-[40px] sm:top-[20px] left-[40px] sm:left-[20px]">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/quotation-blue.svg"
                                alt="quotation mark">
                        </div>

                        <!-- rating stars -->
                        <div
                            class="absolute bottom-0 left-[50%] -translate-x-[50%] translate-y-[50%] flex gap-[6px] bg-white shadow-[0_4px_25px_rgba(56,75,255,0.15)] p-[12px] rounded-full">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                        </div>
                    </div>
                </div>

                <!-- single testimony  -->
                <div class="swiper-slide">
                    <div
                        class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                        <!-- single testimony heading -->
                        <div
                            class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                            <div
                                class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Holi.png"
                                    alt="reviewer image"
                                    class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                            </div>
                        </div>

                        <div class="text-center">
                            <h5 class="text-black font-medium text-[20px] mb-[3px]">Holi</h5>
                            <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Academic Support
                            </h6>
                            <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Event BPro FA
                                Gathering di
                                UTC beneran berkesan, karena bisa merasakan kebersamaan meski banyak yang teman baru
                                kenal saat
                                itu, acara asyik dan seru. </p>
                        </div>

                        <!-- quotation icon -->
                        <div class="absolute top-[40px] sm:top-[20px] left-[40px] sm:left-[20px]">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/quotation-blue.svg"
                                alt="quotation mark">
                        </div>

                        <!-- rating stars -->
                        <div
                            class="absolute bottom-0 left-[50%] -translate-x-[50%] translate-y-[50%] flex gap-[6px] bg-white shadow-[0_4px_25px_rgba(56,75,255,0.15)] p-[12px] rounded-full">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div
                        class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                        <!-- single testimony heading -->
                        <div
                            class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                            <div
                                class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Tabita.png"
                                    alt="reviewer image"
                                    class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                            </div>
                        </div>

                        <div class="text-center">
                            <h5 class="text-black font-medium text-[20px] mb-[3px]">Tabita Christian</h5>
                            <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Bank Teller</h6>
                            <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Kalo diulang 5x pun,
                                aku
                                bakalan ga bosen ikut ibadah BPro Worship Night. Karena punya waktu yg lebih lama untuk
                                menyembah dan merasakan hadirat Tuhan bersama-sama.</p>
                        </div>

                        <!-- quotation icon -->
                        <div class="absolute top-[40px] sm:top-[20px] left-[40px] sm:left-[20px]">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/quotation-blue.svg"
                                alt="quotation mark">
                        </div>

                        <!-- rating stars -->
                        <div
                            class="absolute bottom-0 left-[50%] -translate-x-[50%] translate-y-[50%] flex gap-[6px] bg-white shadow-[0_4px_25px_rgba(56,75,255,0.15)] p-[12px] rounded-full">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div
                        class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                        <!-- single testimony heading -->
                        <div
                            class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                            <div
                                class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Vina.png"
                                    alt="reviewer image"
                                    class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                            </div>
                        </div>

                        <div class="text-center">
                            <h5 class="text-black font-medium text-[20px] mb-[3px]">Vina</h5>
                            <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Pharmacist</h6>
                            <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Kalo diulang 5x pun,
                                aku
                                bakalan ga bosen ikut ibadah BPro Worship Night. Karena punya waktu yg lebih lama untuk
                                menyembah dan merasakan hadirat Tuhan bersama-sama.</p>
                        </div>

                        <!-- quotation icon -->
                        <div class="absolute top-[40px] sm:top-[20px] left-[40px] sm:left-[20px]">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/quotation-blue.svg"
                                alt="quotation mark">
                        </div>

                        <!-- rating stars -->
                        <div
                            class="absolute bottom-0 left-[50%] -translate-x-[50%] translate-y-[50%] flex gap-[6px] bg-white shadow-[0_4px_25px_rgba(56,75,255,0.15)] p-[12px] rounded-full">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p style="font-size: 15px; text-align:justify">Shallom profesional muda, <br /><br />

            Dengan penuh semangat dan rasa syukur, kami ingin menginformasikan kepada Anda bahwa Bethany Professional
            (BPro) akan mengadakan workshop dengan topik yang relevan dengan keseharian kita, yaitu kemajuan teknologi
            dan financial.
            <br /><br />

            Seiring dengan pesatnya perkembangan di dunia teknologi dan financial, muncul berbagai ilmu dan informasi
            baru hampir setiap hari. Hal ini menuntut kita, sebagai para profesional muda untuk selalu siap dan tanggap
            menghadapi perubahan.
            <br /><br />

            Untuk itu, BPro ingin memfasilitasi Anda dalam menambah wawasan dan memperluas perspektif melalui workshop
            ini, agar Anda lebih siap dan diperlengkapi dalam menghadapi tantangan dunia profesional yang terus
            berkembang.
            <br /><br />

            Kami mengundang Anda untuk bergabung dalam acara "Professional Workshop" yang disertai dengan "Praise &
            Worship Night". Kami berharap event ini dapat memberi manfaat dan membantu dalam perjalanan profesional
            Anda.
            <br /><br />

            Terima kasih.
            <br />
            Tuhan Yesus memberkati
            <br />
            <img src="<?= get_template_directory_uri(); ?>/assets/new-img/logo-color.png" alt="signature"
                class="w-[100px]">
            <br />
            Be Success, Be Profesional.</p>
    </div>
</div>

<?php
get_footer('main'); ?>