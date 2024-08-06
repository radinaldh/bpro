<?php

/**
 * Template Name: Family Altar Template
 */

get_header('main'); ?>

<style>
.single-fa {
    background-color: #fff;
    padding: 30px;
    margin: auto;
}

.right.test-right {
    display: none;
}

.fa-slider-mobile-only {
    display: none;
}

.filter-list-fa {
    background: #fff;
}

.et-tab {
    overflow: hidden;
}

.et-testimony img {
    object-fit: cover;
}

@media screen and (max-width: 600px) {
    .single-fa .et-schedule__heading {
        width: 100%;
    }

    .single-fa .et-btn {
        padding-left: 70px;
        padding-right: 70px;
    }

    .et-schedule-date-time {
        padding: 10px;
        width: 80%;
        justify-content: center;
        margin-bottom: 25px;
    }

    .et-schedule-date-time>*:not(:last-child)::before {
        content: "";
        position: absolute;
        left: calc(100% + 12px);
        top: 50%;
        transform: translateY(-50%);
        height: 21px;
        width: 1px;
        background-color: #D9D9D9;
    }

    .single-fa {
        background-color: #fff;
        padding: 30px 0px;
        margin: auto;
        text-align: center;
    }

    .et-schedule-loaction {
        justify-content: center;
    }

    .list-fa.desktop-only {
        display: none;
    }

    .fa-slider-mobile-only {
        display: block;
    }

    .fa-list.slick-initialized.slick-slider.slick-dotted {
        height: unset;
    }

    .slick-dots li button {
        background: #fff !important;
        border-radius: 100%;
        opacity: 0.5;
    }

    /* the slides */
    .slick-slide {
        margin: 0 30px;
    }

    /* the parent */
    .slick-list {
        margin: 0 -30px;
    }

    .slick-dots {
        bottom: -25px !important;
    }

    .et-events-tab-navs {
        flex-wrap: nowrap;
        overflow: scroll;
        gap: 10px;
        white-space: nowrap;
    }

    .filter-list-fa button {
        margin-bottom: 10px;
        padding-top: 10px;
    }

}
</style>

<!-- BREADCRUMB SECTION START -->
<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('<?= get_template_directory_uri(); ?>/assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">Family Altar BPro</h1>
        <p class="font-medium text-[15px] pb-[30px] sm:text-[12px] ">Kesatuan Hati - Tumbuh Bersama - Memenangkan Jiwa
        </p>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px]">
            <li class="opacity-80"><a href="index-2.html" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">Family Altar BPro</li>
        </ul>
    </div>
</section>
<!-- BREADCRUMB SECTION END -->


<section class="et-about py-[130px] xl:py-[80px] md:py-[60px] overflow-hidden relative">
    <div
        class="container mx-auto max-w-[calc(100%-39.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <div
            class="flex items-center md:flex-wrap gap-x-[60px] xxl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[0px] lg:justify-center">
            <!-- left -->
            <div
                class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full mr-[70px] md:mr-0 ml-[28px] xxxl:ml-[47px] md:ml-0 xs:w-[70%] xxs:w-[90%] ">
                <img src="<?= get_template_directory_uri()?>/assets/new-img/fa-bpro.png" alt="image"
                    class="shrink-0 rounded-[10px]" />
                <img src="<?= get_template_directory_uri()?>/assets/new-img/fa-bpro-2.png" alt="image"
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
                    class="absolute xxs:hidden bottom-[50px] -left-[47px] lg:-left-[27px] md:-left-[47px] w-[180px] lg:w-[160px] aspect-square bg-[url('assets/img/about-video-btn-bg.jpg')] text-center text-[22px] text-white z-[1] flex items-center justify-center before:absolute before:bg-etBlue/80 before:-z-[1] before:inset-0 after:bg-etBlue after:w-[47px] after:h-[30px] after:absolute after:top-[100%] after:left-0 after:-z-[2] after:skew-y-[30deg] after:-translate-y-[17px]">
                    <!-- <a href="https://www.youtube.com/watch?v=AQleI8oFqZo&amp;t=1s" data-fslightbox="about-video"
                        class="w-[107px] aspect-square rounded-full border border-white/20 flex justify-center items-center text-etBlue relative z-[1] text-[18px] before:absolute before:w-[56px] before:h-[56px] before:bg-white before:rounded-full before:-z-[1] hover:text-black"><i
                            class="fa-solid fa-play"></i></a> -->
                </div>
            </div>

            <!-- right -->
            <div class="et-about__txt">

                <div class="rev-slide-up">
                    <!-- txt -->
                    <div class="my-[30px]">
                        <h6 class="et-section-sub-title anim-text">FA at a Glance </h6>
                        <p class="my-[10px] text-[15px]" style="text-align:justify;">Kesatuan Hati – Tumbuh Bersama –
                            Memenangkan Jiwa <br /><br />

                            Kisah Para Rasul 2:46-47
                            <br>
                            Dengan bertekun dan dengan sehati mereka berkumpul tiap-tiap hari dalam Bait Allah. Mereka
                            memecahkan roti di rumah masing-masing secara bergilir dan makan bersama-sama dengan gembira
                            dan dengan tulus hati, sambil memuji Allah. Dan mereka disukai semua orang. Dan tiap-tiap
                            hari Tuhan menambah jumlah mereka dengan orang yang diselamatkan.

                            <br /><br />

                            “Sudah berjemaat di gereja. Sudah datang ke ibadah. Sudah cukuplah.”
                            Terkadang hal ini muncul dalam benak kita.


                            <br /><br />

                            Disadari atau tidak, setiap orang pasti mempunyai kebutuhan untuk bersosialisasi dengan
                            orang lain. Entah sekedar obrolan ringan, curhat, atau sampai tukar pikiran untuk hal yang
                            lebih serius. Setiap orang punya cerita hidup, dan setiap orang sejatinya – butuh bercerita.


                            <br /><br />

                            Dengan hanya sebatas berjemaat di gereja dan datang ke ibadah rutin saja, sepertinya tidak
                            akan cukup untuk menjawab kebutuhan yang disebutkan tadi. Maksudnya? Menjawab kebutuhan
                            bahwa kita perlu orang lain, kita perlu didengar, kita perlu diperhatikan.


                            <br /><br />

                            Itulah mengapa, kita butuh sebuah komunitas kecil. Komunitas yang bisa menerima kita apa
                            adanya, simpel, relevan, dan saling support. Disini, komunitas kecil ini kami sebut dengan
                            FA - Family Altar.

                            <br /><br />

                            FA akan menjadi wadah bagi kita untuk berkumpul, duduk dan ngobrol bareng, saling berbagi
                            cerita hidup, kesaksian dan prinsip kebenaran Firman. FA memberikan ruang untuk membangun
                            persahabatan, berbagi keterbukaan, saling mendoakan, dan saling terhubung satu sama lain.

                            <br /><br />

                            Melalui FA, kita dapat menemukan keluarga baru di dalam Tuhan. Keluarga yang bersatu hati,
                            bertumbuh bersama di dalam iman, karakter dan value kebenaran firman Tuhan. Keluarga yang
                            menjadi tempat belajar untuk saling melayani dan membawa orang lain untuk mendekat kepada
                            Kristus.
                            <br><br>
                            Di BPro, kami dengan tangan terbuka, mengundangmu untuk bergabung dalam kelompok FA yang ada
                            di sekitarmu. Come and join us!
                            <br><br>
                            Be Success, Be Professional.

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
    class="bg-[#001B52] relative z-[1] before:absolute before:inset-0 before:-z-[1] before:bg-[url('<?= get_template_directory_uri(); ?>/assets/img/history-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:mix-blend-screen before:opacity-25 py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <!-- heading -->
        <div
            class="et-upcoming-events-heading text-center max-w-[60%] mx-auto mb-[52px] xl:mb-[42px] lg:mb-[32px] md:max-w-[70%] sm:max-w-[80%] xs:max-w-full">
            <h6 class="et-section-sub-title !text-white">Join Us at FA BPro</h6>
            <h2 class=" !text-white text-[30px] sm:text-[24px]">List Of Every Family Altar Time Detail And
                Location</h2>
        </div>

        <div
            class="filter-list-fa flex lg:flex-wrap items-center justify-center lg:justify-center sm:justify-start gap-y-[15px] shadow-[0_4px_50px_rgba(0,0,0,0.07)] mb-[60px] rounded-full xxs:rounded-[30px] lg:py-[15px] px-[30px] pr-[6px] md:px-[20px] md:pr-[6px] py-[20px]">
            <div
                class="et-events-tab-navs w-[100%] lg:w-full align-center flex xs:flex-wrap shrink-0 lg:justify-center sm:justify-start gap-[45px] md:gap-[30px] xxs:gap-[20px] md:gap-y-[15px]">
                <button data-tab="et-event-tab0"
                    class="tab-nav border-r border-[#d9d9d9] text-[14px] font-medium text-etBlack pb-[45px] pr-[45px] pl-[10px] md:pr-[30px] xxs:pr-[20px] hover:text-etBlue group active">
                    <span class="group-[.active]:text-etBlue">All</span>
                </button>
                <button data-tab="et-event-tab1"
                    class="tab-nav border-r border-[#d9d9d9] text-[14px] font-medium text-etBlack pr-[45px] pl-[10px] md:pr-[30px] xxs:pr-[20px] hover:text-etBlue group">
                    <span class="group-[.active]:text-etBlue">SBY Timur</span>
                </button>
                <button data-tab="et-event-tab2"
                    class="tab-nav border-r border-[#d9d9d9] text-[14px] font-medium text-etBlack pr-[45px] pl-[10px] md:pr-[30px] xxs:pr-[20px] hover:text-etBlue group">
                    <span class="group-[.active]:text-etBlue">SBY Barat</span>
                </button>
                <button data-tab="et-event-tab3"
                    class="tab-nav border-r border-[#d9d9d9] text-[14px] font-medium text-etBlack pr-[45px] pl-[10px] md:pr-[30px] xxs:pr-[20px] hover:text-etBlue group">
                    <span class="group-[.active]:text-etBlue">SBY Pusat</span>
                </button>
                <button data-tab="et-event-tab4"
                    class="tab-nav border-r border-[#d9d9d9] text-[14px] font-medium text-etBlack pr-[45px] pl-[10px] md:pr-[30px] xxs:pr-[20px] hover:text-etBlue group">
                    <span class=" group-[.active]:text-etBlue">SBY Selatan</span>
                </button>
                <button data-tab="et-event-tab5"
                    class="tab-nav praise border-r border-[#d9d9d9] text-[14px] font-medium text-etBlack pr-[45px] pl-[10px] md:pr-[30px] xxs:pr-[20px] hover:text-etBlue group"><span
                        class=" group-[.active]:text-etBlue">Other</span>
                </button>
            </div>
        </div>

        <div class="fa-slider-mobile-only">
            <!-- TESTING -->
            <div id="et-event-tab0" class="et-tab lcl_elems_wrapper active">
                <div class="fa-list">
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA WIYUNG </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Taman Pondok Indah,
                                        Wiyung, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/JzMbMYqYZ42yWh3b7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGAGEL </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Ngagel Madya
                                        Utara,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGAGLIK </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Ploso Bogen,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA PUSAT</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGINDEN INTAN </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Nginden Intan
                                        Timur,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA GUNUNGSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Wonokitri,
                                        Surabaya
                                    </h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA RUNGKUT </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Rungkut
                                        Menanggal
                                        Harapan, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA JEMURSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Jemur Wonosari,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA ARIF RAHMAN H. </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Arif Rahman
                                        Hakim,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">20.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MENGANTI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Puri Safira
                                        Regency,
                                        Menganti</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA BARAT</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MANYAR REJO </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Manyar Rejo,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MANYAR JAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Manyar Jaya,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA BARATA JAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Barata Jaya,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MULYOSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Babatan Pantai
                                        Timur, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA ARAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Galaxy Bumi
                                        Permai,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA KEDUNG BARUK </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Springville
                                        Residence, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab1" class="et-tab lcl_elems_wrapper ">
                <div class="fa-list">
                <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGINDEN INTAN </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Nginden Intan
                                        Timur,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA RUNGKUT </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Rungkut
                                        Menanggal
                                        Harapan, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA ARIF RAHMAN H. </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Arif Rahman
                                        Hakim,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MANYAR REJO </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Manyar Rejo,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MANYAR JAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Manyar Jaya,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA BARATA JAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Barata Jaya,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MULYOSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Babatan Pantai
                                        Timur, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA ARAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Galaxy Bumi
                                        Permai,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA KEDUNG BARUK </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Springville
                                        Residence, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab2" class="et-tab lcl_elems_wrapper ">
                <div class="fa-list">
                <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">20.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MENGANTI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Puri Safira
                                        Regency,
                                        Menganti</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA BARAT</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab3" class="et-tab lcl_elems_wrapper ">
                <div class="fa-list">
                <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGAGLIK </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Ploso Bogen,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA PUSAT</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab4" class="et-tab lcl_elems_wrapper">
                <div class="fa-list">
                <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA WIYUNG </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Taman Pondok Indah,
                                        Wiyung, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/JzMbMYqYZ42yWh3b7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGAGEL </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Ngagel Madya
                                        Utara,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA GUNUNGSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Wonokitri,
                                        Surabaya
                                    </h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA JEMURSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Jemur Wonosari,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab5" class="et-tab lcl_elems_wrapper">
                <div class="fa-list">

                </div>
            </div>
            <!-- END -->
        </div>

        <div class="list-fa desktop-only">
            <div id="et-event-tab0" class="et-tab lcl_elems_wrapper active">
                <div
                    class="grid grid-cols-2 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] items-start">



                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA WIYUNG </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Taman Pondok Indah,
                                        Wiyung, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/JzMbMYqYZ42yWh3b7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGAGEL </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Ngagel Madya
                                        Utara,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGAGLIK </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Ploso Bogen,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA PUSAT</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGINDEN INTAN </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Nginden Intan
                                        Timur,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA GUNUNGSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Wonokitri,
                                        Surabaya
                                    </h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA RUNGKUT </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Rungkut
                                        Menanggal
                                        Harapan, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA JEMURSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Jemur Wonosari,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA ARIF RAHMAN H. </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Arif Rahman
                                        Hakim,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">20.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MENGANTI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Puri Safira
                                        Regency,
                                        Menganti</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA BARAT</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MANYAR REJO </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Manyar Rejo,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MANYAR JAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Manyar Jaya,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA BARATA JAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Barata Jaya,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MULYOSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Babatan Pantai
                                        Timur, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA ARAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Galaxy Bumi
                                        Permai,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA KEDUNG BARUK </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Springville
                                        Residence, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab1" class="et-tab lcl_elems_wrapper">
                <div
                    class="grid grid-cols-2 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] items-start">
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGINDEN INTAN </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Nginden Intan
                                        Timur,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA RUNGKUT </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Rungkut
                                        Menanggal
                                        Harapan, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA ARIF RAHMAN H. </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Arif Rahman
                                        Hakim,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Friday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MANYAR REJO </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Manyar Rejo,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MANYAR JAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Manyar Jaya,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA BARATA JAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Barata Jaya,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.30</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MULYOSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Babatan Pantai
                                        Timur, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA ARAYA </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Galaxy Bumi
                                        Permai,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA KEDUNG BARUK </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Springville
                                        Residence, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA TIMUR</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab2" class="et-tab lcl_elems_wrapper">
                <div
                    class="grid grid-cols-2 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] items-start">

                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">20.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA MENGANTI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Puri Safira
                                        Regency,
                                        Menganti</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA BARAT</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab3" class="et-tab lcl_elems_wrapper">
                <div
                    class="grid grid-cols-2 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] items-start">
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGAGLIK </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Ploso Bogen,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA PUSAT</h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab4" class="et-tab lcl_elems_wrapper">
                <div
                    class="grid grid-cols-2 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] items-start">
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Tuesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA WIYUNG </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Taman Pondok Indah,
                                        Wiyung, Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/JzMbMYqYZ42yWh3b7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA NGAGEL </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Ngagel Madya
                                        Utara,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Wednesday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA GUNUNGSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Wonokitri,
                                        Surabaya
                                    </h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/DyBdCZdrVSr6VhuC7"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="et-schedule justify-between rev-slide-up pb-[30px]">
                        <div
                            class="single-fa px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                            <div
                                class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                <!-- date & time -->
                                <div
                                    class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-[rgba(217,217,217,0.89)] xxs:py-[7px] xxs:px-[15px] xxs:p-0 xxs:justify-start">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">Every
                                            Monday</span>
                                    </div>

                                    <div class="time flex items-center gap-[10px]">
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

                                        <span class="text-etGray font-normal text-[16px] sm:text-[12px]">19.00</span>
                                    </div>
                                </div>

                                <!-- title -->
                                <h3
                                    class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                    <a href="#" class="hover:text-etBlue"> FA JEMURSARI </a>
                                </h3>


                                <!-- location -->
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">Jl. Jemur Wonosari,
                                        Surabaya</h6>
                                </div>
                                <div class="et-schedule-loaction flex items-center gap-[12px]">
                                    <span class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                fill="var(--et-blue)" />
                                        </svg>
                                    </span>
                                    <h6 class="text-[15px] text-etGray sm:text-[16px] sm:my-[10px]">SURABAYA SELATAN
                                    </h6>
                                </div>

                            </div>

                            <div class="flex m-auto shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                <a href="https://maps.app.goo.gl/e6cPnHy4AEejTy369"
                                    class="et-btn border w-[150px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[16px] rounded-full hover:!bg-etBlack hover:!text-white">Direction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="et-event-tab5" class="et-tab lcl_elems_wrapper">
                <div
                    class="grid grid-cols-2 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] items-start">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- HISTORY SECTION END -->


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
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/testimony/Neni.png" alt="reviewer image" class="w-[100px] sm:w-[80px] h-[100px] sm:h-[80px] rounded-full">
                                </div>
                            </div>

                            <div class="text-center">
                                <h5 class="text-black font-medium text-[20px] mb-[3px]">Neny</h5>
                                <h6 class="text-[16px] text-etGray font-normal mb-[20px] sm:text-[12px]">Administrator</h6>
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


                </div>
            </div>
        </div>
    </section>



<?php
get_footer('main');