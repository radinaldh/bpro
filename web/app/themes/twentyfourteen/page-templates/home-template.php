<?php

/**
 * Template Name: Home Template
 */

get_header('main');
?>
<style>

    .test-right {
        display: none;
    }

    @media(min-width:1800px) {
        .herohero-title {
            margin-top: 120px;
        }
    }

    @media(max-width:1700px) {
        .herohero-title {
            margin-top: 50px;
        }
    }
    @media (max-width: 500px) {

        .herohero-title {
            margin-top: 0;
        }


        .test-right {
            display: block;
        }
        .et-section-sub-title {
            font-size: 16px;
            padding: 0;
        }
        .et-section-sub-title::before {
            display: none;
        }

        .testing-slider {
            display: block !important;
            max-width: 90%;
            margin: auto;
        }

        .testing-slider .et-2-schedule  {
            height: 500px;
        }
    }

    .testing-slider {
        display: none;
    }

        .multiple-items {
            overflow: hidden;
        }

        /* the slides */
    .slick-slide {
        margin: 0 30px;
    }

    /* the parent */
    .slick-list {
        margin: 0 -30px;
  }

  video.backgroundvideo {
    position: absolute;
    top: 0;
    left: 0;
}

img.backgroundimg{
    position: absolute;
    top: 0;
    left: 0;
}

.et-banner-slider .swiper-slide-active > div {
    min-height: 100vh;
}

.before\:opacity-50::before {
    min-height: 100vh;
}

h5.font-semibold.text-\[22px\].md\:text-\[20px\].text-etBlack.mb-\[4px\] {
    font-size: 16px;
}

@media only screen and (max-width: 800px) {
    .et-banner-slider .swiper-slide-active > div {
    min-height: 45vh;
    }

    video.backgroundvideo {
        width: 165%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: unset;
    }

    img.backgroundimg {
        width: 165%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: unset;
    }
.swiper-slide.swiper-slide-active.swiper-slide-next {
    position: relative;
}
.about-us.items-center.gap-x-\[30px\].gap-y-\[16px\].rev-slide-up {
    text-align: center;
}
}
</style>

<main>
    <!-- BANNER SECTION START -->
    <section class="et-2-banner relative bg-etBlue">
        <div class="et-banner-slider swiper">
            <div class="swiper-wrapper">
                <!-- single slide -->
                <?php if ( have_rows( 'slider_home' ) ) : ?>
                    <?php while ( have_rows( 'slider_home' ) ) : the_row(); ?>
                <?php if(get_sub_field( 'type_slider' ) == "video") { ?>
                <div class="swiper-slide">
                    <video class="backgroundvideo" autoplay muted loop>
                        <source src="<?php the_sub_field( 'file_background' ); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="bg-no-repeat bg-cover bg-[url('assets/img/banner-2-bg-1.jpg')] bg-center pt-[clamp(140px,12.7vw,213px)] text-white relative overflow-hidden z-[1] before:content-normal before:absolute before:inset-0 before:bg-gradient-to-r before:from-[#1900B1] before:from-50% before:to-transparent before:-z-[1] before:opacity-50">
                       
                        <div class="mx-[15.5em] xxxl:mx-[10em] xxl:mx-[40px] xs:mx-[12px] mb-[132px] xl:mb-[112px] lg:mb-[82px]">
                            <div class="flex md:flex-col items-center justify-between gap-x-[30px] gap-y-[30px] md:grid-cols-1">
                                
                            </div>
                            <div class="left relative z-[20] w-[100%] text-center md:w-full herohero-title">
                                    <h6 class="font-kalam font-bold text-[2.4rem] mb-[3px] anim-text"><?php the_sub_field( 'subtitle' ); ?></h6>

                                    <h1 class="text-[clamp(42px,6.25vw,12rem)] font-semibold leading-[1.1] mb-[36px] md:mb-[36px] anim-text"><?php the_sub_field( 'title' ); ?> </h1>

                                    <!-- <div class="et-banner-btns flex flex-wrap items-center gap-[20px]">
                                        <a href="#" class="et-btn bg-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-white font-normal text-[17px] rounded-full hover:!bg-white hover:!text-etBlue">Register Now</a>

                                        <a href="#" class="et-btn bg-white inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-etBlue font-normal text-[17px] rounded-full">View More</a>
                                    </div> -->
                                </div>
                        </div>

                        <!-- counter & video button -->
                        <div class="flex gap-[120px] xxxl:gap-[60px] xl:gap-[40px] lg:flex-col-reverse items-center" style="display:none">
                            <div class="max-w-[1170px] bg-etBlue relative z-[1] p-[60px] sm:p-[40px] xs:px-[20px] rounded-tr-[20px] lg:rounded-none overflow-hidden shadow-[0_4px_50px_rgba(18,96,254,0.2)] after:absolute after:inset-0 after:-z-[1] after:bg-[url(../assets/img/et-counter-bg.jpg)] after:bg-cover after:bg-no-repeat after:mix-blend-screen flex xxl:flex-col items-center xxl:items-start md:flex-wrap gap-y-[20px]">
                                <div class="pr-[54px] border-r md:border-r-0 border-white/20 md:text-center md:pr-0 md:w-full">
                                    <h2 class="text-[35px] sm:text-[24px] !text-white mb-[28px] anim-text">Count Every Second Until Event.</h2>
                                    <a href="#" class="et-btn bg-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-white font-normal text-[17px] rounded-full border-white border hover:!bg-white hover:!text-etBlue">Buy Ticket</a>
                                </div>

                                <!-- counter -->
                                <div class="et-countdown flex sm:flex-wrap justify-center gap-y-[10px] md:w-full *:border-r *:sm:border-r-0 *:border-white/20 *:px-[46px] *:sm:px-[26px] *:xs:px-[16px] font-medium text-white text-[16px] text-center">
                                    <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                                        <span class="days number block"></span>
                                        <span>Days</span>
                                    </div>

                                    <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                                        <span class="hours number block"></span>
                                        <span>Hours</span>
                                    </div>

                                    <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                                        <span class="minutes number block"></span>
                                        <span>Minutes</span>
                                    </div>

                                    <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                                        <span class="seconds number block"></span>
                                        <span>Seconds</span>
                                    </div>
                                </div>

                                <!-- vectors -->
                                <div class="sm:hidden">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/counter-vector.png" alt="vector" class="pointer-events-none absolute top-[26px] left-[53%]">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/counter-vector.png" alt="vector" class="pointer-events-none absolute bottom-[33px] right-[90px]">
                                </div>
                            </div>

                            <div class="flex shrink-0 gap-[30px] items-center" style="display:none">
                                <a href="#" class="group">
                                    <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M89.3191 57.1702V110.277H122V1H12.7234V33.6809H65.8298L2 97.5106L25.4894 121L89.3191 57.1702Z" stroke-width="2" class="stroke-[url(#paint0_linear_6096_354)] transition duration-[400ms] group-hover:stroke-etBlue " />
                                        <defs>
                                            <linearGradient id="paint0_linear_6096_354" x1="241.347" y1="-124.347" x2="5.74999" y2="111.25" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1872FE" />
                                                <stop offset="1" stop-color="#1972FE" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </a>

                                <div class="flex items-center gap-[15px] ">
                                    <!-- video button -->
                                    <a href="https://www.youtube.com/watch?v=AQleI8oFqZo&amp;t=1s" data-fslightbox="banner-video-1" class="w-[93px] aspect-square rounded-full border border-white/20 flex justify-center items-center text-etBlue ml-auto md:ml-0 relative z-[1] text-[18px] before:absolute before:w-[70px] before:h-[70px] before:bg-white before:rounded-full before:-z-[1] before:transition before:duration-[400ms] hover:text-white hover:border-etBlue hover:before:bg-etBlue animate-[shadow_2s_ease-in_infinite]"><i class="fa-solid fa-play"></i></a>

                                    <span class="font-light text-[18px] xxs:hidden">View Promo</span>
                                </div>
                            </div>
                        </div>

                        <!-- vectors -->
                        <div class="et-banner-vectors">
                            <!-- <div class="absolute left-[26px] top-[235px]"><img src="<?= get_template_directory_uri(); ?>/assets/img/team-vector.png" alt="vector" class="w-[50px] !animate-none !rotate-0 md:hidden"></div> -->
                            <div class="absolute bottom-[352px] left-[845px]"><img src="<?= get_template_directory_uri(); ?>/assets/img/banner-vector.png" alt="vector"></div>
                            <div class="absolute top-[214px] right-[190px]"><img src="<?= get_template_directory_uri(); ?>/assets/img/banner-vector-2.png" alt="vector" class="w-[21px] h-[21px]"></div>
                        </div>
                    </div>
                </div>
                    <?php }else{ ?>
                        <div class="swiper-slide">
                    <img src="<?php the_sub_field( 'file_background' ); ?>" class="backgroundimg" autoplay muted loop>
                        
                    <div class="bg-no-repeat bg-cover bg-[url('assets/img/banner-2-bg-1.jpg')] bg-center pt-[clamp(140px,12.7vw,213px)] text-white relative overflow-hidden z-[1] before:content-normal before:absolute before:inset-0 before:bg-gradient-to-r before:from-[#1900B1] before:from-50% before:to-transparent before:-z-[1] before:opacity-50">
                       
                        <div class="mx-[15.5em] xxxl:mx-[10em] xxl:mx-[40px] xs:mx-[12px] mb-[132px] xl:mb-[112px] lg:mb-[82px]">
                            <div class="flex md:flex-col items-center justify-between gap-x-[30px] gap-y-[30px] md:grid-cols-1">
                                
                            </div>
                            <div class="left relative z-[20] w-[100%] text-center md:w-full">
                                    <h6 class="font-kalam font-bold text-[2.4rem] mb-[3px] anim-text"><?php the_sub_field( 'subtitle' ); ?></h6>

                                    <h1 class="text-[clamp(42px,6.25vw,12rem)] font-semibold leading-[1.1] mb-[36px] md:mb-[36px] anim-text"><?php the_sub_field( 'title' ); ?> </h1>

                                    <!-- <div class="et-banner-btns flex flex-wrap items-center gap-[20px]">
                                        <a href="#" class="et-btn bg-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-white font-normal text-[17px] rounded-full hover:!bg-white hover:!text-etBlue">Register Now</a>

                                        <a href="#" class="et-btn bg-white inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-etBlue font-normal text-[17px] rounded-full">View More</a>
                                    </div> -->
                                </div>
                        </div>

                        <!-- counter & video button -->
                        <div class="flex gap-[120px] xxxl:gap-[60px] xl:gap-[40px] lg:flex-col-reverse items-center" style="display:none">
                            <div class="max-w-[1170px] bg-etBlue relative z-[1] p-[60px] sm:p-[40px] xs:px-[20px] rounded-tr-[20px] lg:rounded-none overflow-hidden shadow-[0_4px_50px_rgba(18,96,254,0.2)] after:absolute after:inset-0 after:-z-[1] after:bg-[url(../assets/img/et-counter-bg.jpg)] after:bg-cover after:bg-no-repeat after:mix-blend-screen flex xxl:flex-col items-center xxl:items-start md:flex-wrap gap-y-[20px]">
                                <div class="pr-[54px] border-r md:border-r-0 border-white/20 md:text-center md:pr-0 md:w-full">
                                    <h2 class="text-[35px] sm:text-[24px] !text-white mb-[28px] anim-text">Count Every Second Until Event.</h2>
                                    <a href="#" class="et-btn bg-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-white font-normal text-[17px] rounded-full border-white border hover:!bg-white hover:!text-etBlue">Buy Ticket</a>
                                </div>

                                <!-- counter -->
                                <div class="et-countdown flex sm:flex-wrap justify-center gap-y-[10px] md:w-full *:border-r *:sm:border-r-0 *:border-white/20 *:px-[46px] *:sm:px-[26px] *:xs:px-[16px] font-medium text-white text-[16px] text-center">
                                    <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                                        <span class="days number block"></span>
                                        <span>Days</span>
                                    </div>

                                    <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                                        <span class="hours number block"></span>
                                        <span>Hours</span>
                                    </div>

                                    <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                                        <span class="minutes number block"></span>
                                        <span>Minutes</span>
                                    </div>

                                    <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                                        <span class="seconds number block"></span>
                                        <span>Seconds</span>
                                    </div>
                                </div>

                                <!-- vectors -->
                                <div class="sm:hidden">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/counter-vector.png" alt="vector" class="pointer-events-none absolute top-[26px] left-[53%]">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/counter-vector.png" alt="vector" class="pointer-events-none absolute bottom-[33px] right-[90px]">
                                </div>
                            </div>

                            <div class="flex shrink-0 gap-[30px] items-center" style="display:none">
                                <a href="#" class="group">
                                    <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M89.3191 57.1702V110.277H122V1H12.7234V33.6809H65.8298L2 97.5106L25.4894 121L89.3191 57.1702Z" stroke-width="2" class="stroke-[url(#paint0_linear_6096_354)] transition duration-[400ms] group-hover:stroke-etBlue " />
                                        <defs>
                                            <linearGradient id="paint0_linear_6096_354" x1="241.347" y1="-124.347" x2="5.74999" y2="111.25" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1872FE" />
                                                <stop offset="1" stop-color="#1972FE" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </a>

                                <div class="flex items-center gap-[15px] ">
                                    <!-- video button -->
                                    <a href="https://www.youtube.com/watch?v=AQleI8oFqZo&amp;t=1s" data-fslightbox="banner-video-1" class="w-[93px] aspect-square rounded-full border border-white/20 flex justify-center items-center text-etBlue ml-auto md:ml-0 relative z-[1] text-[18px] before:absolute before:w-[70px] before:h-[70px] before:bg-white before:rounded-full before:-z-[1] before:transition before:duration-[400ms] hover:text-white hover:border-etBlue hover:before:bg-etBlue animate-[shadow_2s_ease-in_infinite]"><i class="fa-solid fa-play"></i></a>

                                    <span class="font-light text-[18px] xxs:hidden">View Promo</span>
                                </div>
                            </div>
                        </div>

                        <!-- vectors -->
                        <div class="et-banner-vectors">
                            <!-- <div class="absolute left-[26px] top-[235px]"><img src="<?= get_template_directory_uri(); ?>/assets/img/team-vector.png" alt="vector" class="w-[50px] !animate-none !rotate-0 md:hidden"></div> -->
                            <div class="absolute bottom-[352px] left-[845px]"><img src="<?= get_template_directory_uri(); ?>/assets/img/banner-vector.png" alt="vector"></div>
                            <div class="absolute top-[214px] right-[190px]"><img src="<?= get_template_directory_uri(); ?>/assets/img/banner-vector-2.png" alt="vector" class="w-[21px] h-[21px]"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php endwhile; ?>
<?php else : ?>
	<?php // No rows found ?>
<?php endif; ?>
            </div>

            <div class="et-banner-slider-dots absolute flex flex-col right-[40px] xxs:right-[15px] !left-auto z-[1] !top-[50%] -translate-y-[50%] !w-auto"></div>
        </div>
    </section>
    <!-- BANNER SECTION END -->


    <!-- ABOUT SECTION START -->
    <?php if ( have_rows( 'about' ) ) : ?>
        <?php while ( have_rows( 'about' ) ) : the_row(); ?>
    <section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative">
        <div class="container mx-auto max-w-[calc(100%-39.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
            <div class="flex items-center md:flex-wrap gap-x-[60px] xl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[40px] lg:justify-center">
                <!-- left -->
                <div class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full ml-[124px] md:mr-0 xs:mx-auto">
                    <img src="<?php the_sub_field( 'image_2' ); ?>" alt="image" class="shrink-0 rounded-[50px]" />
                    <img src="<?php the_sub_field( 'image_1' ); ?>" alt="image" class="et-about-floating-img absolute top-[55px] -left-[124px] shrink-0 rounded-[20px] border-white border-[10px] shadow-[0_4px_40px_0_rgba(0,0,0,0.1)] xs:hidden" />

                    <!-- vectors -->
                    <div class="et-about-vectors">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/about-img-vector-4.png" alt="vector" class="et-about-vector-1 absolute -left-[98px] top-[20px] -z-[1] xxs:hidden" />
                        <!-- <img src="<?= get_template_directory_uri(); ?>/assets/img/team-vector.png" alt="vector" class="et-about-vector-2 w-[50px] absolute -left-[70px] bottom-[115px] -z-[1] !animate-none" /> -->
                    </div>
                </div>

                <!-- right -->
                <div class="et-about__txt max-w-[570px] grow">
                    <h6 class="et-section-sub-title anim-text"><?php the_sub_field( 'title' ); ?></h6>
                    <h2 class="text-[35px] sm:text-[24px] mb-[24px] md:mb-[19px] sm:text-[20px] anim-text"><?php the_sub_field( 'title' ); ?></h2>

                    <div class="mb-[30px] text-[15px] sm:text-[12px] font-light text-etGray md:mb-[30px] rev-slide-up" style="text-align: justify;">
                    <?php the_sub_field( 'description' ); ?>
                    </div>

                    <div class="about-us items-center gap-x-[30px] gap-y-[16px] rev-slide-up">
                    <?php if ( have_rows( 'button_get' ) ) : ?>
                        <?php while ( have_rows( 'button_get' ) ) : the_row(); ?>    
                    <a href="<?php the_sub_field( 'url' ); ?>" class="et-btn bg-etBlue w-[180px] inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-white font-normal text-[17px] rounded-full hover:!bg-black hover:!text-white"><?php the_sub_field( 'title' ); ?></a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                        <!-- <div class="flex items-center gap-[10px]">
                            <div class="flex *:-ml-[20px]">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/reviewer-1.png" alt="Person" class="w-[60px] h-[60px] rounded-full border-[3px] border-white first:ml-0">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/reviewer-2.png" alt="Person" class="w-[60px] h-[60px] rounded-full border-[3px] border-white first:ml-0">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/reviewer-3.png" alt="Person" class="w-[60px] h-[60px] rounded-full border-[3px] border-white first:ml-0">
                                <div class="w-[60px] h-[60px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]">25+</div>
                            </div>
                            <span class="uppercase font-semibold text-etBlue text-[16px]">Speakers</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- ABOUT SECTION END -->


    <!-- EVENT SCHEDULE SECTION START -->
    <section class="et-2-schedules bg-[#EEF4FF] bg-[url('assets/img/schedule-bg.png')] bg-cover bg-no-repeat bg-center relative py-[130px] xl:py-[80px] md:py-[60px] before:absolute before:inset-0 before:bg-[url('../assets/img/')]">
        <div class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up">
            <!-- heading -->
            <?php if ( have_rows( 'section_event' ) ) : ?>
                <?php while ( have_rows( 'section_event' ) ) : the_row(); ?> 
            <div class="et-schedule-heading flex sm:flex-col justify-between items-center pb-[31px] mb-[40px] gap-[15px] border-b border-[#D9D9D9]">
                <div class="left xs:text-center max-w-[50%] sm:max-w-full">
                    <h6 class="et-section-sub-title anim-text"><?php the_sub_field( 'subtitle' ); ?></h6>
                    <h2 class="text-[35px] sm:text-[24px] anim-text"><?php the_sub_field( 'title' ); ?></h2>
                </div>

                <div class="right" style="
    margin-right: 4%;
">
                    <div class="et-schedules-tab-navs bg-[#D0E1FF] px-[12px] py-[14px] flex flex-w gap-[16px] sm:gap-[12px] rounded-full">
                    <?php if ( have_rows( 'button_get' ) ) : ?>
                        <?php while ( have_rows( 'button_get' ) ) : the_row(); ?>
                        <a href="<?php the_sub_field( 'url' ); ?>" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white"><?php the_sub_field( 'title' ); ?></a>
                        <?php endwhile; ?>
		<?php endif; ?>
                        <!-- <button data-tab="tab2" class="tab-nav bg-etBlue rounded-full px-[20px] py-[3px] text-[16px] font-medium text-white hover:bg-etBlue">Day 02</button> -->

                        <!-- <button data-tab="tab3" class="tab-nav bg-etBlue rounded-full px-[20px] py-[3px] text-[16px] font-medium text-white hover:bg-etBlue">Day 03</button> -->
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- events -->
            <div class="et-schedules-tab-container">
                <div id="tab1" class="et-tab active sm:hidden">
                    <div class="all-scheduled-events flex flex-col gap-[30px]">
                        <!-- single schedule -->
                        <!-- single schedule -->
                        <?php
                $args = array(
                    'category_name' => 'Event',
                    'post_type'=> ['post'],
                    'orderby'    => 'date',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                );
                $result = new WP_Query( $args );
                if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <?php
                    $link_reservation = get_field('link_reservation', $post->ID);
                ?>
                        <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                            <!-- img -->
                            <div class="w-[240px] shrink-0 relative">
                                <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <a href="<?= get_field('image_thumbnail', $post->ID) ?>" data-fslightbox="gallery">
                                    <img style="height: 230px; width: 230px;" src="<?= get_field('image_thumbnail', $post->ID) ?>" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                                </a>
                                </div>
                            </div>

                            <!-- text -->
                            <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white" >
                                <!-- single schedule heading -->
                                <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]" style="min-width: 71%;">
                                    <!-- date & time -->
                                    <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px]">
                                        <div class="date flex items-center gap-[10px]">
                                            <span class="icon sm:hidden">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2043_1443)">
                                                        <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                        <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                        <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                        <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                        <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                        <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                        <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                        <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                        <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                        <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                    </g>
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= get_field('date', $post->ID) ?></span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                            <span class="icon sm:hidden">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                    <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= get_field('time', $post->ID) ?></span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue"><?= the_title()?></a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                        <span class="icon">
                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>
                                        <h6 class="text-[16px] text-etGray"><?= get_field('location', $post->ID) ?></h6>
                                    </div>
                                </div>

                                <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                    <!-- <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                    </div> -->

                                    <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                        <!-- <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">View More</a> -->
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
                        </div>
                        <?php endwhile;
                endif;
                wp_reset_query();
                ?>         
                        <!-- single schedule -->
                        
                    </div>
                </div>

                <div class="testing-slider">
                    <div class="multiple-items">
                    <?php
                $args = array(
                    'category_name' => 'Event',
                    'post_type'=> ['post'],
                    'orderby'    => 'date',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                );
                $result = new WP_Query( $args );
                if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <?php
                    $link_reservation = get_field('link_reservation', $post->ID);
                ?>
                        <div>
                        <div class="et-2-schedule bg-white mt-[57px] p-[12px] pt-0 rounded-[20px] inline-flex md:flex-col w-full gap-y-[20px] justify-between relative z-[2] rev-slide-up">
                            <!-- img -->
                            <div class="w-[240px] shrink-0 relative">
                                <div class="et-2-schedule-img absolute md:static md:-mt-[45px] bottom-0 md:before:content-none before:absolute before:top-0 before:left-[100%] before:w-full before:h-full before:bg-gradient-to-br before:from-etBlue before:to-[#0B3998] before:-z-[1]">
                                <a href="<?= get_field('image_thumbnail', $post->ID) ?>" data-fslightbox="gallery">
                                    <img style="height: 230px; width: 230px;" src="<?= get_field('image_thumbnail', $post->ID) ?>" alt="scehduled-event-cover" class="rounded-[20px] rounded-tr-none object-cover aspect-[8/9]">
                                </a>
                                </div>
                            </div>

                            <!-- text -->
                            <div class="px-[30px] sm:px-[12px] py-[25px] sm:pb-[15px] pt-[37px] md:pt-0 w-full flex xs:flex-col gap-y-[15px] items-center bg-white" >
                                <!-- single schedule heading -->
                                <div class="pr-[46px] sm:pr-0 mr-[54px] sm:mr-0 border-r sm:border-r-0 border-[#d9d9d9]" style="min-width: 71%;">
                                    <!-- date & time -->
                                    <div class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] xxs:border-0 py-[7px] px-[15px] xxs:p-0 rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px]">
                                        <div class="date flex items-center gap-[10px]">
                                            <span class="icon sm:hidden">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2043_1443)">
                                                        <path d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z" fill="var(--et-blue)" />
                                                        <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z" fill="var(--et-blue)" />
                                                        <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z" fill="var(--et-blue)" />
                                                        <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z" fill="var(--et-blue)" />
                                                        <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z" fill="var(--et-blue)" />
                                                        <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z" fill="var(--et-blue)" />
                                                        <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z" fill="var(--et-blue)" />
                                                        <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z" fill="var(--et-blue)" />
                                                        <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z" fill="var(--et-blue)" />
                                                        <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z" fill="var(--et-blue)" />
                                                        <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z" fill="var(--et-blue)" />
                                                    </g>
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= get_field('date', $post->ID) ?></span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                            <span class="icon sm:hidden">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z" fill="var(--et-blue)" />
                                                    <path d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z" fill="var(--et-blue)" />
                                                </svg>
                                            </span>

                                            <span class="text-etGray font-normal text-[16px]"><?= get_field('time', $post->ID) ?></span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack mb-[16px] anim-text"><a href="#" class="hover:text-etBlue"><?= the_title()?></a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                        <span class="icon">
                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z" fill="var(--et-blue)" />
                                            </svg>
                                        </span>
                                        <h6 class="text-[16px] text-etGray"><?= get_field('location', $post->ID) ?></h6>
                                    </div>
                                </div>

                                <div class="flex shrink-0 xxl:flex-col xs:flex-row flex-wrap items-center xxl:items-start xs:items-center gap-x-[54px] gap-y-[16px]">
                                    <!-- <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/img/reviewer-1.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/img/reviewer-2.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/img/reviewer-3.png" alt="Person" class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-normal text-etBlue text-[16px] -ml-[29px]"><span class="text-white">Spe</span>akers</span>
                                    </div> -->

                                    <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                        <!-- <a href="#" class="et-btn border bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">View More</a> -->
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
                        </div>
                        </div>
                        <?php endwhile;
                endif;
                wp_reset_query();
                ?>
                        <!-- single schedule -->
                        
                    </div>
                </div>

                
            </div>
        </div>

        <!-- vectors -->
        <div class="md:hidden">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/features-vector-1.png" alt="vector" class="pointer-events-none absolute top-[254px] left-[93px] -z-[1]">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/schedule-vector.png" alt="vector" class="pointer-events-none absolute bottom-[270px] left-[125px] -z-[1]">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/features-vector-2.png" alt="vector" class="pointer-events-none absolute top-[184px] right-[151px] -z-[1]">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/features-vector-3.png" alt="vector" class="pointer-events-none absolute bottom-[455px] right-[93px] -z-[1]">
        </div>
    </section>
    <!-- EVENT SCHEDULE SECTION END -->

    <?php if ( have_rows( 'section_speakers' ) ) : ?>
        <?php while ( have_rows( 'section_speakers' ) ) : the_row(); ?>
    <!-- SPEAKERS SECTION START -->
    <section class="et-speakers py-[130px] lg:py-[80px] md:py-[60px] overflow-hidden relative z-[1]">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
            <!-- heading -->
            <div class="et-speakers-heading text-center mb-[46px] xl:mb-[26px] lg:mb-[16px] gap-[15px]">
                <h6 class="et-section-sub-title anim-text"><?php the_sub_field( 'subtitle' ); ?></h6>
                <h2 class="text-[35px] sm:text-[24px] anim-text"><?php the_sub_field( 'title' ); ?></h2>
            </div>

            <div>
            <div class="pembicaraslider">
            <?php if ( have_rows( 'list_speaker' ) ) : ?>
                <?php while ( have_rows( 'list_speaker' ) ) : the_row(); ?>
                    <div>
                        <div class="et-member group" >
                            <div class="et-member__img rounded-[16px] overflow-hidden">
                                <img src="<?php the_sub_field( 'image' ); ?>" alt="Team Member Image" class="w-full duration-[400ms] group-hover:scale-110">
                            </div>
        
                            <div class="et-member__txt bg-white relative z-[1] mx-[25px] md:mx-[15px] xs:mx-[5px] -mt-[44px] md:-mt-[15px] xs:mt-0 rounded-[16px] px-[25px] md:px-[15px] pb-[30px] md:pb-[20px] before:w-full before:absolute before:-z-[1] before:h-full before:bg-white before:left-0 before:rounded-[16px] before:-top-[33px] before:skew-y-[4deg]">
                                <div class="et-member-socials absolute right-[20px] -top-[43px]">
                                    <div class="et-speaker__socials flex flex-col gap-[8px] absolute -z-[2] text-[14px] opacity-0 transition duration-[400ms] bottom-[calc(100%+8px)] translate-y-[100%] group-hover:translate-y-0 group-hover:opacity-100">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_sub_field( 'link_share' ); ?>" class="border border-white text-white w-[36px] h-[36px] flex items-center justify-center rounded-full hover:border-etBlue hover:bg-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                                        <!-- <a href="#" class="border border-white text-white w-[36px] h-[36px] flex items-center justify-center rounded-full hover:border-etBlue hover:bg-etBlue"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#" class="border border-white text-white w-[36px] h-[36px] flex items-center justify-center rounded-full hover:border-etBlue hover:bg-etBlue"><i class="fa-brands fa-linkedin-in"></i></a> -->
                                        <a href="javascript:void(0);" onclick="copyLink(<?php the_sub_field( 'link_share' ); ?>)" class="border border-white text-white w-[36px] h-[36px] flex items-center justify-center rounded-full hover:border-etBlue hover:bg-etBlue"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                    <div class="et-member-socials__icon w-[36px] aspect-square rounded-full bg-etBlue flex items-center justify-center">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.89361 9.41703C9.22284 9.41703 8.61849 9.70668 8.19906 10.1675L4.42637 7.83088C4.52995 7.56611 4.58305 7.28429 4.58294 6.99999C4.58307 6.71568 4.52997 6.43386 4.42637 6.16909L8.19906 3.83238C8.61851 4.29318 9.22284 4.58297 9.89361 4.58297C11.1572 4.58297 12.1851 3.55501 12.1851 2.29143C12.1851 1.02785 11.1572 0 9.89361 0C8.63005 0 7.60209 1.02796 7.60209 2.29154C7.60204 2.57583 7.65514 2.85763 7.75866 3.1224L3.98608 5.45903C3.56663 4.99824 2.96231 4.70845 2.29154 4.70845C1.02796 4.70845 0 5.73652 0 6.99999C0 8.26354 1.02796 9.29152 2.29154 9.29152C2.96228 9.29152 3.56666 9.00185 3.98608 8.54094L7.75869 10.8776C7.65515 11.1424 7.60204 11.4242 7.60209 11.7085C7.60209 12.972 8.63003 14 9.89361 14C11.1572 14 12.1851 12.972 12.1851 11.7086C12.1851 10.445 11.1572 9.41703 9.89361 9.41703ZM8.43766 2.29154C8.43766 1.48873 9.09082 0.835596 9.89361 0.835596C10.6964 0.835596 11.3495 1.48873 11.3495 2.29154C11.3495 3.09435 10.6964 3.74748 9.89361 3.74748C9.09079 3.74748 8.43766 3.09432 8.43766 2.29154ZM2.29154 8.45593C1.48862 8.45593 0.835487 7.80277 0.835487 6.99999C0.835487 6.1972 1.48862 5.54404 2.29154 5.54404C3.09435 5.54404 3.74737 6.1972 3.74737 6.99999C3.74737 7.80277 3.09432 8.45593 2.29154 8.45593ZM8.43766 11.7085C8.43766 10.9057 9.09082 10.2525 9.89361 10.2525C10.6964 10.2525 11.3495 10.9057 11.3495 11.7084C11.3495 12.5112 10.6964 13.1644 9.89361 13.1644C9.09079 13.1644 8.43766 12.5112 8.43766 11.7084V11.7085Z" fill="white" />
                                        </svg>
                                    </div>
                                </div>
                                <h5 class="font-semibold text-[16px] md:text-[20px] text-etBlack mb-[4px]" style="padding: 12px 0px;"><a href="#" class="hover:text-etBlue"><?php the_sub_field( 'name_speaker' ); ?></a></h5>
                                <span class="text-etGray text-[12px]"><?php the_sub_field( 'job' ); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
		<?php else : ?>
			<?php // No rows found ?>
		<?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>
    <!-- SPEAKERS SECTION END -->


    <!-- CTA SECTION START -->
    <div class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up relative z-[2]">
        <div class="bg-etBlue relative z-[1] p-[60px] xxl:p-[40px] xs:px-[20px] rounded-[20px] overflow-hidden -mb-[114px] shadow-[0_4px_50px_rgba(18,96,254,0.2)] after:absolute after:inset-0 after:-z-[1] after:bg-[url(../assets/img/et-counter-bg.jpg)] after:bg-cover after:bg-no-repeat after:mix-blend-screen">
        <?php if ( have_rows( 'section_information' ) ) : ?>
            <?php while ( have_rows( 'section_information' ) ) : the_row(); ?>
            <div class="flex items-center justify-center md:flex-wrap gap-x-[140px] xxl:gap-x-[80px] gap-y-[20px]">
                <div class="flex gap-x-[62px] sm:flex-col gap-y-[15px]">
                    <div class="flex items-center sm:justify-center gap-[15px] xxs:gap-[10px] shrink-0 ">
                        <!-- icon -->
                        <div class="icon border border-white rounded-full w-[56px] aspect-square shrink-0 flex items-center justify-center">
                            <div class="w-[48px] aspect-square bg-white rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"   viewBox="0 0 50 50" width="22px" height="22px"><path fill="var(--et-blue)" d="M 25 2 C 12.318 2 2 12.318 2 25 C 2 28.96 3.0228906 32.853062 4.9628906 36.289062 L 2.0371094 46.730469 C 1.9411094 47.073469 2.03325 47.440312 2.28125 47.695312 C 2.47225 47.892313 2.733 48 3 48 C 3.08 48 3.1612344 47.989703 3.2402344 47.970703 L 14.136719 45.271484 C 17.463719 47.057484 21.21 48 25 48 C 37.682 48 48 37.682 48 25 C 48 12.318 37.682 2 25 2 z M 16.642578 14 C 17.036578 14 17.428437 14.005484 17.773438 14.021484 C 18.136437 14.039484 18.624516 13.883484 19.103516 15.021484 C 19.595516 16.189484 20.775875 19.058563 20.921875 19.351562 C 21.069875 19.643563 21.168656 19.984047 20.972656 20.373047 C 20.776656 20.762047 20.678813 21.006656 20.382812 21.347656 C 20.086813 21.688656 19.762094 22.107141 19.496094 22.369141 C 19.200094 22.660141 18.892328 22.974594 19.236328 23.558594 C 19.580328 24.142594 20.765484 26.051656 22.521484 27.597656 C 24.776484 29.583656 26.679531 30.200188 27.269531 30.492188 C 27.859531 30.784188 28.204828 30.734703 28.548828 30.345703 C 28.892828 29.955703 30.024969 28.643547 30.417969 28.060547 C 30.810969 27.477547 31.204094 27.572578 31.746094 27.767578 C 32.288094 27.961578 35.19125 29.372062 35.78125 29.664062 C 36.37125 29.956063 36.766062 30.102703 36.914062 30.345703 C 37.062062 30.587703 37.062312 31.754234 36.570312 33.115234 C 36.078313 34.477234 33.717984 35.721672 32.583984 35.888672 C 31.565984 36.037672 30.277281 36.10025 28.863281 35.65625 C 28.006281 35.38625 26.907047 35.028734 25.498047 34.427734 C 19.575047 31.901734 15.706156 26.012047 15.410156 25.623047 C 15.115156 25.234047 13 22.46275 13 19.59375 C 13 16.72475 14.524406 15.314469 15.066406 14.730469 C 15.608406 14.146469 16.248578 14 16.642578 14 z"/></svg>
                            </div>
                        </div>

                        <!-- txt -->
                        <div class="text-white">
                            <span class="block font-medium text-[16px] mb-[3px]">Hotline BPro :</span>
                            <h5 class="font-medium text-[22px] xxs:text-[22px]"><a href="<?php the_sub_field( 'link_whatsapp' ); ?>"><?php the_sub_field( 'title_whatsapp' ); ?></a></h5>
                        </div>
                    </div>
                    <div class="pl-[54px] overflow-hidden border-l-[4px] sm:border-l-0 border-white md:text-center md:pl-[15px] sm:pl-0 md:w-full relative before:absolute before:-left-[10px] before:top-[50%] before:-translate-y-[50%] before:w-[15px] before:aspect-square before:bg-white before:rotate-[45deg] before:-skew-x-[10deg] before:-skew-y-[10deg] sm:before:hidden">
                        <div class="mb-[30px] text-[18px] font-light text-etGray md:mb-[30px] rev-slide-up text-white sm:text-[12px]" style="text-align: center; ">
                        <?php the_sub_field( 'description_event' ); ?>
                        </div>
                    </div>
                </div>

                <a href="<?php the_sub_field( 'link_button' ); ?>" class="et-btn bg-white hover:!bg-etBlack hover:!text-white flex items-center justify-center gap-x-[15px] h-[50px] px-[15px] text-etBlue font-medium text-[17px] rounded-full shrink-0 group">
                    <span class="icon">
                        <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.02101 0H0.844661C0.378197 0 0 0.378144 0 0.844662V5.12625C0 5.59277 0.378197 5.97091 0.844661 5.97091C1.96347 5.97091 2.8737 6.88114 2.8737 8C2.8737 9.11886 1.96347 10.029 0.844661 10.029C0.378197 10.029 0 10.4071 0 10.8736V15.1553C0 15.6218 0.378197 15.9999 0.844661 15.9999H8.02101V0Z" class="fill-etBlue group-hover:fill-white transition"></path>
                            <path d="M26.0001 5.97091C26.4665 5.97091 26.8447 5.59277 26.8447 5.12625V0.844662C26.8447 0.378144 26.4665 0 26.0001 0H9.71094V16H26.0001C26.4665 16 26.8447 15.6219 26.8447 15.1553V10.8737C26.8447 10.4072 26.4665 10.029 26.0001 10.029C24.8813 10.029 23.971 9.11886 23.971 8C23.971 6.88114 24.8813 5.97091 26.0001 5.97091Z" class="fill-etBlue group-hover:fill-white transition"></path>
                        </svg>
                    </span>
                    <?php the_sub_field( 'title_button' ); ?></a>
            </div>
            <?php endwhile; ?>
<?php endif; ?>
            <!-- vectors -->
            <div>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/cta-vector-1.png" alt="vector" class="pointer-events-none absolute top-0 left-0">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/cta-vector-2.png" alt="vector" class="pointer-events-none absolute bottom-0 right-0">
            </div>
        </div>
    </div>
    <!-- CTA SECTION END -->


    <!-- FEATURES SECTION START -->
    <?php if ( have_rows( 'section_discover' ) ) : ?>
        <?php while ( have_rows( 'section_discover' ) ) : the_row(); ?>
    <style>
        .section-discovery::after {
    background-image: url(<?php the_sub_field( 'backgroound' ); ?>);
}
    </style>
    <div  class="section-discovery bg-[#00339A] relative z-[1] after:absolute after:inset-0 after:bg-[url(<?php the_sub_field( 'backgroound' ); ?>)] after:bg-no-repeat after:bg-cover after:-z-[2] after:pointer-events-none after:opacity-50 pb-[130px] xl:pb-[80px] md:pb-[60px] pt-[244px] xl:pt-[194px] md:pt-[174px]">
        <div class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up">
            <!-- heading -->
            <div class="text-center mb-[52px]">
                <h6 class="et-section-sub-title !text-white before:!bg-white anim-text"><?php the_sub_field( 'subtitle' ); ?></h6>
                <h2 class="text-[35px] sm:text-[24px] !text-white anim-text mb-[24px] md:mb-[19px] sm:text-[20px]"><?php the_sub_field( 'title' ); ?></h2>
            </div>
            <!-- cards -->
            <div class="sm:hidden">
                <div class="grid grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] items-start">
                <?php if ( have_rows( 'list__service' ) ) : ?>
                    <?php $no =1; while ( have_rows( 'list__service' ) ) : the_row(); ?>
                    <!-- single card -->
                    <div class="et-2-feature-card rounded-[30px] overflow-hidden group relative">
                        <div class="et-2-feature-card-txt bg-white p-[30px]">
                            <!-- icon -->
                            <div class="w-[102px] aspect-square border-[10px] bg-etBlue border-[#EDF3FE] rounded-full flex items-center justify-center mb-[20px]">
                                <img src="<?php the_sub_field( 'icon' ); ?>" alt="Feature icon" class="transition duration-[0.4s] group-hover:-scale-x-100">
                            </div>
    
                            <!-- text -->
                            <div>
                                <h5 class="font-medium text-[18px] text-etBlack mb-[8px]"><a href="#" class="hover:text-etBlue"><?php the_sub_field( 'title' ); ?></a></h5>
                                <!-- <p class="font-light text-etGray text-[16px]">Mauris ultrices ligula eget volutpat aliquet nullam</p> -->
                            </div>
                        </div>
    
                        <!-- index number -->
                        <div class="absolute top-0 right-0 z-[1] w-[60px] aspect-square rounded-full bg-etBlue font-lato font-semibold text-[20px] text-white flex items-center justify-center">0<?php echo $no ; ?></div>
                    </div>
                    <?php $no++; endwhile; ?>
                    <?php endif; ?>
                    
                </div>
            </div>
            <div class="testing-slider okke">
                <div class="multiple-items">
                <?php if ( have_rows( 'list__service' ) ) : ?>
                    <?php $no =1; while ( have_rows( 'list__service' ) ) : the_row(); ?>
                    <div>
                        <div class="et-2-feature-card rounded-[30px] overflow-hidden group relative">
                            <div class="et-2-feature-card-txt bg-white p-[30px]">
                                <!-- icon -->
                                <div class="w-[102px] aspect-square border-[10px] bg-etBlue border-[#EDF3FE] rounded-full flex items-center justify-center mb-[20px]">
                                    <img src="<?php the_sub_field( 'icon' ); ?>" alt="Feature icon" class="transition duration-[0.4s] group-hover:-scale-x-100">
                                </div>
        
                                <!-- text -->
                                <div>
                                    <h5 class="font-medium text-[22px] text-etBlack mb-[8px]"><a href="#" class="hover:text-etBlue"><?php the_sub_field( 'title' ); ?></a></h5>
                                    <!-- <p class="font-light text-etGray text-[16px]">Mauris ultrices ligula eget volutpat aliquet nullam</p> -->
                                </div>
                            </div>
        
                            <!-- index number -->
                            <div class="absolute top-0 right-0 z-[1] w-[60px] aspect-square rounded-full bg-etBlue font-lato font-semibold text-[20px] text-white flex items-center justify-center">0<?php echo $no ; ?></div>
                        </div>
                    </div>
                    <?php $no++; endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- vectors -->
        <div>
            <img src="<?= get_template_directory_uri(); ?>/assets/img/stats-vector-2.png" alt="vector" class="pointer-events-none absolute top-[85px] right-[67px] -z-[1] opacity-10">
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- FEATURES SECTION END -->

    <!-- GALLERY SECTION START -->
    <!-- GALLERY SECTION END -->


    <!-- TESTIMONIAL SECTION START -->
    <?php if ( have_rows( 'section_testimonials' ) ) : ?>
        <?php while ( have_rows( 'section_testimonials' ) ) : the_row(); ?>

    <section class="et-testimonial overflow-hidden py-[130px] xl:py-[80px] md:py-[60px]">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
            <!-- heading -->
            <div class="et-testimonial-heading text-center mb-[46px] xl:mb-[26px] lg:mb-[16px] gap-[15px]">
                <h6 class="et-section-sub-title anim-text"><?php the_sub_field( 'subtitle' ); ?></h6>
                <h2 class="text-[35px] sm:text-[24px] anim-text"><?php the_sub_field( 'title' ); ?></h2>
            </div>

            <!-- slider -->
            <div class="et-2-testimonial-slider swiper overflow-visible">
                <div class="right test-right">
                    <div class="et-test-slider-nav flex gap-[16px] sm:gap-[12px]" style="justify-content: center; margin:30px 0">
                        <button class="prev border border-[#D9D9D9] rounded-full w-[60px] sm:w-[50px] h-[60px] sm:h-[50px] text-[18px] text-etBlack hover:bg-etBlue hover:border-etbg-etBlue hover:text-white">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </button>
                        <button class="next border border-[#D9D9D9] rounded-full w-[60px] sm:w-[50px] h-[60px] sm:h-[50px] text-[18px] text-etBlack hover:bg-etBlue hover:border-etbg-etBlue hover:text-white">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>
                <div class="swiper-wrapper">
                <?php if ( have_rows( 'list_testimonials' ) ) : ?>
                    <?php while ( have_rows( 'list_testimonials' ) ) : the_row(); ?>
                    <!-- single testimony  -->
                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?php the_sub_field( 'image' ); ?>" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]"><?php the_sub_field( 'name' ); ?></h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]"><?php the_sub_field( 'profession' ); ?></h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]"><?php the_sub_field( 'message' ); ?></p>
                            </div>

                            <!-- quotation icon -->
                            <div class="absolute top-[40px] sm:top-[20px] left-[40px] sm:left-[20px]">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/quotation-blue.svg" alt="quotation mark">
                            </div>

                            <!-- rating stars -->
                            <div class="absolute bottom-0 left-[50%] -translate-x-[50%] translate-y-[50%] flex gap-[6px] bg-white shadow-[0_4px_25px_rgba(56,75,255,0.15)] p-[12px] rounded-full">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/star-blue.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
		<?php else : ?>
			<?php // No rows found ?>
		<?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- TESTIMONIAL SECTION END -->
    <section class="grid grid-cols-4 lg:grid-cols-3 sm:grid-cols-2">
        <!-- single gallery item -->
        <?php $gallery_image_urls = get_field( 'gallery_image' ); ?>
<?php if ( $gallery_image_urls ) : ?>
	<?php $no = 1; foreach ( $gallery_image_urls as $gallery_image_url ): ?>
        <div class="<?php if($no > 4){ echo 'sm:hidden';} ?> relative z-[1] group before:absolute before:inset-0 before:bg-etBlue/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
            <img src="<?php echo esc_url( $gallery_image_url ); ?>" alt="gallery image">
            <a href="<?php echo esc_url( $gallery_image_url ); ?>" data-fslightbox="gallery-img" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                <i class="fa-plus fa-regular"></i>
            </a>
        </div>
        <?php $no++; endforeach; ?>
        <?php endif; ?>
        
    </section>
    

    <!-- SPONSORS SECTION START -->
    <section style="display: none;" class="et-2-sponsors bg-[#00239F] py-[130px] lg:py-[80px] md:py-[60px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/sponsors-bg.jpg')] before:bg-cover before:bg-center before:bg-no-repeat before:-z-[1] before:opacity-30">
        <div class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
            <!-- heading -->
            <div class="text-center mb-[52px] xl:mb-[42px] md:mb-[32px]">
                <h6 class="et-section-sub-title !text-white before:!bg-white anim-text">Sponsors & Exhibitors</h6>
                <h2 class="text-[35px] sm:text-[24px] !text-white anim-text">We're Sponsored By</h2>
            </div>

            <!-- sponsors -->
            <div class="flex flex-wrap gap-y-[60px] lg:gap-y-[40px] gap-x-[76px] xxl:gap-x-[56px] xl:gap-x-[46px] lg:gap-x-[36px] mb-[60px]">
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-1-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-2-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-3-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-4-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-5-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-6-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-7-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-8-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-9-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-2-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/img/sponsor-10-light.png" alt="sponsor logo" class="w-[80%] mx-auto"></div>
            </div>

            <div class="text-center">
                <a href="#" class="bg-etBlue inline-flex items-center justify-center gap-[10px] h-[56px] px-[24px] rounded-[10px] text-white text-[16px] hover:bg-etBlue">Become a Sponsor <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
            </div>
        </div>
    </section>
    <!-- SPONSORS SECTION END -->


    <!-- BLOG/NEWS SECTION START -->
    <section class="et-blogs overflow-hidden py-[130px] xl:py-[80px] md:py-[60px]">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
            <!-- heading -->
            <div class="et-blogs-heading flex xs:flex-col justify-between items-center mb-[52px] xl:mb-[32px] lg:mb-[22px] gap-[15px]">
                <div class="left xs:text-center">
                <?php if ( have_rows( 'section_blog' ) ) : ?>
                    <?php while ( have_rows( 'section_blog' ) ) : the_row(); ?>
                    <h6 class="et-section-sub-title anim-text"><?php the_sub_field( 'title' ); ?></h6>
                    <h2 class="text-[35px] sm:text-[24px] anim-text"><?php the_sub_field( 'subtitle' ); ?></h2>
                    <?php endwhile; ?>
<?php endif; ?>
                </div>

                <div class="right">
                    <div class="et-blogs-slider-nav flex gap-[16px] sm:gap-[12px]">
                        <button class="prev border border-[#D9D9D9] rounded-full w-[60px] sm:w-[50px] h-[60px] sm:h-[50px] text-[18px] text-etBlack hover:bg-etBlue hover:border-etbg-etBlue hover:text-white">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </button>
                        <button class="next border border-[#D9D9D9] rounded-full w-[60px] sm:w-[50px] h-[60px] sm:h-[50px] text-[18px] text-etBlack hover:bg-etBlue hover:border-etbg-etBlue hover:text-white">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="et-2-blogs-slider swiper p-[30px] -m-[30px]">
                <div class="swiper-wrapper">
                    <!-- single blogs -->
                    <?php
                $args = array(
                    'category_name' => 'Journal',
                    'orderby'    => 'date',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                );
                $result = new WP_Query( $args );
                if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <?php
                    $content = get_field('content', $post->ID);
                ?>
                    <div class="swiper-slide group">
                        <div class="et-blog bg-white relative group-[.swiper-slide-visible]:shadow-[0_4px_25px_rgba(0,0,0,0.06)]">
                            <div class="et-blog__img relative overflow-hidden z-[1]">
                                <img src="<?php the_post_thumbnail_url();?>" alt="category-icon" class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                            </div>

                            <div class="et-blog__txt bottom-0 z-[3] p-[30px] lg:p-[20px]">
                                <div class="et-blog__infos flex gap-x-[30px] mb-[13px]">
                                    <!-- single info -->
                                    <div class="et-blog-info flex items-center gap-x-[10px]">
                                        <span class="icon"><img src="<?= get_template_directory_uri(); ?>/assets/img/calender-blue.svg" alt="icon"></span>
                                        <span class="text font-normal text-[14px] text-etGray sm:text-[12px]"><?php echo get_the_date("d  M  Y");?></span>
                                    </div>

                                    <!-- single info -->
                                    <div class="et-blog-info flex items-center gap-x-[10px]">
                                        <span class="icon"><img src="<?= get_template_directory_uri(); ?>/assets/img/user-blue.svg" alt="icon"></span>
                                        <span class="text font-normal text-[14px] text-etGray sm:text-[12px]">BPro Administrator</span>
                                    </div>
                                </div>

                                <h4 class="et-blog__title text-[22px] lg:text-[20px] sm:text-[18px] font-medium leading-[1.4] mb-[19px]" style="color: #1260FE;"><?php the_title();?></h4>

                                <a href="<?php the_permalink();?>" class="text-[16px]  text-etGray inline-flex items-center gap-[10px] hover:text-etBlue">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile;
                endif;
                wp_reset_query();
                ?>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG/NEWS SECTION END -->
</main>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p style="font-size: 15px;">Shallom profesional muda, <br /><br />

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
            <img src="<?= get_template_directory_uri(); ?>/assets/new-img/logo-color.png"
                                        alt="signature" class="w-[100px]">
            <br />
            Be Success, Be Profesional.</p>
    </div>
</div>
<style>

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
            width: 45%  !important;
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

    .et-testimony.relative.p-\[40px\].lg\:p-\[30px\].md\:p-\[20px\].border.border-\[\#D4DCED\].rounded-\[16px\].mt-\[60px\] {
    min-height: 350px;
}
</style>
<script>
    // Get the modal
    

    function copyLink(url) {
    const link = url;
    navigator.clipboard.writeText(link).then(() => {
        alert('Link copied! Now, open Instagram, create a Story, and paste the link.');
    });
}
</script>

<?php
get_footer('main');
?>
