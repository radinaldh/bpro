<?php

/**
 * Template Name: About Template
 */

get_header('main');
?>

<style>

    .uproinhim {
        font-size: 20px;
    }
    @media(max-width:500px) {
        .et-section-sub-title::before {
            display: none;
        }

        .uproinhim {
            font-size: 15px;
        }   

        .et-section-sub-title {
            font-size: 12px;
            padding: 0;
        }
    }
</style>
<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">About Bethany Professional
        </h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px] sm:text-[12px]">
            <li class="opacity-80"><a href="<?= home_url()?>/" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">About Bethany Professional</li>
        </ul>
    </div>
</section>

<section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative">
    <div
        class="container mx-auto max-w-[calc(100%-39.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <div
            class="flex items-center md:flex-wrap gap-x-[60px] xxl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[40px] lg:justify-center">
            <!-- left -->
            <div class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full mr-[70px] md:mr-0 ml-[28px] xxxl:ml-[47px] md:ml-0 xs:w-[70%] xxs:w-[90%] sm:ml-0">
                <img src="<?= get_template_directory_uri()?>/assets/img/about-img.jpg" alt="image" class="shrink-0 rounded-[10px]" />
                <img src="<?= get_template_directory_uri()?>/assets/img/about-img-3.jpg" alt="image" class="et-about-floating-img absolute top-[45px] -right-[70px] shrink-0 rounded-[20px] border-white border-[10px] xs:hidden" />
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
                <div class="absolute bottom-[50px] -left-[47px] lg:-left-[27px] md:-left-[47px] w-[180px] lg:w-[160px] aspect-square bg-[url('assets/img/about-video-btn-bg.jpg')] text-center text-[22px] text-white z-[1] flex items-center justify-center before:absolute before:bg-etBlue/80 before:-z-[1] before:inset-0 after:bg-etBlack after:w-[47px] after:h-[30px] after:absolute after:top-[100%] after:left-0 after:-z-[2] after:skew-y-[30deg] after:-translate-y-[17px] sm:hidden">
                    <!-- <a href="https://www.youtube.com/watch?v=AQleI8oFqZo&amp;t=1s" data-fslightbox="about-video"
                        class="w-[107px] aspect-square rounded-full border border-white/20 flex justify-center items-center text-etBlue relative z-[1] text-[18px] before:absolute before:w-[56px] before:h-[56px] before:bg-white before:rounded-full before:-z-[1] hover:text-black"><i
                            class="fa-solid fa-play"></i></a> -->
                </div>
            </div>

            <!-- right -->
            <div class="et-about__txt">
                <div class="rev-slide-up">
                    <!-- txt -->
                    <div class="my-[30px] sm:my-[20px]">
                        <h6 class="et-section-sub-title anim-text">BPro at a Glance </h6>
                            <p class="my-[10px] text-[15px] sm:text-[12px]" style="text-align: justify;">Shalom profesional muda, <br /><br />
                            Kami percaya bahwa setiap manusia, sebagai makhluk sosial, membutuhkan sebuah komunitas
                            dalam keseharian hidup mereka. Dan sejatinya, komunitas itu akan menjadi sebuah tempat
                            dimana mereka bisa menjadi diri sendiri, saling membangun, saling support, dan saling
                            memberkati satu sama lain.

                            <br /><br />

                            Dengan semangat inilah, kami ada.
                            Komunitas Bethany Professional, atau bisa juga disebut, BPro.

                            <br /><br />

                            Adalah sebuah visi dan kerinduan kami untuk menjadi sebuah komunitas profesional muda yang
                            cinta Tuhan, yang diberkati untuk memberkati.

                            <br /><br />

                            Dalam komunitas BPro, kamu akan menemukan berbagai kegiatan positif, yang tentunya akan
                            related dengan kebutuhan para profesional muda. Mulai dari komunitas yang asik, sharing
                            session yang membangun, wadah untuk belajar memimpin sekaligus melayani, hingga agenda
                            seminar dan workshop untuk memperlengkapi kita semua.

                            <br /><br />

                            Disini, karakter dan skill diasah untuk bertumbuh. Untuk menjadi cakap dan tangguh. Untuk
                            menjadi garam dan terang. Untuk mewarnai dan menjadi berkat di dunia marketplace yang sudah
                            Tuhan percayakan untuk dikelola melalui tangan kita.
                            <br /><br />

                            Saat ini, kami dengan penuh sukacita menyambutmu untuk dapat mengenal komunitas BPro dengan
                            lebih dekat. Mari bergabung menjadi bagian dari BPro. Bersama-sama mengeksplorasi dan
                            mengalami kekuatan komunitas yang membangun di tengah dunia profesional yang dinamis.
                            <br /><br />

                            Selamat datang di BPro. Tuhan Yesus memberkati.
                            <br /><br />
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

<!-- HISTORY SECTION START -->
<section
    class="bg-[#001B52] relative z-[1] before:absolute before:inset-0 before:-z-[1] before:bg-[url('assets/img/history-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:mix-blend-screen before:opacity-25 py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <!-- heading -->
        <div
            class="et-upcoming-events-heading text-center max-w-[60%] mx-auto mb-[52px] xl:mb-[42px] lg:mb-[32px] md:max-w-[70%] sm:max-w-[80%] xs:max-w-full">
            <h6 class="et-section-sub-title !text-white">Bethany Professional Vision and Value</h6>
            <h2 class="text-[35px] sm:text-[24px] !text-white">Growing Together in Grace and Purpose</h2>
        </div>

        <!-- main slider -->
        <div class="et-history-slider swiper ">
            <div class="swiper-wrapper">
                <!-- single timeline -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-[30px]">
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/history-img.jpg"
                                alt="History image" class="w-full h-full object-cover">
                        </div>

                        <div class="bg-white rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px] sm:text-[20px]" style="color:#1260FE">Vision Bethany Professional</h5>

                            <div class="txt mb-[40px]">
                                <p class="my-[10px] text-[15px] sm:text-[12px]" style="text-align: justify;">Menjadi Komunitas Profesional Muda yang cinta Tuhan dan
                                    diberkati untuk memberkati.</p>
                            </div>

                            <h5 class="text-[24px] font-normal mb-[13px] sm:text-[20px]" style="color:#1260FE">Value Bethany Professional</h5>

                            <h2 class="et-section-title mb-[24px] md:mb-[19px] anim-text uproinhim"><i>U
                                    PRO IN HIM</i></h2>
                            <p class="my-[10px] text-[15px] sm:text-[12px]" style="text-align: justify;"><i>Unity</i> (memelihara kesatuan dan saling mendukung
                                dimanapun kita berada)</p>
                            <p class="my-[10px] text-[15px] sm:text-[12px]" style="text-align: justify;"><i>Professional</i> (menjadi spesialis yang terdidik,
                                berkualitas, dan tidak murahan dalam bidang yang Tuhan percayakan)</p>
                            <p class="my-[10px] text-[15px] sm:text-[12px]" style="text-align: justify;"><i>Integrity</i> (memiliki keteguhan hati, selalu
                                konsisten, memiliki sikap yang sama ketika ada yang memperhatikan maupun saat tidak ada
                                yang memperhatikan)</p>
                            <p class="my-[10px] text-[15px] sm:text-[12px]" style="text-align: justify;"><i>Humility</i> (memiliki sifat tingkah laku yang rendah
                                hati dalam setiap kondisi)</p>
                            <p class="my-[10px] text-[15px] sm:text-[12px]" style="text-align: justify;"><i>Impact</i> (menjadi dampak, role model, membuat
                                perbedaan dan memberi pengaruh yang positif dimanapun kita berada)</p>

                            <div
                                class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center">
                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/logo-color.png"
                                        alt="signature" class="w-[100px]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- HISTORY SECTION END -->

<?php
get_footer('main');