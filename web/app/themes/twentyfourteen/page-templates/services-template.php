<?php

/**
 * Template Name: Services Template
 */

get_header('main');
?>

<style>
    .mySwiper2 {
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
    }

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
    @media(max-width:600px) {
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

        .swiper-button-next:after, .swiper-button-prev:after {
            font-size: 20px;
        }

        iframe {
            height: 300px;
        }

        section.et-about {
            padding-bottom: 25px;
        }
        
    }
</style>

<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
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
<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/cxPAZ5Z-9yg?si=QWEOB9Jpek2s1Zvw"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
        <div class="swiper-slide">
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/sUe7KWWNQKw?si=8VRW9u5N2LSWDnhJ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="swiper-slide">
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/NRe501rLW-A?si=YaK17NuG-9jtZDcz"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
        <div class="swiper-slide">
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/gBHwd-gPqaI?si=mz9CkJv49rjuOMKj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div thumbsSlider="" class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri()?>/assets/new-img/thumb-1.png" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri()?>/assets/new-img/thumb-2.png" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri()?>/assets/new-img/thumb-3.png" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri()?>/assets/new-img/thumb-4.png" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri()?>/assets/new-img/thumb-4.png" />
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative" style="display: none;">
    <div
        class="container mx-auto max-w-[calc(100%-39.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <div
            class="flex items-center md:flex-wrap gap-x-[60px] xxl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[0px] lg:justify-center">
            <!-- left -->
            <div
                class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full mr-[70px] md:mr-0 ml-[28px] xxxl:ml-[47px] md:ml-0 xs:w-[70%] xxs:w-full">
                <img src="<?= get_template_directory_uri()?>/assets/img/services2.png" alt="image"
                    class="shrink-0 rounded-[10px]" />
                <img src="<?= get_template_directory_uri()?>/assets/img/services1.png" alt="image"
                    class="et-about-floating-img absolute top-[45px] -right-[70px] shrink-0 rounded-[20px] border-white border-[10px] xs:hidden" />

                <!-- vectors -->
                <div class="et-about-vectors xs:hidden">
                    <img src="<?= get_template_directory_uri()?>/assets/img/about-img-vector-1.png" alt="vector"
                        class="et-about-vector-1 absolute -left-[47px] top-[20px] -z-[1]" />
                    <img src="<?= get_template_directory_uri()?>/assets/img/about-img-vector-2.png" alt="vector"
                        class="et-about-vector-2 absolute -left-[27px] top-[41px] -z-[1]" />
                    <img src="<?= get_template_directory_uri()?>/assets/img/about-img-vector-3.png" alt="vector"
                        class="et-about-vector absolute -right-[24px] bottom-[34px] -z-[1]" />
                </div>

                <!-- video btn -->
                <div
                    class="absolute bottom-[50px] -left-[47px] lg:-left-[27px] md:-left-[47px] w-[180px] lg:w-[160px] aspect-square bg-[url('assets/img/about-video-btn-bg.jpg')] text-center text-[22px] text-white z-[1] flex items-center justify-center before:absolute before:bg-etBlue/80 before:-z-[1] before:inset-0 after:bg-etBlack after:w-[47px] after:h-[30px] after:absolute after:top-[100%] after:left-0 after:-z-[2] after:skew-y-[30deg] after:-translate-y-[17px] sm:hidden">
                </div>
            </div>

            <!-- right -->
            <div class="et-about__txt">
                <div class="rev-slide-up">
                    <!-- txt -->
                    <div class="my-[30px]">
                        <h6 class="et-section-sub-title anim-text">Services BPro</h6>
                        <h2 class="mb-[24px] md:mb-[19px] anim-text sm:text-[24px] text-[25px]">BPro – Join Our Ministry
                        </h2>
                        <p class="my-[10px] text-[15px] sm:text-[12px]" style="text-align: justify;">
                            -<br>
                            Saudara-saudara, memang kamu telah dipanggil untuk merdeka. Tetapi janganlah kamu
                            mempergunakan kemerdekaan itu sebagai kesempatan untuk kehidupan dalam dosa, melainkan
                            layanilah seorang akan yang lain oleh kasih.<b> Galatia 5:13 </b>
                            <br>-<br><br>


                            <b>Prayer Team</b><br>
                            <b>Praise & Worship</b> – Worship Leader, Singer, Musician, Choir<br>
                            <b>Creative & Art</b> – Multimedia, Photo-Videographer, Design & Content Creator,
                            Lighting<br>
                            <b>Pastoral </b> – Usher, Professional Community <br>
                            <b>Stage Management</b><br>
                            <b>Mission & Outreach</b><br>
                            <b>BPro Kids</b><br><br>


                            Info & Registrasi:<br>
                            Hotline BPro <br> +62811-3116-6111 (Whatsapp)

                        </p>
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
<section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative" style=" background: #FFF">
    <div class="text-center mb-[52px]">
        <h6 class="et-section-sub-title anim-text">Services BPro</h6>
        <h2 class="mb-[24px] md:mb-[19px] anim-text sm:text-[24px] text-[25px]">BPro – Join Our Ministry
                        </h2>
        <div class="my-[10px] text-[15px] sm:text-[12px] text-white" style="text-align: center; max-width:70%; margin:auto">
            <p class="text-black">Saudara-saudara, memang kamu telah dipanggil untuk merdeka. <br> Tetapi janganlah kamu mempergunakan kemerdekaan itu sebagai kesempatan untuk kehidupan dalam dosa, melainkan layanilah seorang akan yang lain oleh kasih. <b> Galatia 5:13 </b></p>
        </div>
    </div>
    <div class="container max-w-[calc(100%-37.1vw)] mx-[30px] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] m-auto">
            <div class="pembicaraslider">
                    <div>
                    <!-- pricing plans banner -->
                    <div class="lg:col-span-3 xs:col-span-full">
                        <div class="bg-etBlue rounded-[20px] overflow-hidden text-white max-w-[370px] xxs:max-w-full">
                            <div class="p-[40px] sm:p-[30px] pb-0">
                                <h3 class="text-[32px] mb-[14px]">Prayer <span class="font-semibold"> Team </span>.</h3>
                                <p class="font-light text-[18px]"></p>
                            </div>
                            <!-- <img src="assets/img/pricing-banner-img.png" alt="image"> -->
                        </div>
                    </div>
                    </div>
                    <div>
                    <div class="lg:col-span-3 xs:col-span-full">
                        <div class="bg-etBlue rounded-[20px] overflow-hidden text-white max-w-[370px] xxs:max-w-full">
                            <div class="p-[40px] sm:p-[30px] pb-0">
                                <h3 class="text-[32px] mb-[14px]">Praise & <span class="font-semibold">Worship</span>.</h3>
                                <p class="font-light text-[18px]">Worship Leader, Singer, Musician, Choir</p>
                            </div>
                            <!-- <img src="assets/img/pricing-banner-img.png" alt="image"> -->
                        </div>
                    </div>
                    </div>
                    <div>
                    <div class="lg:col-span-3 xs:col-span-full">
                        <div class="bg-etBlue rounded-[20px] overflow-hidden text-white max-w-[370px] xxs:max-w-full">
                            <div class="p-[40px] sm:p-[30px] pb-0">
                                <h3 class="text-[32px] mb-[14px]">Creative & <span class="font-semibold">Art</span>.</h3>
                                <p class="font-light text-[18px]">Multimedia, Photo-Videographer, Design & Content Creator, Lighting</p>
                            </div>
                            <!-- <img src="assets/img/pricing-banner-img.png" alt="image"> -->
                        </div>
                    </div>
                    </div>
                    <div>
                    <div class="lg:col-span-3 xs:col-span-full">
                        <div class="bg-etBlue rounded-[20px] overflow-hidden text-white max-w-[370px] xxs:max-w-full">
                            <div class="p-[40px] sm:p-[30px] pb-0">
                                <h3 class="text-[32px] mb-[14px]"><span class="font-semibold">Pastoral</span>.</h3>
                                <p class="font-light text-[18px]">Usher, Professional Community</p>
                            </div>
                            <!-- <img src="assets/img/pricing-banner-img.png" alt="image"> -->
                        </div>
                    </div>
                    </div>
                    <div>
                    <div class="lg:col-span-3 xs:col-span-full">
                        <div class="bg-etBlue rounded-[20px] overflow-hidden text-white max-w-[370px] xxs:max-w-full">
                            <div class="p-[40px] sm:p-[30px] pb-0">
                                <h3 class="text-[32px] mb-[14px]">Stage <span class="font-semibold">Management</span>.</h3>
                                <p class="font-light text-[18px]"></p>
                            </div>
                            <!-- <img src="assets/img/pricing-banner-img.png" alt="image"> -->
                        </div>
                    </div>
                    </div>
                    <div>
                    <div class="lg:col-span-3 xs:col-span-full">
                        <div class="bg-etBlue rounded-[20px] overflow-hidden text-white max-w-[370px] xxs:max-w-full">
                            <div class="p-[40px] sm:p-[30px] pb-0">
                                <h3 class="text-[32px] mb-[14px]">Mission & <span class="font-semibold">Outreach</span>.</h3>
                                <p class="font-light text-[18px]"></p>
                            </div>
                            <!-- <img src="assets/img/pricing-banner-img.png" alt="image"> -->
                        </div>
                    </div>
                    </div>
                    <div>
                    <div class="lg:col-span-3 xs:col-span-full">
                        <div class="bg-etBlue rounded-[20px] overflow-hidden text-white max-w-[370px] xxs:max-w-full">
                            <div class="p-[40px] sm:p-[30px] pb-0">
                                <h3 class="text-[32px] mb-[14px]">BPro <span class="font-semibold">Kids</span>.</h3>
                                <p class="font-light text-[18px]"></p>
                            </div>
                            <!-- <img src="assets/img/pricing-banner-img.png" alt="image"> -->
                        </div>
                    </div>
                    </div>
                </div>
       
    </div>
    <div class="my-[10px] text-[15px] sm:text-[12px] text-white" style="text-align: center; max-width:70%; margin:auto">
    <p class="text-black " style="
    padding-top: 45px;
">Info & Registrasi: <br>Hotline BPro +62811-3116-6111 (Whatsapp)</p>   
    </div>
</section>
<section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative" style=" background: rgb(0 27 82);">
    <div class="text-center mb-[52px]">
        <h6 class="et-section-sub-title !text-white before:!bg-white anim-text">Services BPro</h6>
        <h2 class="text-[35px] sm:text-[24px] !text-white anim-text mb-[24px] md:mb-[19px] sm:text-[20px]">BPro – Other Services</h2>
        <div class="my-[10px] text-[15px] sm:text-[12px] text-white" style="text-align: center; max-width:70%; margin:auto">
            <!-- Info Registrasi:
            <br>
            Bethany Nginden – (+6231) 5936880
            <br>
            info@gerejabethany.org -->
            <p>Selain itu, gereja kami menyelenggarakan berbagai program jangkauan, termasuk proyek layanan komunitas dan kelompok dukungan, untuk memperluas bantuan kami melampaui batas-batas gereja. Apakah Anda mencari pertumbuhan spiritual, keterlibatan komunitas, atau dukungan pribadi, gereja kami siap melayani Anda.</p>
        </div>
    </div>
    <div class="container max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] m-auto">
        <div class="grid grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] items-start">
            <!-- single card -->
            <div class="et-2-feature-card rounded-[30px] overflow-hidden group relative">
                <div class="et-2-feature-card-txt bg-white p-[30px]">
                    <!-- icon -->
                    <div class="w-[102px] aspect-square border-[10px] bg-etBlue border-[#EDF3FE] rounded-full flex items-center justify-center mb-[20px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/feature-1.png" alt="Feature icon" class="transition duration-[0.4s] group-hover:-scale-x-100">
                    </div>
    
                    <!-- text -->
                    <div>
                        <h5 class="font-medium text-[22px] text-etBlack mb-[8px]"><a href="#" class="hover:text-etBlue">Baptisan</a></h5>
                        <!-- <p class="font-light text-etGray text-[16px]">Mauris ultrices ligula eget volutpat aliquet nullam</p> -->
                    </div>
                </div>
    
                <!-- index number -->
                <div class="absolute top-0 right-0 z-[1] w-[60px] aspect-square rounded-full bg-etBlue font-lato font-semibold text-[20px] text-white flex items-center justify-center">01</div>
            </div>
    
            <!-- single card -->
            <div class="et-2-feature-card rounded-[30px] overflow-hidden group relative">
                <div class="et-2-feature-card-txt bg-white p-[30px]">
                    <!-- icon -->
                    <div class="w-[102px] aspect-square border-[10px] bg-etBlue border-[#EDF3FE] rounded-full flex items-center justify-center mb-[20px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/feature-2.png" alt="Feature icon" class="transition duration-[0.4s] group-hover:-scale-x-100">
                    </div>
    
                    <!-- text -->
                    <div>
                        <h5 class="font-medium text-[22px] text-etBlack mb-[8px]"><a href="#" class="hover:text-etBlue">Pemberkatan Nikah</a></h5>
                        <!-- <p class="font-light text-etGray text-[16px]">Mauris ultrices ligula eget volutpat aliquet nullam</p> -->
                    </div>
                </div>
    
                <!-- index number -->
                <div class="absolute top-0 right-0 z-[1] w-[60px] aspect-square rounded-full bg-etBlue font-lato font-semibold text-[20px] text-white flex items-center justify-center">02</div>
            </div>
    
            <!-- single card -->
            <div class="et-2-feature-card rounded-[30px] overflow-hidden group relative">
                <div class="et-2-feature-card-txt bg-white p-[30px]">
                    <!-- icon -->
                    <div class="w-[102px] aspect-square border-[10px] bg-etBlue border-[#EDF3FE] rounded-full flex items-center justify-center mb-[20px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/feature-3.png" alt="Feature icon" class="transition duration-[0.4s] group-hover:-scale-x-100">
                    </div>
    
                    <!-- text -->
                    <div>
                        <h5 class="font-medium text-[22px] text-etBlack mb-[8px]"><a href="#" class="hover:text-etBlue">Penyerahan Anak</a></h5>
                        <!-- <p class="font-light text-etGray text-[16px]">Mauris ultrices ligula eget volutpat aliquet nullam</p> -->
                    </div>
                </div>
    
                <!-- index number -->
                <div class="absolute top-0 right-0 z-[1] w-[60px] aspect-square rounded-full bg-etBlue font-lato font-semibold text-[20px] text-white flex items-center justify-center">03</div>
            </div>
    
            <!-- single card -->
            <div class="et-2-feature-card rounded-[30px] overflow-hidden group relative">
                <div class="et-2-feature-card-txt bg-white p-[30px]">
                    <!-- icon -->
                    <div class="w-[102px] aspect-square border-[10px] bg-etBlue border-[#EDF3FE] rounded-full flex items-center justify-center mb-[20px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/feature-4.png" alt="Feature icon" class="transition duration-[0.4s] group-hover:-scale-x-100">
                    </div>
    
                    <!-- text -->
                    <div>
                        <h5 class="font-medium text-[22px] text-etBlack mb-[8px]"><a href="#" class="hover:text-etBlue">Kedukaan</a></h5>
                        <!-- <p class="font-light text-etGray text-[16px]">Mauris ultrices ligula eget volutpat aliquet nullam</p> -->
                    </div>
                </div>
    
                <!-- index number -->
                <div class="absolute top-0 right-0 z-[1] w-[60px] aspect-square rounded-full bg-etBlue font-lato font-semibold text-[20px] text-white flex items-center justify-center">04</div>
            </div>
        </div>
    </div>
</section>
<style>
    h6.et-section-sub-title.anim-text.text-white:before {
        background-color: #fff;
    }
</style>

<?php
get_footer('main');