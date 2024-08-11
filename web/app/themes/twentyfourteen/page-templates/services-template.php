<?php

/**
 * Template Name: Services Template
 */

get_header('main');
?>

<style>
    /* .mySwiper2 {
        height: 800px;
    }

    .swiper-slide img {
        height: 300px;
        width: 100%;
        object-fit: cover;
    }

    .swiper-button-next,
    .swiper-button-prev {
        background: #fff;
        padding: 20px;
        height: 80px;
        width: 80px;
        border-radius: 100%;
    }

    .swiper-button-next:after, .swiper-button-prev:after {
        color: #000;
    } */

    .bg-etBlue.rounded-\[20px\].overflow-hidden.text-white.max-w-\[370px\].xxs\:max-w-full {
        width: 100%;
        min-height: 383px;
    }

    .lg\:col-span-3.xs\:col-span-full {
        width: 100%;
    }


    .slick-initialized .slick-slide .lg\:col-span-3.xs\:col-span-full {
        padding: 17px;
    }

    .pembicaraslider.slick-initialized.slick-slider.slick-dotted {
        height: 450px;
    }

    .slide-video.slick-initialized.slick-slider.slick-dotted ul.slick-dots {
        bottom: -100px !important;
    }

    iframe {
        border-radius: 28px;
        height: 700px;
    }

    .slide-video.slick-initialized.slick-slider.slick-dotted {
        height: 670px;
    }

    /* .bg-etBlue{
    background-color: #18377e;
} */

    .serviceslist .slick-slide {
        padding: 18px;
    }


    @media only screen and (max-width: 1700px) {
        iframe {
            width: 70%;
            height: 500px;
            margin: auto;
        }

        .slide-video.slick-initialized.slick-slider.slick-dotted ul.slick-dots {
            bottom: 80px !important;
        }

        section.minus-top {
            margin-top: -155px;
        }

        .bg-etBlue.rounded-\[20px\].overflow-hidden.text-white.max-w-\[370px\].xxs\:max-w-full {
            width: 100%;
            min-height: 333px;
        }
    }

    @media only screen and (max-width: 1500px) {

        .p-\[40px\].sm\:p-\[30px\].pb-0 {
            padding: 25px;
        }

        h3.text-\[32px\].mb-\[14px\] {
            font-size: 25px;
        }


        p.font-light.text-\[18px\] {
            font-size: 17px;
        }

        h5.font-medium.text-\[22px\].text-etBlack.mb-\[8px\] {
            font-size: 20px;
        }

        .slide-video.slick-initialized.slick-slider.slick-dotted ul.slick-dots {
            bottom: 160px !important;
        }

        section.minus-top {
            margin-top: -268px;
        }

        .bg-etBlue.rounded-\[20px\].overflow-hidden.text-white.max-w-\[370px\].xxs\:max-w-full {
            width: 100%;
            min-height: 295px;
        }
    }

    @media only screen and (max-width: 1500px) {
        iframe {
            width: 60%;
            height: 425px;
            margin: auto;
        }
    }

    @media(max-width:600px) {
        .pembicaraslider.slick-initialized.slick-slider.slick-dotted {
            height: 388px;
        }

        .serviceslist {
            height: 340px !important;
        }

        .mySwiper2 {
            height: auto;
        }

        .swiper-button-next,
        .swiper-button-prev {
            background: #fff;
            padding: 20px;
            height: 40px;
            width: 40px;
            border-radius: 100%;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px;
        }

        iframe {
            width: 100%;
            height: 350px;
            margin: auto;
        }

        .slide-video.slick-initialized.slick-slider.slick-dotted ul.slick-dots {
            bottom: 213px !important;
        }


        section.minus-top {
            margin-top: -258px;
        }

        section.et-about {
            padding-bottom: 25px;
        }

        .xl\:max-w-\[calc\(100\%-170px\)\] {
            max-width: calc(100% - 50px);
        }
    }

    @media(max-width:400px) {

        iframe {
            width: 100%;
            height: 250px;
            margin: auto;
        }

        .slide-video.slick-initialized.slick-slider.slick-dotted ul.slick-dots {
            bottom: 320px !important;
        }


        section.minus-top {
            margin-top: -368px;
        }

    }

    .et-testimony.relative.p-\[40px\].lg\:p-\[30px\].md\:p-\[20px\].border.border-\[\#D4DCED\].rounded-\[16px\].mt-\[60px\] {
        min-height: 350px;
    }



    .hero-banner::before {
        content: '';
        background-color: rgb(0 13 131 / 0.7);
        height: 100%;
        width: 100%;
        top: 0;
        bottom: 0;
    }

    .yo {
        position: relative;
    }

    .yo::before {
        content: '';
        background-color:#18377e52;
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        bottom: 0;
    }

    .background-minis {
        position: relative;
        transition: all 0.5s;
        min-height: 383px;
    }

    .background-minis::before {
        content: '';
        background-color:#18377eba;
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        bottom: 0;
    }

    .background-minis:hover {
        background-color: #18377e;
    }

    .slick-dots {
    position: absolute;
    bottom: -25px !important;
    display: block;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
}


    
</style>

<section class="hero-banner et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30"
    style=" background-image: url(<?php the_field( 'background_header' ); ?>); background-size: cover; background-position: center; ">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">Services BPro</h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px] sm:text-[12px]">
            <li class="opacity-80"><a href="index-2.html" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">Services BPro</li>
        </ul>
    </div>
</section>
<!-- <iframe width="100%" height="800" src="https://www.youtube.com/embed/cxPAZ5Z-9yg?si=QWEOB9Jpek2s1Zvw"
    title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
<section class="et-about py-[80px] overflow-hidden relative">
    <div class="container max-w-[calc(100%-37.1vw)] mx-[30px] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] m-auto">
        <div class="slide-video">
            <?php if ( have_rows( 'list_video' ) ) : ?>
            <?php while ( have_rows( 'list_video' ) ) : the_row(); ?>
            <div>
                <iframe width="100%" src="<?php the_sub_field( 'url_video' ); ?>" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // No rows found ?>
            <?php endif; ?>

        </div>
    </div>
    <!-- vectors -->
    <div class="xs:hidden">
        <img src="<?= get_template_directory_uri()?>/assets/img/about-vector-1.png" alt="vector"
            class="pointer-events-none absolute top-[340px] left-[90px] -z-[1]">
        <img src="<?= get_template_directory_uri()?>/assets/img/about-vector-2.png" alt="vector"
            class="pointer-events-none absolute top-[153px] right-0 -z-[1]">
    </div>
</section>

<?php if ( have_rows( 'section_ministry' ) ) : ?>
<?php while ( have_rows( 'section_ministry' ) ) : the_row(); ?>
<section class="minus-top et-about py-[80px] overflow-hidden relative et-2-schedules bg-[#EEF4FF] bg-[url('assets/img/schedule-bg.png')] bg-cover bg-no-repeat bg-center relative py-[130px] xl:py-[80px] md:py-[60px] before:absolute before:inset-0 before:bg-[url('../assets/img/')]" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="text-center mb-[52px]">
        <h6 class="et-section-sub-title anim-text"><?php the_sub_field( 'subtitle' ); ?></h6>
        <h2 class="mb-[24px] md:mb-[19px] anim-text sm:text-[24px] text-[25px]"><?php the_sub_field( 'title' ); ?>
        </h2>
        <div class="my-[10px] text-[15px] sm:text-[12px] text-white"
            style="text-align: center; max-width:70%; margin:auto">
            <div class="text-black">
                <?php the_sub_field( 'top_description' ); ?>
            </div>
        </div>
    </div>
    <div class="container max-w-[calc(100%-37.1vw)] mx-[30px] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] m-auto">
        <div class="pembicaraslider">
            <?php if ( have_rows( 'list_ministry' ) ) : ?>
            <?php while ( have_rows( 'list_ministry' ) ) : the_row(); ?>
            <div>
                <!-- pricing plans banner -->
                <div class="lg:col-span-3 xs:col-span-full">
                    <div style="background-image: url(' <?php the_sub_field( 'background' ) ?>'); background-size:cover; background-position:center" class="background-minis rounded-[20px] overflow-hidden text-white max-w-[370px] xxs:max-w-full">
                        <div class="p-[40px] sm:p-[30px] pb-0 relative">
                            <h3 class="text-[25px] mb-[14px]" style="font-weight:bolder">
                                <?php the_sub_field( 'title' ); ?></h3>
                            <p class="font-light text-[18px]"><?php the_sub_field( 'description' ); ?></p>
                        </div>
                        <!-- <img src="assets/img/pricing-banner-img.png" alt="image"> -->
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php // No rows found ?>
            <?php endif; ?>
        </div>

    </div>
    <div class="my-[10px] text-[15px] sm:text-[12px] text-white" style="text-align: center; max-width:70%; margin:auto">
        <div class="text-black " style=" padding-top: 45px; font-size: 20px;">
            <?php the_sub_field( 'bottom_description' ); ?>
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
<?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'section_other_services' ) ) : ?>
<?php while ( have_rows( 'section_other_services' ) ) : the_row(); ?>
<section class="et-about py-[80px]  overflow-hidden relative yo" style="background-image:url('<?= get_template_directory_uri()?>/assets/new-img/demo-banner-2.jpeg'); background-size:cover; background-position:center">
    <div class="text-center mb-[52px]">
        <h6 class="et-section-sub-title !text-white before:!bg-white anim-text"><?php the_sub_field( 'subtitle' ); ?>
        </h6>
        <h2 class="text-[35px] sm:text-[24px] !text-white anim-text mb-[24px] md:mb-[19px] sm:text-[20px] ">
            <?php the_sub_field( 'title' ); ?></h2>
        <div class="my-[10px] text-[15px] sm:text-[12px] text-white relative" style="text-align: center; max-width:70%; margin:auto">
            <!-- Info Registrasi:
            <br>
            Bethany Nginden – (+6231) 5936880
            <br>
            info@gerejabethany.org -->
            <?php the_sub_field( 'description' ); ?>
        </div>
    </div>
    <div class="container max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] m-auto">
        <div class="serviceslist">
            <?php if ( have_rows( 'list_services' ) ) : ?>
            <?php $no=1; while ( have_rows( 'list_services' ) ) : the_row(); ?>
            <div>
                <div class="et-2-feature-card rounded-[30px] overflow-hidden group relative">
                    <div class="et-2-feature-card-txt bg-white p-[30px]">
                        <!-- icon -->
                        <div
                            class="w-[102px] aspect-square border-[10px] bg-etBlue border-[#EDF3FE] rounded-full flex items-center justify-center mb-[20px]">
                            <img src="<?php the_sub_field( 'icon' ); ?>" alt="Feature icon"
                                class="transition duration-[0.4s] group-hover:-scale-x-100">
                        </div>

                        <!-- text -->
                        <div>
                            <h5 class="font-medium text-[17px] text-etBlack mb-[8px]"><a href="#"
                                    class="hover:text-etBlue"><?php the_sub_field( 'title' ); ?></a></h5>
                            <!-- <p class="font-light text-etGray text-[16px]">Mauris ultrices ligula eget volutpat aliquet nullam</p> -->
                        </div>
                    </div>

                    <!-- index number -->
                    <div
                        class="absolute top-0 right-0 z-[1] w-[60px] aspect-square rounded-full bg-etBlue font-lato font-semibold text-[20px] text-white flex items-center justify-center">
                        0<?php echo $no; ?></div>
                </div>
            </div>
            <?php $no++; endwhile; ?>
            <?php else : ?>
            <?php // No rows found ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'section_testimonials',76 ) ) : ?>
<?php while ( have_rows( 'section_testimonials',76 ) ) : the_row(); ?>

<section class="et-testimonial overflow-hidden py-[80px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <!-- heading -->
        <div class="et-testimonial-heading text-center mb-[46px] xl:mb-[26px] lg:mb-[16px] gap-[15px]">
            <h6 class="et-section-sub-title anim-text"><?php the_sub_field( 'subtitle' ); ?></h6>
            <h2 class="text-[35px] sm:text-[24px] anim-text"><?php the_sub_field( 'title' ); ?></h2>
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
                <?php if ( have_rows( 'list_testimonials' ) ) : ?>
                <?php while ( have_rows( 'list_testimonials' ) ) : the_row(); ?>
                <!-- single testimony  -->
                <?php if(get_sub_field( 'relation_on_page' ) == "Services"){ ?>
                <div class="swiper-slide">
                    <div
                        class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                        <!-- single testimony heading -->
                        <div
                            class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                            <div
                                class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                <img src="<?php the_sub_field( 'image' ); ?>" alt="reviewer image"
                                    class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                            </div>
                        </div>

                        <div class="text-center">
                            <h5 class="text-black font-medium text-[20px] mb-[3px]"><?php the_sub_field( 'name' ); ?>
                            </h5>
                            <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">
                                <?php the_sub_field( 'profession' ); ?></h6>
                            <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">
                                <?php the_sub_field( 'message' ); ?></p>
                        </div>

                        <!-- quotation icon -->
                        <div class="absolute top-[40px] sm:top-[20px] left-[40px] sm:left-[20px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/quotation-darkblue.png" width="55px" alt="quotation mark">
                        </div>

                        <!-- rating stars -->
                        <div
                            class="absolute bottom-0 left-[50%] -translate-x-[50%] translate-y-[50%] flex gap-[6px] bg-white shadow-[0_4px_25px_rgba(56,75,255,0.15)] p-[12px] rounded-full">
                            <img width="20px" src="<?= get_template_directory_uri(); ?>/assets/img/star-darkblue.png" alt="star">
                                <img width="20px" src="<?= get_template_directory_uri(); ?>/assets/img/star-darkblue.png" alt="star">
                                <img width="20px" src="<?= get_template_directory_uri(); ?>/assets/img/star-darkblue.png" alt="star">
                                <img width="20px" src="<?= get_template_directory_uri(); ?>/assets/img/star-darkblue.png" alt="star">
                                <img width="20px" src="<?= get_template_directory_uri(); ?>/assets/img/star-darkblue.png" alt="star">
                        </div>
                    </div>
                </div>
                <?php } ?>
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
<style>
    h6.et-section-sub-title.anim-text.text-white:before {
        background-color: #fff;
    }
</style>

<?php get_footer('main'); ?>