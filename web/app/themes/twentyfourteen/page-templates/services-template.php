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

    @media(max-width:600px) {
        .mySwiper2 {
            height: auto;
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
    </div>
</div>
<section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative">
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
<section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative" style="
    background: rgb(0 27 82);
">
    <div
        class="container mx-auto max-w-[calc(100%-39.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <div
            class="flex items-center md:flex-wrap gap-x-[60px] xxl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[0px] lg:justify-center">
            <!-- left -->
            <div
                class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full mr-[70px] md:mr-0 ml-[28px] xxxl:ml-[47px] md:ml-0 xs:w-[70%] xxs:w-full ">
                <img src="<?= get_template_directory_uri()?>/assets/img/services4.png" alt="image"
                    class="shrink-0 rounded-[10px]" />
                <img src="<?= get_template_directory_uri()?>/assets/img/services3.png" alt="image"
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
            <div class="et-about__txt w-full">
                <div class="rev-slide-up">
                    <!-- txt -->
                    <div class="my-[30px]">
                        <h6 class="et-section-sub-title anim-text text-white" style="color: #fff;">Services BPro</h6>
                        <h2 class="et-section-title mb-[24px] md:mb-[19px] anim-text text-white"
                            style="font-size: 25px;color: #fff;">BPro – Other Services</h2>
                        <div class="my-[10px] text-[15px] sm:text-[12px] text-white" style="text-align: justify;">
                            <ul class="text-white" style="
    list-style: circle;
    padding-left: 18px;
">
                                <li>Baptisan</li>
                                <li>Pemberkatan Nikah</li>
                                <li>Penyerahan Anak</li>
                                <li>Kedukaan</li>
                            </ul>
                            <br><br>
                            Info & Registrasi:<br>
                            Bethany Nginden – (+6231) 5936880<br>
                            info@gerejabethany.org


                        </div>
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
<style>
    h6.et-section-sub-title.anim-text.text-white:before {
        background-color: #fff;
    }
</style>
<?php
get_footer('main');