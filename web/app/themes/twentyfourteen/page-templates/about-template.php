<?php

/**
 * Template Name: About Template
 */

get_header('main');
?>

<style>

.et-history-timeline.swiper-slide-thumb-active {
    border-top:1px solid #fff;
}

.et-history-timeline::before {
    background-color: #fff;
}
.before\:bg-etBlue\/80::before {
    content: var(--tw-content);
    background-color: #18377e;
    opacity: 0.7;
}

    .et-history-timeline.swiper-slide-thumb-active h3,
    .et-history-timeline h3 {
        color: #fff;
    }

    .uproinhim {
        font-size: 20px;
    }

    .uproinhimgod {
        text-align: center;
        margin: 20px 0;
        font-size:40px;
        color: transparent;
        -webkit-text-stroke: 1px #fff;
        text-align: center;
        font-style: italic;
    }
    .explain {
        width: 50%;
        margin: auto;
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
    @media(max-width:500px) {
        .uproinhimgod {
            font-size: 30px;
        }
        .explain {
            width: 100%;
            margin: auto;
        }
        .et-section-sub-title::before {
            display: none;
        }

        .uproinhim {
            font-size: 15px;
        }   

        .et-section-sub-title {
            font-size: 16px;
            padding: 0;
        }
        .et-history-timeline {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
        
        .et-history-slider .swiper-slide {
            padding-left: 10px;
            padding-right: 10px;
        }



    }
</style>

<?php if(have_rows('hero_banner')) : ?>
    <?php while(have_rows('hero_banner')) :  the_row(); 
        $hero_image = get_sub_field('hero_image');
        $hero_title = get_sub_field('hero_title');
    ?>
<?php endwhile; ?>
<section style="background-image:url('<?= ($hero_image != NULL) ? $hero_image : '' ?>'); background-size:cover; background-position:center" class="hero-banner et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-50 relative">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]"><?= $hero_title ?></h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px]">
            <li class="opacity-80"><a href="<?= home_url()?>/" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page"><?= the_title()?></li>
        </ul>
    </div>
</section>
<?php endif; ?>

<section class="et-about py-[80px] xl:py-[80px] md:py-[60px] overflow-hidden relative">
    <div class="container mx-auto max-w-[calc(100%-39.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <div
            class="flex items-center md:flex-wrap gap-x-[60px] xxl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[0px] lg:justify-center">
            <!-- left -->
            <div class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full mr-[70px] md:mr-0 ml-[28px] xxxl:ml-[47px] md:ml-0 xs:w-[100%] xxs:w-[100%] sm:ml-0">
                <?php if(have_rows('bpro_at_glance_image')) :?>
                    <?php while(have_rows('bpro_at_glance_image')) : the_row();
                        $image_parent = get_sub_field('image_parent');
                        $image_child = get_sub_field('image_child');
                    ?>
                    <?php endwhile;?>
                    <img src="<?= $image_parent ?>" style="width: 350px; height: 350px; object-fit: cover;" alt="image" class="shrink-0 rounded-[10px]" />
                    <img src="<?= $image_child ?>" alt="image" class="et-about-floating-img absolute top-[45px] -right-[70px] shrink-0 rounded-[20px] border-white border-[10px] xs:hidden" />
                <?php endif;?>
                <!-- vectors -->
                <div class="et-about-vectors xs:hidden">
                    <img src="<?= get_template_directory_uri()?>/assets/img/about-img-vector-1.png" alt="vector" class="et-about-vector-1 absolute -left-[47px] top-[20px] -z-[1]" />
                    <img src="<?= get_template_directory_uri()?>/assets/img/about-img-vector-2.png" alt="vector" class="et-about-vector-2 absolute -left-[27px] top-[41px] -z-[1]" />
                    <img src="<?= get_template_directory_uri()?>/assets/img/about-img-vector-3.png" alt="vector" class="et-about-vector absolute -right-[24px] bottom-[34px] -z-[1]" />
                </div>

                <!-- video btn -->
                <div class="absolute bottom-[50px] -left-[47px] lg:-left-[27px] md:-left-[47px] w-[180px] lg:w-[160px] aspect-square bg-[url('assets/img/about-video-btn-bg.jpg')] text-center text-[22px] text-white z-[1] flex items-center justify-center before:absolute before:bg-etBlue/80 before:-z-[1] before:inset-0 after:bg-etBlack after:w-[47px] after:h-[30px] after:absolute after:top-[100%] after:left-0 after:-z-[2] after:skew-y-[30deg] after:-translate-y-[17px] sm:hidden">
                    <!-- <a href="https://www.youtube.com/watch?v=AQleI8oFqZo&amp;t=1s" data-fslightbox="about-video"
                        class="w-[107px] aspect-square rounded-full border border-white/20 flex justify-center items-center text-etBlue relative z-[1] text-[18px] before:absolute before:w-[56px] before:h-[56px] before:explain bg-white h-[500px] relative before:rounded-full before:-z-[1] hover:text-black"><i
                            class="fa-solid fa-play"></i></a> -->
                </div>
            </div>

            <!-- right -->
            <div class="et-about__txt">
                <div class="rev-slide-up">
                    <!-- txt -->
                    <div class="my-[30px] sm:my-[20px]">
                        <?php if(have_rows('bpro_at_glance_description')) :?>
                            <?php while(have_rows('bpro_at_glance_description')) : the_row() ;
                                $sub_text = get_sub_field('head_small_text');
                                $description = get_sub_field('description_bpro');
                            ?>
                                <h6 class="et-section-sub-title anim-text"><?= $sub_text ?></h6>
                                <p class="my-[10px] text-[15px]" style="text-align: justify; color: #000;"><?= $description ?></p>
                            <?php endwhile; ?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
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

<!-- HISTORY SECTION START -->
<section style="background-image:url('https://bethanyprofessional.com/app/uploads/2024/08/edwin-andrade-6liebVeAfrY-unsplash.jpg'); background-size:cover; background-position:center;" class="yo bg-[#001B52] relative z-[1] py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <!-- heading -->
        <div class="et-upcoming-events-heading text-center max-w-[60%] mx-auto md:max-w-[70%] sm:max-w-[80%] xs:max-w-full">
            <h6 class="et-section-sub-title !text-white"><?php the_field('bpro_vision_and_values_text')?></h6>
        </div>

        <?php if(have_rows('bpro_vision')) :?>
            <?php while(have_rows('bpro_vision')) : the_row() ;
                $title = get_sub_field('bpro_vision_title');
                $description = get_sub_field('bpro_vision_description');
            ?>
            <div class="vision relative mb-[40px] mt-[40px]">
                <h2 class="text-[35px] sm:text-[24px] !text-white text-center" style="color:#fff; font-style:normal;"><?= $title ?></h2>
                <div class="txt mb-[40px]" style="max-width: 80%; margin: 20px auto;">
                    <p class="my-[10px] text-[15px] text-white text-center" style="font-style: normal;" ><?= $description ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif;?>
        <?php if(have_rows('bpro_value')) :?>
            <?php while(have_rows('bpro_value')) : the_row();
                $head_title = get_sub_field('bpro_value_title');
            ?>
            <div class="vision mb-[40px] relative">
                <h2 class="text-[35px] sm:text-[24px] !text-white text-center" style="color:#fff; font-style:normal;"><?= $head_title ?></h2>
                <h3 class="font-semibold uproinhimgod">"U PRO IN HIM"</h3>
            </div>
            <?php if(have_rows('bpro_values')) :?>
                    <div class="et-history-slider swiper xs:w-[70%] xxs:w-[90%] sm:ml-0">
                        <div class="et-history-timeline-slider swiper my-[40px] lg:mt-[25px] border-t border-[rgba(217,217,217,0.2)]">
                            <div class="swiper-wrapper justify-center sm:justify-start">
                                <?php while(have_rows('bpro_values')) : the_row();
                                    $title_coordination = get_sub_field('title_value');
                                    $bigger_title_value = get_sub_field('bigger_title_value');
                                    $description_value = get_sub_field('description_value');
                                ?>
                                <div class="et-history-timeline mb-[40px] swiper-slide py-[30px] relative cursor-pointer">
                                    <div>
                                        <h3 class="font-semibold text-[30px] leading-[0.8] text-transparent"><?= $title_coordination ?></h3>
                                    </div>
                                </div>
                                <?php endwhile; ?>    
                            </div>
                        </div>
                        <div class="swiper-wrapper">
                            <!-- single timeline -->
                            <?php while(have_rows('bpro_values')) : the_row();
                                $bigger_title_value = get_sub_field('bigger_title_value');
                                $description_value = get_sub_field('description_value');
                            ?>
                                <div class="swiper-slide">
                                    <div class="grid grid-cols-1 gap-[30px]">
                                        <div class="explain bg-white h-[350px] xxs:h-[500px] relative rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                                            <h5 class="text-[24px] font-normal mb-[13px] sm:text-[20px]" style="color:rgb(0 27 82);"><?= $bigger_title_value ?></h5>
    
                                            <div class="txt mb-[40px]" style="font-style: normal;">
                                                <p class="my-[10px] text-[15px]" style="text-align: justify;"><?= $description_value ?></p>
                                            </div>
                                            <div
                                                class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center absolute bottom-0">
                                                <!-- signature -->
                                                <div>
                                                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/logo-color.png"
                                                        alt="signature" class="w-[100px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>                    
                    </div>
            <?php endif;?>
            <?php endwhile;?>
        <?php endif;?>
    </div>
</section>
<!-- HISTORY SECTION END -->


<?php
get_footer('main');