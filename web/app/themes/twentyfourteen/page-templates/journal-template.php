<?php

/**
 * Template Name: Journal Template
 */

get_header('main');
?>


<?php if(isset($_GET['journal-detail'])) : ?>
<!-- BREADCRUMB SECTION START -->
<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] xs:text-[45px]">Journal Details</h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px]">
            <li class="opacity-80"><a href="index-2.htm" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">Journal Details</li>
        </ul>
    </div>
</section>
<!-- BREADCRUMB SECTION END -->

<?php if($_GET['journal-detail'] == 'Gods-Purpose-in-Me') : ?>
<!-- main content -->
<div class="et-event-details-content py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="flex gap-[30px] lg:gap-[20px] md:flex-col md:items-center">
            <!-- left content -->
            <div class="left">
                <!-- img -->
                <div class="relative rounded-[8px] overflow-hidden">
                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/journal-detail.png"
                        alt="event-details-img">
                    <!-- hall number tag -->
                    <!-- <span
                        class="absolute top-[20px] left-[20px] bg-etBlue rounded-[6px] text-white px-[12px] py-[5px] inline-block font-normal text-[16px]">Hall
                        No: 59</span> -->
                </div>

                <!-- txt -->
                <div>
                    <h4 class="text-[30px] xs:text-[25px] xxs:text-[22px] font-medium text-etBlack mb-[11px] mt-[27px]">
                        God's Purpose in Me</h4>

                    <p class="font-light text-[16px] text-etGray mb-[15px]">Setiap manusia diciptakan Tuhan pasti dengan
                        suatu tujuan dalam hidupnya. Nah bagaimana kita sebagai profesional muda bisa mengerti tujuan
                        hidup yang benar yang sesuai Firman Tuhan?</p>

                    <p class="font-light text-[16px] text-etGray mb-[21px]">Dikatakan dalam kitab Kejadian 1:1 yaitu
                        "pada mulanya Allah menciptakan langit dan bumi", hal ini berbicara bahwa Allah menciptakan
                        waktu untuk kita (pada mulanya), ruang (langit) dan materi (bumi).
                        Kita sebagai manusia, diciptakan dengan memiliki identitas Tuhan dan kita memperoleh mandat dari
                        Tuhan untuk menguasai atau mengelola bumi. Dengan kata lain bumi ini sebagai marketplace, yang
                        menjadi tempat kita berkarya.</p>

                    <p class="font-light text-[16px] text-etGray mb-[21px]">Disebutkan oleh Pdt. Billy Lantang, untuk
                        bisa mengerti tujuan Tuhan dalam hidup kita, maka yang harus kita lakukan adalah:
                    </p>

                    <ul class="et-event-details-requirements-list font-light text-[16px] text-etGray mb-[21px]">
                        <li>Pertama, kita harus mengerti panggilan Tuhan dalam hidup kita dan mengalami pertumbuhan
                            rohani serta hidup dalam ketaatan kepada Tuhan.</li>
                        <li>Kedua, lakukan dan fokus dengan yang apa kita lakukan. Jangan pernah membandingkan kehidupan
                            kita dengan orang lain, karena kita memiliki karunia yang berbeda satu sama lain. Berikanlah
                            yang terbaik di tempat kita berkarya.</li>
                        <li>Ketiga, jangan pernah merasa gagal, karena hidup ini adalah proses.</li>
                    </ul>

                    <!-- <div class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] mt-[38px] mb-[33px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/journal-detail-2.png"
                            alt="event-details-img" class="max-h-[306px] w-full object-cover rounded-[8px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/journal-detail-3.png "
                            alt="event-details-img" class="max-h-[306px] w-full object-cover rounded-[8px]">
                    </div> -->

                    <p class="font-light text-[16px] text-etGray mb-[43px]">Nah, apakah kita sudah yakin tujuan hidup
                        yang kita jalani sudah benar?
                        Yuk profesional muda temukan jawabannya dalam Talkshow BPro – God’s Purpose in Me bersama nara
                        sumber Pdt. Billy Lantang disini.</p>
                </div>
            </div>


        </div>
    </div>
</div>
<?php elseif($_GET['journal-detail'] == 'bpro-race') : ?>
<div class="et-event-details-content py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="flex gap-[30px] lg:gap-[20px] md:flex-col md:items-center">
            <!-- left content -->
            <div class="left">
                <!-- img -->
                <div class="relative rounded-[8px] overflow-hidden">
                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/bpro1.jpg" alt="event-details-img">
                    <!-- hall number tag -->
                    <!-- <span
                        class="absolute top-[20px] left-[20px] bg-etBlue rounded-[6px] text-white px-[12px] py-[5px] inline-block font-normal text-[16px]">Hall
                        No: 59</span> -->
                </div>

                <!-- txt -->
                <div>
                    <h4 class="text-[30px] xs:text-[25px] xxs:text-[22px] font-medium text-etBlack mb-[11px] mt-[27px]">
                        Bpro Race</h4>

                    <p class="font-light text-[16px] text-etGray mb-[15px]">Pada tanggal 23 Mei 2024, BPro mengadakan
                        program funday untuk gathering seluruh anggota FA, yaitu BPro Race. Event spesial ini diadakan
                        setiap beberapa bulan sekali. Tujuan dari acara ini adalah supaya anggota FA dapat saling kenal
                        dengan anggota FA yang lain.
                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px]">Event yang diadakan kali ini sangat spesial
                        karena BPro bekerja sama dengan Surabaya Plaza, sebagai pihak yang menyediakan area games untuk
                        BPro Race. Wow!! Dihadiri oleh sekitar 120 peserta, acara dimulai tepat pukul 9 pagi dan
                        bertempat di Morazen Hotel Surabaya. Banyak games yang seru dan asyik lho.</p>

                    <p class="font-light text-[16px] text-etGray mb-[21px]">Dalam games BPro Race, panitia mengusung 3
                        value BPro yaitu :

                    </p>

                    <ul class="et-event-details-requirements-list font-light text-[16px] text-etGray mb-[21px]">
                        <li>Unity - setiap anggota kelompok harus selalu bersama, belajar untuk saling kompak dan tentu
                            saja menghindari perpecahan. Beda pendapat it’s okay, tapi ‘baperan’ no way!
                        </li>
                        <li>Professional - setiap peserta harus tetap mengikuti aturan, petunjuk dan rute yang
                            ditetapkan oleh panitia. Berlomba menyelesaikan tantangan di setiap game, berpadu dengan
                            segala kreatifitas, dan berpacu dalam tenggat waktu yang diberikan.
                        </li>
                        <li>Integrity - komitmen untuk fokus menyelesaikan journey yang ada sekalipun tanpa diawasi oleh
                            tim panitia. Tidak menyimpang ke kanan dan ke kiri, agar jangan gagal fokus dan malah
                            tergoda shopping di mal Surabaya Plaza. Hayo, siapa yang begini kemarin? Hahaha…</li>
                    </ul>

                    <!-- <div class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] mt-[38px] mb-[33px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/bpro2.png" alt="event-details-img"
                            class="max-h-[306px] w-full object-cover rounded-[8px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/bpro3.png "
                            alt="event-details-img" class="max-h-[306px] w-full object-cover rounded-[8px]">
                    </div> -->

                    <p class="font-light text-[16px] text-etGray mb-[43px]">So, gimana acara funday nya, seru kan? Kamu
                        mau ikutan juga di next event funday?
                        Yuk gabung dengan FA BPro…
                    </p>
                </div>
            </div>


        </div>
    </div>
</div>
<?php elseif($_GET['journal-detail'] == 'harmony-celebration') : ?>
<div class="et-event-details-content py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="flex gap-[30px] lg:gap-[20px] md:flex-col md:items-center">
            <!-- left content -->
            <div class="left">
                <!-- img -->
                <div class="relative rounded-[8px] overflow-hidden">
                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/journal6.png" alt="event-details-img">
                    <!-- hall number tag -->
                    <!-- <span
                        class="absolute top-[20px] left-[20px] bg-etBlue rounded-[6px] text-white px-[12px] py-[5px] inline-block font-normal text-[16px]">Hall
                        No: 59</span> -->
                </div>

                <!-- txt -->
                <div>
                    <h4 class="text-[30px] xs:text-[25px] xxs:text-[22px] font-medium text-etBlack mb-[11px] mt-[27px]">
                        Harmony Celebration</h4>

                    <p class="font-light text-[16px] text-etGray mb-[15px]">Di bulan Oktober 2023, BPro merayakan
                        Anniversary yang ke-26, dengan tema ‘Harmony Celebration’ . Event ini dibalut dengan dresscode
                        asik bergaya retro. Tema Harmony Celebration berbicara tentang keharmonisan dalam sebuah
                        komunitas.
                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px]">Dalam komunitas kita bisa belajar tentang 2
                        hal,

                    </p>

                    <ul class="et-event-details-requirements-list font-light text-[16px] text-etGray mb-[21px]">
                        <li>Pertama, Unity. Salah satu kunci utama dalam komunitas adalah kesatuan. Jadi supaya berkat
                            mengalir di dalam komunitas keluarga, pekerjaan, dan pelayanan, kita harus memiliki
                            kerukunan dan kesatuan hati.
                        </li>
                        <li>Kedua, Living in Community. Manusia adalah mahkluk sosial, tidak bisa hidup sendiri. Kita
                            butuh komunitas untuk bertumbuh, saling berbagi, saling mendoakan dan saling support. Di
                            BPro, ada kelompok FA (Family Altar); komunitas persekutuan kecil tempat kita praktek kasih,
                            saling melayani dan memberkati dalam keseharian kita.
                        </li>
                    </ul>

                    <!-- <div class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] mt-[38px] mb-[33px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/bpro2.png" alt="event-details-img"
                            class="max-h-[306px] w-full object-cover rounded-[8px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/bpro3.png "
                            alt="event-details-img" class="max-h-[306px] w-full object-cover rounded-[8px]">
                    </div> -->

                    <p class="font-light text-[16px] text-etGray mb-[43px]">Yuk.. para profesional muda bergabunglah
                        bersama kami di komunitas BPro. Bersama kita bertumbuh dalam keharmonisan iman dan karakter.

                    </p>
                </div>
            </div>


        </div>
    </div>
</div>
<?php elseif($_GET['journal-detail'] == 'the-calling') : ?>
<div class="et-event-details-content py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="flex gap-[30px] lg:gap-[20px] md:flex-col md:items-center">
            <!-- left content -->
            <div class="left">
                <!-- img -->
                <div class="relative rounded-[8px] overflow-hidden">
                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/the-calling.png" alt="event-details-img">
                    <!-- hall number tag -->
                    <!-- <span
                        class="absolute top-[20px] left-[20px] bg-etBlue rounded-[6px] text-white px-[12px] py-[5px] inline-block font-normal text-[16px]">Hall
                        No: 59</span> -->
                </div>

                <!-- txt -->
                <div>
                    <h4 class="text-[30px] xs:text-[25px] xxs:text-[22px] font-medium text-etBlack mb-[11px] mt-[27px]">
                        The Calling</h4>

                    <p class="font-light text-[16px] text-etGray mb-[15px]">Talkshow ‘The Calling’, Pdt. Agus Gunawan
                        atau akrabnya dipanggil ‘Ko Han-Han’, membagikan alasan mengapa kita melayani Tuhan yaitu karena
                        kita mengasihi Tuhan. Seperti yang tertulis dalam Matius 22:37, kekuatan kasih inilah yang
                        membuat kita mau berkorban untuk melayani Tuhan. Cinta kita kepada Tuhan tetap harus
                        menggebu-gebu.
                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px]">Pada saat melayani Tuhan pasti akan ada
                        tantangan dan gesekan. Tetapi kita harus tetap setia dalam melayani. Salah satu tantangan yang
                        dihadapi Ko Han adalah membuka ibadah berbahasa inggris padahal kemampuannya berbahasa inggris
                        ketika itu bisa dibilang sangat pas-pasan.

                    </p>
                    <p class="font-light text-[16px] text-etGray mb-[21px]">Dengan segala keterbatasan yang ada, Ko Han
                        juga tidak habis akal untuk menjangkau jiwa baru. Ia melihat ada banyak mahasiswa baru yang
                        berasal dari Afrika yang merantau di Australia dengan finansial yang minim. Ko Han lalu mencoba
                        memanfaatkan roti yang tidak terjual di hari itu di toko roti, dengan mengantongi ijin untuk
                        kegiatan charity dari gereja. Dan melalui roti yang dibagikan tersebut, mereka mulai merangkul
                        dan memenangkan jiwa. Hingga sekarang, Ko Han dan tim Bethany Sydney akhirnya memiliki pelayanan
                        ‘food bank’ yang digunakan sebagai sarana untuk dapat menjangkau jiwa.

                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px]">Kita harus tetap semangat dalam melayani
                        Tuhan. Dalam Roma 12:11 dikatakan : “Janganlah hendaknya kerajinanmu kendor, biarlah rohmu
                        menyala-nyala dan layanilah Tuhan”, jika kita penuh dengan Roh Kudus, roh kita pasti
                        menyala-nyala bagi Tuhan. Biarlah hidup kita menghasilkan buah roh dan menjadi saksi bagi Tuhan.

                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px]">Ingin tau lebih jelas tentang kisah
                        pengalaman Ko Han-Han dalam melayani? Bagaimana ia tetap mempertahankan “api” semangat dalam
                        melayani Tuhan?

                    </p>


                    <!-- <div class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] mt-[38px] mb-[33px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/bpro2.png" alt="event-details-img"
                            class="max-h-[306px] w-full object-cover rounded-[8px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/bpro3.png "
                            alt="event-details-img" class="max-h-[306px] w-full object-cover rounded-[8px]">
                    </div> -->

                    <p class="font-light text-[16px] text-etGray mb-[43px]">Yuk temukan jawabannya dalam Talkshow BPro -
                        The Calling bersama Narasumber Ko Han-Han disini.


                    </p>
                </div>
            </div>


        </div>
    </div>
</div>
<?php else :  ?>

<!-- BREADCRUMB SECTION START -->
<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('<?= get_template_directory_uri() ?>/assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] xs:text-[45px]">All Journal</h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px]">
            <li class="opacity-80"><a href="index-2.htm" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">Journal</li>
        </ul>
    </div>
</section>
<?php endif;?>
<!-- BREADCRUMB SECTION END -->
<?php else :?>
<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] xs:text-[45px]">Journal</h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px]">
            <li class="opacity-80"><a href="index-2.htm" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">Journal</li>
        </ul>
    </div>
</section>
<div class="py-[130px] lg:py-[80px] md:py-[60px] overflow-hidden">
    <!-- EVENTS SECTION START -->
    <section class="et-all-events">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">

            <div class="et-schedules-tab-container">
                <div id="et-event-tab0" class="et-tab active">
                    <div class="all-scheduled-events space-y-[30px]">
                        <div class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-betweetev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/assets/new-img/journal3.png"
                                    alt="scehduled-event-cover">
                            </div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
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

                                            <span class="text-etGray font-normal text-[16px]">08 July 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
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

                                            <span class="text-etGray font-normal text-[16px]">13.00</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3
                                        class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        FA - FA Gabungan Bpro
                                    </h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]">Talkshow BPro </h4>

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
                                        <h6 class="text-[16px] text-etGray">Bethany Manyar</h6>
                                    </div>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <a href="#"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/assets/new-img/journal1.jpg"
                                    alt="scehduled-event-cover">
                            </div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
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

                                            <span class="text-etGray font-normal text-[16px]">06 July 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
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

                                            <span class="text-etGray font-normal text-[16px]">17.30</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3
                                        class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        God's Purpose in Me
                                    </h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]">Talkshow BPro</h4>

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
                                        <h6 class="text-[16px] text-etGray">Bethany Manyar</h6>
                                    </div>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <a href="<?php echo home_url()?>/journal?journal-detail=Gods-Purpose-in-Me"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/assets/new-img/journal2.png"
                                    alt="scehduled-event-cover">
                            </div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
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

                                            <span class="text-etGray font-normal text-[16px]">22 Juni 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
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

                                            <span class="text-etGray font-normal text-[16px]">17.30</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3
                                        class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                         The Calling 
                                    </h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]">Talkshow BPro</h4>

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
                                        <h6 class="text-[16px] text-etGray">Bethany Manyar</h6>
                                    </div>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <a href="<?php echo home_url()?>/journal?journal-detail=the-calling"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Read
                                        More</a>
                                </div>
                            </div>
                        </div>



                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/assets/new-img/journal4.png"
                                    alt="scehduled-event-cover">
                            </div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
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

                                            <span class="text-etGray font-normal text-[16px]">23 Mei 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
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

                                            <span class="text-etGray font-normal text-[16px]">17.30</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3
                                        class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                       BPro Race
                                    </h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]">Gathering FA</h4>

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
                                        <h6 class="text-[16px] text-etGray">Morazen Hotel Surabaya</h6>
                                    </div>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <a href="<?php echo home_url()?>/journal?journal-detail=bpro-race"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/assets/new-img/journal5.png"
                                    alt="scehduled-event-cover">
                            </div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
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

                                            <span class="text-etGray font-normal text-[16px]">23 Maret 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
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

                                            <span class="text-etGray font-normal text-[16px]">17.30</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3
                                        class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        TS - Bestie in Community 
                                    </h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]">Talkshow BPro</h4>

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
                                        <h6 class="text-[16px] text-etGray">Bethany Manyar</h6>
                                    </div>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <a href="#"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/assets/new-img/journal6.png"
                                    alt="scehduled-event-cover">
                            </div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading w-[80%] pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
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

                                            <span class="text-etGray font-normal text-[16px]">14 Oct 2023</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
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

                                            <span class="text-etGray font-normal text-[16px]">17.30</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3
                                        class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                       Harmony Celebration 
                                    </h3>
                                    <h4 class="font-semibold text-etBlue text-[16px] my-[10px]">BPro Anniversary</h4>

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
                                        <h6 class="text-[16px] text-etGray">Bethany Manyar</h6>
                                    </div>
                                </div>

                                <div class="flex shrink-0 flex-col xxs:flex-row gap-[16px] xxs:gap-[10px]">
                                    <!-- <a href="#" class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">View More</a> -->
                                    <a href="<?php echo home_url()?>/journal?journal-detail=harmony-celebration"
                                        class="et-btn border w-[180px] bg-etBlue text-white inline-flex items-center justify-center h-[45px] px-[22px] xxs:px-[16px] font-normal text-[17px] rounded-full hover:!bg-etBlack hover:!text-white">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EVENTS SECTION END -->


    <!-- PAGINATION START -->
    <!-- <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="flex items-center gap-[20px] pt-[60px] justify-center text-[16px]">
            <a href="#" class=""><i class="fa-solid fa-arrow-left-long"></i></a>
            <div class="et-pagination flex gap-[10px] items-center">
                <a href="#" class="border border-[#d9d9d9] rounded-full w-[50px] h-[50px] flex items-center justify-center text-etBlack hover:bg-etBlue hover:border-etBlue hover:text-white active">01</a>
                <a href="#" class="border border-[#d9d9d9] rounded-full w-[50px] h-[50px] flex items-center justify-center text-etBlack hover:bg-etBlue hover:border-etBlue hover:text-white">02</a>
                <a href="#" class="border border-[#d9d9d9] rounded-full w-[50px] h-[50px] flex items-center justify-center text-etBlack hover:bg-etBlue hover:border-etBlue hover:text-white">03</a>
            </div>
            <a href="#" class=""><i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </div> -->
    <!-- PAGINATION END -->
</div>
<?php endif ; ?>
<?php
get_footer('main');