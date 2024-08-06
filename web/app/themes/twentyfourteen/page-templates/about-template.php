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

    .explain {
        width: 50%;
        margin: auto;
    }
    @media(max-width:500px) {
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
    }
</style>
<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">About Bethany Professional
        </h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px]">
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
            class="flex items-center md:flex-wrap gap-x-[60px] xxl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[0px] lg:justify-center">
            <!-- left -->
            <div class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full mr-[70px] md:mr-0 ml-[28px] xxxl:ml-[47px] md:ml-0 xs:w-[70%] xxs:w-[90%] sm:ml-0">
                <img src="<?= get_template_directory_uri()?>/assets/new-img/5.jpg" style="width: 350px; height: 500px; object-fit: cover;" alt="image" class="shrink-0 rounded-[10px]" />
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
                        class="w-[107px] aspect-square rounded-full border border-white/20 flex justify-center items-center text-etBlue relative z-[1] text-[18px] before:absolute before:w-[56px] before:h-[56px] before:explain bg-white h-[500px] relative before:rounded-full before:-z-[1] hover:text-black"><i
                            class="fa-solid fa-play"></i></a> -->
                </div>
            </div>

            <!-- right -->
            <div class="et-about__txt">
                <div class="rev-slide-up">
                    <!-- txt -->
                    <div class="my-[30px] sm:my-[20px]">
                        <h6 class="et-section-sub-title anim-text">BPro at a Glance </h6>
                            <p class="my-[10px] text-[15px]" style="text-align: justify;">Shalom profesional muda, <br /><br />
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
<section class="bg-[#001B52] relative z-[1] before:absolute before:inset-0 before:-z-[1] before:bg-[url('assets/img/history-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:mix-blend-screen before:opacity-25 py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <!-- heading -->
        <div class="et-upcoming-events-heading text-center max-w-[60%] mx-auto md:max-w-[70%] sm:max-w-[80%] xs:max-w-full">
            <h6 class="et-section-sub-title !text-white">Bethany Professional Vision and Value</h6>
        </div>

        <div class="vision mb-[40px] mt-[40px]">
            <h2 class="text-[35px] sm:text-[24px] !text-white text-center">Vision Bethany Professional</h2>
            <div class="txt mb-[40px]" style="max-width: 80%; margin: 20px auto;">
                <p class="my-[10px] text-[15px] text-white text-center" >Menjadi Komunitas Profesional Muda yang cinta Tuhan dan
                    diberkati untuk memberkati.</p>
                <p class="my-[10px] text-[15px] text-white text-center" >Aku akan membuat engkau menjadi bangsa yang besar, dan memberkati engkau serta membuat namamu masyhur; dan engkau akan menjadi berkat. <i>Kej 12:2</i></p>
            </div>
        </div>
        <div class="vision mb-[40px]">
            <h2 class="text-[35px] sm:text-[24px] !text-white text-center">Value Bethany Professional</h2>
        </div>


        <!-- main slider -->
        <div class="et-history-slider swiper ">
            <div class="et-history-timeline-slider swiper my-[40px] lg:mt-[25px] border-t border-[rgba(217,217,217,0.2)]">
                <div class="swiper-wrapper justify-center">
                    <!-- single timeline -->
                    <div class="et-history-timeline mb-[40px] swiper-slide py-[30px] relative cursor-pointer">
                        <div>
                            <h3 class="font-semibold text-[30px] leading-[0.8] text-transparent"><span>U</span>nity</h3>
                        </div>
                    </div>
                    <div class="et-history-timeline swiper-slide py-[30px] relative cursor-pointer">
                        <div>
                            <h3 class="font-semibold text-[30px] leading-[0.8] text-transparent"><span>Pro</span>fessional</h3>
                        </div>
                    </div>
                    <!-- single timeline -->
                    <div class="et-history-timeline swiper-slide py-[30px] relative cursor-pointer">
                        <div>
                            <h3 class="font-semibold text-[30px] leading-[0.8] text-transparent"><span>In</span>tegrity</h3>
                        </div>
                    </div>
                    <div class="et-history-timeline swiper-slide py-[30px] relative cursor-pointer">
                        <div>
                            <h3 class="font-semibold text-[30px] leading-[0.8] text-transparent"><span>H</span>umility</h3>
                        </div>
                    </div>
                    <div class="et-history-timeline swiper-slide py-[30px] relative cursor-pointer">
                        <div>
                            <h3 class="font-semibold text-[30px] leading-[0.8] text-transparent"><span>Im</span>pact</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-wrapper">
                <!-- single timeline -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 gap-[30px]">
                        <div class="explain bg-white h-[350px] xxs:h-[500px] relative rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px] sm:text-[20px]" style="color:#1260FE">Unity</h5>

                            <div class="txt mb-[40px]">
                                <p class="my-[10px] text-[15px]" style="text-align: justify;">Memelihara kesatuan dan saling mendukung dimanapun kita berada</p>
                                <p class="my-[10px] text-[15px]" style="text-align: justify;">Demikian juga kita, walaupun banyak, adalah satu tubuh di dalam KRISTUS; tetapi kita masing-masing adalah anggota yang seorang terhadap yang lain. <i>Roma 12: 15</i></p>
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
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 gap-[30px]">
                        <div class="explain bg-white h-[350px] xxs:h-[500px] relative rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px] sm:text-[20px]" style="color:#1260FE">Professional</h5>

                            <div class="txt mb-[40px]">
                                <p class="my-[10px] text-[15px]" style="text-align: justify;">Menjadi spesialis yang terdidik, berkualitas, dan tidak murahan dalam bidang yang Tuhan percayakan</p>
                                <p class="my-[10px] text-[15px]" style="text-align: justify;">Pernahkah engkau melihat orang yang cakap dalam pekerjaannya? Di hadapan raja-raja ia akan berdiri, bukan di hadapan orang-orang yang hina. <i>Amsal 22:29</i></p>
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
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 gap-[30px]">
                        <div class="explain bg-white h-[350px] xxs:h-[500px] relative rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px] sm:text-[20px]" style="color:#1260FE">Integrity</h5>

                            <p class="my-[10px] text-[15px]" style="text-align: justify;">Memiliki keteguhan hati, selalu konsisten, memiliki sikap yang sama ketika ada yang memperhatikan maupun saat tidak ada yang memperhatikan </p>
                            <p class="my-[10px] text-[15px]" style="text-align: justify;">Apa pun juga yang kamu perbuat, perbuatlah dengan segenap hatimu seperti untuk Tuhan dan bukan untuk manusia. Kamu tahu, bahwa dari Tuhanlah kamu akan menerima bagian yang ditentukan bagimu sebagai upah. Kristus adalah tuan dan kamu hamba-Nya. <i>Kolose 3:23-24</i></p>
                        
                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center absolute bottom-0">
                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/logo-color.png"
                                        alt="signature" class="w-[100px]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 gap-[30px]">
                        <div class="explain bg-white h-[350px] xxs:h-[500px] relative rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px] sm:text-[20px]" style="color:#1260FE">Humility</h5>

                            <p class="my-[10px] text-[15px]" style="text-align: justify;">Memiliki sifat tingkah laku yang rendah hati dalam setiap kondisi</p>
                            <p class="my-[10px] text-[15px]" style="text-align: justify;">Ganjaran kerendahan hati dan takut akan TUHAN adalah kekayaan, kehormatan dan kehidupan <i>Amsal 22:4</i></p>
                        
                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center absolute bottom-0">
                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/logo-color.png"
                                        alt="signature" class="w-[100px]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 gap-[30px]">
                        <div class="explain bg-white h-[350px] xxs:h-[500px] relative rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px] sm:text-[20px]" style="color:#1260FE">Impact</h5>

                            <p class="my-[10px] text-[15px]" style="text-align: justify;">Menjadi dampak, role model, membuat perbedaan dan memberi pengaruh yang positif dimanapun kita berada</p>
                            <p class="my-[10px] text-[15px]" style="text-align: justify;">Demikianlah hendaknya terangmu bercahaya di depan orang, supaya mereka melihat perbuatanmu yang baik dan memuliakan Bapamu yang di sorga <i>Matius 5:16</i></p>
                        
                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center absolute bottom-0">
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