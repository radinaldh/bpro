<?php

/**
 * Template Name: About Template
 */

get_header('main');
?>

<section class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] xs:text-[45px]">About Bethany</h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px]">
            <li class="opacity-80"><a href="index-2.html" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">About Bethany</li>
        </ul>
    </div>
</section>

<section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative">
    <div class="container mx-auto max-w-[calc(100%-39.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <div class="flex items-center md:flex-wrap gap-x-[60px] xxl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[40px] lg:justify-center">
            <!-- left -->
            <div class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full mr-[70px] md:mr-0 ml-[28px] xxxl:ml-[47px] md:ml-0 xs:w-[70%] xxs:w-[90%] xxs:ml-[47px]">
                <img src="<?= get_template_directory_uri()?>/assets/img/about-img.jpg" alt="image" class="shrink-0 rounded-[10px]" />
                <img src="<?= get_template_directory_uri()?>/assets/img/about-img-3.jpg" alt="image" class="et-about-floating-img absolute top-[45px] -right-[70px] shrink-0 rounded-[20px] border-white border-[10px] xs:hidden" />

                <!-- vectors -->
                <div class="et-about-vectors xs:hidden">
                    <img src="<?= get_template_directory_uri()?>/assets/img/about-img-vector-1.png" alt="vector" class="et-about-vector-1 absolute -left-[47px] top-[20px] -z-[1]" />
                    <img src="<?= get_template_directory_uri()?>/assets/img/about-img-vector-2.png" alt="vector" class="et-about-vector-2 absolute -left-[27px] top-[41px] -z-[1]" />
                    <img src="<?= get_template_directory_uri()?>/assets/img/about-img-vector-3.png" alt="vector" class="et-about-vector absolute -right-[24px] bottom-[34px] -z-[1]" />
                </div>

                <!-- video btn -->
                <div class="absolute bottom-[50px] -left-[47px] lg:-left-[27px] md:-left-[47px] w-[180px] lg:w-[160px] aspect-square bg-[url('assets/img/about-video-btn-bg.jpg')] text-center text-[22px] text-white z-[1] flex items-center justify-center before:absolute before:bg-etBlue/80 before:-z-[1] before:inset-0 after:bg-etBlack after:w-[47px] after:h-[30px] after:absolute after:top-[100%] after:left-0 after:-z-[2] after:skew-y-[30deg] after:-translate-y-[17px]">
                    <a href="https://www.youtube.com/watch?v=AQleI8oFqZo&amp;t=1s" data-fslightbox="about-video" class="w-[107px] aspect-square rounded-full border border-white/20 flex justify-center items-center text-etBlue relative z-[1] text-[18px] before:absolute before:w-[56px] before:h-[56px] before:bg-white before:rounded-full before:-z-[1] hover:text-black"><i class="fa-solid fa-play"></i></a>
                </div>
            </div>

            <!-- right -->
            <div class="et-about__txt">
                <h6 class="et-section-sub-title anim-text">Vision Bethany</h6>
                <h2 class="et-section-title mb-[24px] md:mb-[19px] anim-text" style="font-size: 25px;">Menjadi Komunitas Profesional Muda yang cinta Tuhan dan diberkati untuk memberkati.</h2>

                <div class="rev-slide-up">
                    <!-- txt -->
                    <div class="my-[30px]">
                        <h6 class="et-section-sub-title anim-text">Value Bethany</h6>
                        <h2 class="et-section-title mb-[24px] md:mb-[19px] anim-text" style="font-size: 25px;">U PRO IN HIM</h2>
                        <p class="my-[10px] text-[15px]"><i>Unity</i> (memelihara kesatuan dan saling mendukung dimanapun kita berada)</p>
                        <p class="my-[10px] text-[15px]"><i>Professional</i> (menjadi spesialis yang terdidik, berkualitas, dan tidak murahan dalam bidang yang Tuhan percayakan)</p>
                        <p class="my-[10px] text-[15px]"><i>Integrity</i> (memiliki keteguhan hati, selalu konsisten, memiliki sikap yang sama ketika ada yang memperhatikan maupun saat tidak ada yang memperhatikan)</p>
                        <p class="my-[10px] text-[15px]"><i>Humility</i> (memiliki sifat tingkah laku yang rendah hati dalam setiap kondisi)</p>
                        <p class="my-[10px] text-[15px]"><i>Impact</i> (menjadi dampak, role model, membuat perbedaan dan memberi pengaruh yang positif dimanapun kita berada)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- vectors -->
    <div class="xs:hidden">
        <img src="<?= get_template_directory_uri()?>/assets/img/about-vector-1.png" alt="vector" class="pointer-events-none absolute top-[340px] left-[90px] -z-[1]">
        <img src="<?= get_template_directory_uri()?>/assets/img/about-vector-2.png" alt="vector" class="pointer-events-none absolute top-[153px] right-0 -z-[1]">
    </div>
</section>

<!-- HISTORY SECTION START -->
<section class="bg-[#001B52] relative z-[1] before:absolute before:inset-0 before:-z-[1] before:bg-[url('assets/img/history-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:mix-blend-screen before:opacity-25 py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <!-- heading -->
        <div class="et-upcoming-events-heading text-center max-w-[60%] mx-auto mb-[52px] xl:mb-[42px] lg:mb-[32px] md:max-w-[70%] sm:max-w-[80%] xs:max-w-full">
            <h6 class="et-section-sub-title !text-white">Bethany Professional</h6>
            <h2 class="et-section-title !text-white">Our Bethany Internasal Design Conferences History</h2>
        </div>

        <!-- main slider -->
        <div class="et-history-slider swiper ">
            <div class="swiper-wrapper">
                <!-- single timeline -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-[30px]">
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/history-img.jpg" alt="History image" class="w-full h-full object-cover">
                        </div>

                        <div class="bg-white rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px]">Welcome to Bethany</h5>

                            <div class="txt mb-[40px]">
                                <p class="font-light text-[16px] text-etGray mb-[12px]">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.  where melodies transcend boundaries. Immerse in</p>
                                <p class="font-light text-[16px] text-etGray">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.</p>
                            </div>

                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center">
                                <!-- founder -->
                                <div class="flex items-center gap-x-[15px] border-r xxs:border-r-0 xxs:border-b border-[#d9d9d9] pr-[40px] lg:pr-[20px] xxs:pr-0 xxs:pb-[15px]">
                                    <div class="img rounded-full overflow-hidden w-[65px] h-[65px] shrink-0">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/user.jpg" alt="founder image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="font-semibold text-[20px] text-etBlack mb-[2px]">Alexsia Jorgina</h5>
                                        <span class="text-[15px] font-normal text-etGray">Co. Founder</span>
                                    </div>
                                </div>

                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/signature.png" alt="signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-[30px]">
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/history-img.jpg" alt="History image" class="w-full h-full object-cover">
                        </div>

                        <div class="bg-white rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px]">Welcome to Bethany</h5>

                            <div class="txt mb-[40px]">
                                <p class="font-light text-[16px] text-etGray mb-[12px]">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.  where melodies transcend boundaries. Immerse in</p>
                                <p class="font-light text-[16px] text-etGray">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.</p>
                            </div>

                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center">
                                <!-- founder -->
                                <div class="flex items-center gap-x-[15px] border-r xxs:border-r-0 xxs:border-b border-[#d9d9d9] pr-[40px] lg:pr-[20px] xxs:pr-0 xxs:pb-[15px]">
                                    <div class="img rounded-full overflow-hidden w-[65px] h-[65px] shrink-0">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/user.jpg" alt="founder image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="font-semibold text-[20px] text-etBlack mb-[2px]">Alexsia Jorgina</h5>
                                        <span class="text-[15px] font-normal text-etGray">Co. Founder</span>
                                    </div>
                                </div>

                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/signature.png" alt="signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-[30px]">
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/history-img.jpg" alt="History image" class="w-full h-full object-cover">
                        </div>

                        <div class="bg-white rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px]">Welcome to Bethany</h5>

                            <div class="txt mb-[40px]">
                                <p class="font-light text-[16px] text-etGray mb-[12px]">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.  where melodies transcend boundaries. Immerse in</p>
                                <p class="font-light text-[16px] text-etGray">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.</p>
                            </div>

                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center">
                                <!-- founder -->
                                <div class="flex items-center gap-x-[15px] border-r xxs:border-r-0 xxs:border-b border-[#d9d9d9] pr-[40px] lg:pr-[20px] xxs:pr-0 xxs:pb-[15px]">
                                    <div class="img rounded-full overflow-hidden w-[65px] h-[65px] shrink-0">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/user.jpg" alt="founder image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="font-semibold text-[20px] text-etBlack mb-[2px]">Alexsia Jorgina</h5>
                                        <span class="text-[15px] font-normal text-etGray">Co. Founder</span>
                                    </div>
                                </div>

                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/signature.png" alt="signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-[30px]">
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/history-img.jpg" alt="History image" class="w-full h-full object-cover">
                        </div>

                        <div class="bg-white rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px]">Welcome to Bethany</h5>

                            <div class="txt mb-[40px]">
                                <p class="font-light text-[16px] text-etGray mb-[12px]">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.  where melodies transcend boundaries. Immerse in</p>
                                <p class="font-light text-[16px] text-etGray">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.</p>
                            </div>

                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center">
                                <!-- founder -->
                                <div class="flex items-center gap-x-[15px] border-r xxs:border-r-0 xxs:border-b border-[#d9d9d9] pr-[40px] lg:pr-[20px] xxs:pr-0 xxs:pb-[15px]">
                                    <div class="img rounded-full overflow-hidden w-[65px] h-[65px] shrink-0">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/user.jpg" alt="founder image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="font-semibold text-[20px] text-etBlack mb-[2px]">Alexsia Jorgina</h5>
                                        <span class="text-[15px] font-normal text-etGray">Co. Founder</span>
                                    </div>
                                </div>

                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/signature.png" alt="signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-[30px]">
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/history-img.jpg" alt="History image" class="w-full h-full object-cover">
                        </div>

                        <div class="bg-white rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px]">Welcome to Bethany</h5>

                            <div class="txt mb-[40px]">
                                <p class="font-light text-[16px] text-etGray mb-[12px]">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.  where melodies transcend boundaries. Immerse in</p>
                                <p class="font-light text-[16px] text-etGray">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.</p>
                            </div>

                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center">
                                <!-- founder -->
                                <div class="flex items-center gap-x-[15px] border-r xxs:border-r-0 xxs:border-b border-[#d9d9d9] pr-[40px] lg:pr-[20px] xxs:pr-0 xxs:pb-[15px]">
                                    <div class="img rounded-full overflow-hidden w-[65px] h-[65px] shrink-0">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/user.jpg" alt="founder image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="font-semibold text-[20px] text-etBlack mb-[2px]">Alexsia Jorgina</h5>
                                        <span class="text-[15px] font-normal text-etGray">Co. Founder</span>
                                    </div>
                                </div>

                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/signature.png" alt="signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-[30px]">
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/history-img.jpg" alt="History image" class="w-full h-full object-cover">
                        </div>

                        <div class="bg-white rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px]">Welcome to Bethany</h5>

                            <div class="txt mb-[40px]">
                                <p class="font-light text-[16px] text-etGray mb-[12px]">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.  where melodies transcend boundaries. Immerse in</p>
                                <p class="font-light text-[16px] text-etGray">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.</p>
                            </div>

                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center">
                                <!-- founder -->
                                <div class="flex items-center gap-x-[15px] border-r xxs:border-r-0 xxs:border-b border-[#d9d9d9] pr-[40px] lg:pr-[20px] xxs:pr-0 xxs:pb-[15px]">
                                    <div class="img rounded-full overflow-hidden w-[65px] h-[65px] shrink-0">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/user.jpg" alt="founder image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="font-semibold text-[20px] text-etBlack mb-[2px]">Alexsia Jorgina</h5>
                                        <span class="text-[15px] font-normal text-etGray">Co. Founder</span>
                                    </div>
                                </div>

                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/signature.png" alt="signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-[30px]">
                        <div class="rounded-[20px] overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/history-img.jpg" alt="History image" class="w-full h-full object-cover">
                        </div>

                        <div class="bg-white rounded-[20px] px-[30px] py-[20px] xxs:px-[20px]">
                            <h5 class="text-[24px] font-normal mb-[13px]">Welcome to Bethany</h5>

                            <div class="txt mb-[40px]">
                                <p class="font-light text-[16px] text-etGray mb-[12px]">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.  where melodies transcend boundaries. Immerse in</p>
                                <p class="font-light text-[16px] text-etGray">Experience Harmonia: where melodies transcend boundaries. Immerse in captiva performances that ignite the stage. Unleash your musical senses and embrace rhyth mic bliss.</p>
                            </div>

                            <div class="flex flex-wrap gap-x-[40px] lg:gap-x-[20px] gap-y-[15px] items-center xxs:justify-center">
                                <!-- founder -->
                                <div class="flex items-center gap-x-[15px] border-r xxs:border-r-0 xxs:border-b border-[#d9d9d9] pr-[40px] lg:pr-[20px] xxs:pr-0 xxs:pb-[15px]">
                                    <div class="img rounded-full overflow-hidden w-[65px] h-[65px] shrink-0">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/user.jpg" alt="founder image">
                                    </div>

                                    <div class="txt">
                                        <h5 class="font-semibold text-[20px] text-etBlack mb-[2px]">Alexsia Jorgina</h5>
                                        <span class="text-[15px] font-normal text-etGray">Co. Founder</span>
                                    </div>
                                </div>

                                <!-- signature -->
                                <div>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/signature.png" alt="signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- timeline slider as nav for main slider -->
        <div class="et-history-timeline-slider swiper mt-[30px] lg:mt-[25px] border-t border-[rgba(217,217,217,0.2)]">
            <div class="swiper-wrapper">
                <!-- single timeline -->
                <div class="et-history-timeline swiper-slide pt-[54px] lg:pt-[34px] relative cursor-pointer">
                    <div>
                        <h3 class="font-semibold text-[70px] md:text-[60px] sm:text-[50px] leading-[0.8] text-transparent">1985</h3>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="et-history-timeline swiper-slide pt-[54px] lg:pt-[34px] relative cursor-pointer">
                    <div>
                        <h3 class="font-semibold text-[70px] md:text-[60px] sm:text-[50px] leading-[0.8] text-transparent">1995</h3>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="et-history-timeline swiper-slide pt-[54px] lg:pt-[34px] relative cursor-pointer">
                    <div>
                        <h3 class="font-semibold text-[70px] md:text-[60px] sm:text-[50px] leading-[0.8] text-transparent">2005</h3>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="et-history-timeline swiper-slide pt-[54px] lg:pt-[34px] relative cursor-pointer">
                    <div>
                        <h3 class="font-semibold text-[70px] md:text-[60px] sm:text-[50px] leading-[0.8] text-transparent">2015</h3>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="et-history-timeline swiper-slide pt-[54px] lg:pt-[34px] relative cursor-pointer">
                    <div>
                        <h3 class="font-semibold text-[70px] md:text-[60px] sm:text-[50px] leading-[0.8] text-transparent">2020</h3>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="et-history-timeline swiper-slide pt-[54px] lg:pt-[34px] relative cursor-pointer">
                    <div>
                        <h3 class="font-semibold text-[70px] md:text-[60px] sm:text-[50px] leading-[0.8] text-transparent">2023</h3>
                    </div>
                </div>
                <!-- single timeline -->
                <div class="et-history-timeline swiper-slide pt-[54px] lg:pt-[34px] relative cursor-pointer">
                    <div>
                        <h3 class="font-semibold text-[70px] md:text-[60px] sm:text-[50px] leading-[0.8] text-transparent">2024</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HISTORY SECTION END -->

<?php
get_footer('main');
