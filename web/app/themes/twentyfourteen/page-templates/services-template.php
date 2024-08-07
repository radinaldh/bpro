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
    bottom: -150px !important;
}

/* .bg-etBlue{
    background-color: #18377e;
} */
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
        .xl\:max-w-\[calc\(100\%-170px\)\] {
    max-width: calc(100% - 50px);
  }
    }

    .et-testimony.relative.p-\[40px\].lg\:p-\[30px\].md\:p-\[20px\].border.border-\[\#D4DCED\].rounded-\[16px\].mt-\[60px\] {
    min-height: 350px;
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
    <section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative" style=" background: #FFF">
    <div class="container max-w-[calc(100%-37.1vw)] mx-[30px] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] m-auto">
        <div class="slide-video">
            <div>
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/cxPAZ5Z-9yg?si=QWEOB9Jpek2s1Zvw"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
            </div>
            <div>
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/sUe7KWWNQKw?si=8VRW9u5N2LSWDnhJ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div>
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/NRe501rLW-A?si=YaK17NuG-9jtZDcz"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe> 
            </div>
            <div>
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/gBHwd-gPqaI?si=mz9CkJv49rjuOMKj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            
        </div>

<!-- <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
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
</div> -->
    </div>
    </section>
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
">Info & Registrasi: <br>Hotline BPro 0811-311-66111 (Whatsapp)</p>   
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
<section class="et-testimonial overflow-hidden py-[130px] xl:py-[80px] md:py-[60px]">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
            <!-- heading -->
            <div class="et-testimonial-heading text-center mb-[46px] xl:mb-[26px] lg:mb-[16px] gap-[15px]">
                <h6 class="et-section-sub-title anim-text">Testimonials</h6>
                <h2 class="text-[35px] sm:text-[24px] anim-text">See Their Feedback</h2>
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
                    <!-- single testimony  -->
                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Arif.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Arif Bijaksana</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Florist & Wedding Decoration</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">BPro Talkshow adalah salah satu format ibadah yang saya tunggu, karena disitu saya bisa belajar pengaplikasian Firman Tuhan di era sekarang dengan segala kemajuan yang ada dan di dunia kerja dengan lebih detail lewat sesi QnA.</p>
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

                    <!-- single testimony  -->
                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Dave.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Dave Harley</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Musician</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Salah satu karakterku yang bertumbuh yaitu "Kasih", jadi lebih mengerti dan bisa mengasihi sesama daripada sebelum gabung berkomunitas FA BPro.
                                </p>
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

                    <!-- single testimony  -->
                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Holi.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Holi</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Academic Support</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Event BPro FA Gathering di UTC beneran berkesan, karena bisa merasakan kebersamaan meski banyak yang teman baru kenal saat itu, acara asyik dan seru. </p>
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

                    <!-- single testimony  -->
                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Listya.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Listya</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Sales Marketing</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Aku suka pelayanan di choir, karena aku suka mengekspresikan hatiku  menyembah Tuhan dengan gerakan.</p>
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

                    <!-- single testimony  -->
                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Nelfin.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Nelfin Lumenta</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">PPIC</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Di FA BPro, aku belajar karakter sabar dan legowo, artinya mau menerima sesama saudara kita apa adanya. Dan disana kita belajar saling support dan bertumbuh bersama.</p>
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

                    <!-- single testimony  -->
                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Santi.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Santi</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Manufacturing Marketing</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Aku ikut FA BPro karena ingin punya komunitas yang lebih kecil, agar lebih dekat dengan teman, bisa sharing, bisa latihan nyanyi bareng juga.</p>
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

                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Sekar.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Rr. Nirta Sekar Dhewanti</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]"></h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Kesan pertama kamu tentang Bpro Senang...banyak teman, banyak pengetahuan.</p>
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

                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Tabita.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Tabita Christian</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Bank Teller</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Kalo diulang 5x pun, aku bakalan ga bosen ikut ibadah BPro Worship Night. Karena punya waktu yg lebih lama untuk menyembah dan merasakan hadirat Tuhan bersama-sama.</p>
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

                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Vina.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Vina</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Pharmacist</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Kalo diulang 5x pun, aku bakalan ga bosen ikut ibadah BPro Worship Night. Karena punya waktu yg lebih lama untuk menyembah dan merasakan hadirat Tuhan bersama-sama.</p>
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

                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Yeremia.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Yeremia</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Intrapreneur</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Tiga kata tentang pelayanan di BPro: Pelayanan itu fun! Pelayanan itu komitmen! Pelayanan itu panggilan!</p>
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

                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Yohan.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Yohan</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Entrepreneur</h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Bisa sharing semua hal, ga melulu masalah kerohanian, tapi juga cerita pribadi. Terus juga bisa berbagi suka dan duka. Itulah kenapa aku harus ikut FA BPro.</p>
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

                    <div class="swiper-slide">
                        <div class="et-testimony relative p-[40px] lg:p-[30px] md:p-[20px] border border-[#D4DCED] rounded-[16px] mt-[60px]">
                            <!-- single testimony heading -->
                            <div class="et-testimony__heading flex items-end justify-center mb-[17px] lg:mb-[12px] -mt-[100px] md:-mt-[80px]">
                                <div class="et-testimony__img rounded-full overflow-hidden border border-etBlue p-[7px] w-max max-w-full">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Yulius.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Yulius Gunawan</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Personal Assistant </h6>
                                <p class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Aku pelayanan di Singer, Wardrobe dan Sosial Media. Pelayanan bakalan asik semua selama melayani dengan hati buat Tuhan. Aku bisa banyak belajar dari segi teknik vocal, penataan panggung, wardrobe dan belajar menyenangkan hati Tuhan dengan tulus.</p>
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