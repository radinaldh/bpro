<?php

/**
 * Template Name: Journal Template
 */

get_header('main');
?>


<style>
    img.img-recent {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.left p {
    text-align: justify;
}

.left ul {
    text-align: justify;
}

@media screen and (max-width: 600px) {
    .right {
    margin-top: 50px;
    width: 100%;
}
}
</style>

<?php if(isset($_GET['journal-detail'])) : ?>
<!-- BREADCRUMB SECTION START -->
<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">Journal Details</h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px] sm:text-[12px]">
            <li class="opacity-80"><a href="<?= home_url()?>/" class="hover:text-etBlue">Home</a></li>
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

                    <p class="font-light text-[16px] text-etGray mb-[15px] sm:text-[12px]">Setiap manusia diciptakan Tuhan pasti dengan
                        suatu tujuan dalam hidupnya. Nah bagaimana kita sebagai profesional muda bisa mengerti tujuan
                        hidup yang benar yang sesuai Firman Tuhan?</p>

                    <p class="font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">Dikatakan dalam kitab Kejadian 1:1 yaitu
                        "pada mulanya Allah menciptakan langit dan bumi", hal ini berbicara bahwa Allah menciptakan
                        waktu untuk kita (pada mulanya), ruang (langit) dan materi (bumi).
                        Kita sebagai manusia, diciptakan dengan memiliki identitas Tuhan dan kita memperoleh mandat dari
                        Tuhan untuk menguasai atau mengelola bumi. Dengan kata lain bumi ini sebagai marketplace, yang
                        menjadi tempat kita berkarya.</p>

                    <p class="font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">Disebutkan oleh Pdt. Billy Lantang, untuk
                        bisa mengerti tujuan Tuhan dalam hidup kita, maka yang harus kita lakukan adalah:
                    </p>

                    <ul class="et-event-details-requirements-list font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">
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

                    <p class="font-light text-[16px] text-etGray mb-[43px] sm:text-[12px]">Nah, apakah kita sudah yakin tujuan hidup
                        yang kita jalani sudah benar?
                        Yuk profesional muda temukan jawabannya dalam Talkshow BPro – God’s Purpose in Me bersama nara
                        sumber Pdt. Billy Lantang disini.</p>
                </div>
                <div class="border-y border-[#d9d9d9] py-[24px] flex items-center justify-between xs:flex-col xs:items-start gap-[20px]">
                    <!-- share options -->
                    <div class="flex gap-[28px] items-center">
                        <h6 class="font-medium text-[16px] text-etBlack">Share:</h6>
                        <div class="flex gap-[15px] text-[16px]">
                            <a href="#" class="text-[#757277] hover:text-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="text-[#757277] hover:text-etBlue"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
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

                    <p class="font-light text-[16px] text-etGray mb-[15px] sm:text-[12px]">Pada tanggal 23 Mei 2024, BPro mengadakan
                        program funday untuk gathering seluruh anggota FA, yaitu BPro Race. Event spesial ini diadakan
                        setiap beberapa bulan sekali. Tujuan dari acara ini adalah supaya anggota FA dapat saling kenal
                        dengan anggota FA yang lain.
                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">Event yang diadakan kali ini sangat spesial
                        karena BPro bekerja sama dengan Surabaya Plaza, sebagai pihak yang menyediakan area games untuk
                        BPro Race. Wow!! Dihadiri oleh sekitar 120 peserta, acara dimulai tepat pukul 9 pagi dan
                        bertempat di Morazen Hotel Surabaya. Banyak games yang seru dan asyik lho.</p>

                    <p class="font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">Dalam games BPro Race, panitia mengusung 3
                        value BPro yaitu :

                    </p>

                    <ul class="et-event-details-requirements-list font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">
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

                    <p class="font-light text-[16px] text-etGray mb-[43px] sm:text-[12px]">So, gimana acara funday nya, seru kan? Kamu
                        mau ikutan juga di next event funday?
                        Yuk gabung dengan FA BPro…
                    </p>
                </div>
                <div class="border-y border-[#d9d9d9] py-[24px] flex items-center justify-between xs:flex-col xs:items-start gap-[20px]">
                    <!-- share options -->
                    <div class="flex gap-[28px] items-center">
                        <h6 class="font-medium text-[16px] text-etBlack">Share:</h6>
                        <div class="flex gap-[15px] text-[16px]">
                            <a href="#" class="text-[#757277] hover:text-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="text-[#757277] hover:text-etBlue"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
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
                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/harmony.png" alt="event-details-img">
                    <!-- hall number tag -->
                    <!-- <span
                        class="absolute top-[20px] left-[20px] bg-etBlue rounded-[6px] text-white px-[12px] py-[5px] inline-block font-normal text-[16px]">Hall
                        No: 59</span> -->
                </div>

                <!-- txt -->
                <div>
                    <h4 class="text-[30px] xs:text-[25px] xxs:text-[22px] font-medium text-etBlack mb-[11px] mt-[27px]">
                        Harmony Celebration</h4>

                    <p class="font-light text-[16px] text-etGray mb-[15px] sm:text-[12px]">Di bulan Oktober 2023, BPro merayakan
                        Anniversary yang ke-26, dengan tema ‘Harmony Celebration’ . Event ini dibalut dengan dresscode
                        asik bergaya retro. Tema Harmony Celebration berbicara tentang keharmonisan dalam sebuah
                        komunitas.
                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">Dalam komunitas kita bisa belajar tentang 2
                        hal,

                    </p>

                    <ul class="et-event-details-requirements-list font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">
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

                    <p class="font-light text-[16px] text-etGray mb-[43px] sm:text-[12px]">Yuk.. para profesional muda bergabunglah
                        bersama kami di komunitas BPro. Bersama kita bertumbuh dalam keharmonisan iman dan karakter.

                    </p>
                </div>
                <div class="border-y border-[#d9d9d9] py-[24px] flex items-center justify-between xs:flex-col xs:items-start gap-[20px]">
                    <!-- share options -->
                    <div class="flex gap-[28px] items-center">
                        <h6 class="font-medium text-[16px] text-etBlack">Share:</h6>
                        <div class="flex gap-[15px] text-[16px]">
                            <a href="#" class="text-[#757277] hover:text-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="text-[#757277] hover:text-etBlue"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
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
                    <img src="<?= get_template_directory_uri(); ?>/assets/new-img/the-calling.png"
                        alt="event-details-img">
                    <!-- hall number tag -->
                    <!-- <span
                        class="absolute top-[20px] left-[20px] bg-etBlue rounded-[6px] text-white px-[12px] py-[5px] inline-block font-normal text-[16px]">Hall
                        No: 59</span> -->
                </div>

                <!-- txt -->
                <div>
                    <h4 class="text-[30px] xs:text-[25px] xxs:text-[22px] font-medium text-etBlack mb-[11px] mt-[27px]">
                        The Calling</h4>

                    <p class="font-light text-[16px] text-etGray mb-[15px] sm:text-[12px]">Talkshow ‘The Calling’, Pdt. Agus Gunawan
                        atau akrabnya dipanggil ‘Ko Han-Han’, membagikan alasan mengapa kita melayani Tuhan yaitu karena
                        kita mengasihi Tuhan. Seperti yang tertulis dalam Matius 22:37, kekuatan kasih inilah yang
                        membuat kita mau berkorban untuk melayani Tuhan. Cinta kita kepada Tuhan tetap harus
                        menggebu-gebu.
                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">Pada saat melayani Tuhan pasti akan ada
                        tantangan dan gesekan. Tetapi kita harus tetap setia dalam melayani. Salah satu tantangan yang
                        dihadapi Ko Han adalah membuka ibadah berbahasa inggris padahal kemampuannya berbahasa inggris
                        ketika itu bisa dibilang sangat pas-pasan.

                    </p>
                    <p class="font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">Dengan segala keterbatasan yang ada, Ko Han
                        juga tidak habis akal untuk menjangkau jiwa baru. Ia melihat ada banyak mahasiswa baru yang
                        berasal dari Afrika yang merantau di Australia dengan finansial yang minim. Ko Han lalu mencoba
                        memanfaatkan roti yang tidak terjual di hari itu di toko roti, dengan mengantongi ijin untuk
                        kegiatan charity dari gereja. Dan melalui roti yang dibagikan tersebut, mereka mulai merangkul
                        dan memenangkan jiwa. Hingga sekarang, Ko Han dan tim Bethany Sydney akhirnya memiliki pelayanan
                        ‘food bank’ yang digunakan sebagai sarana untuk dapat menjangkau jiwa.

                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">Kita harus tetap semangat dalam melayani
                        Tuhan. Dalam Roma 12:11 dikatakan : “Janganlah hendaknya kerajinanmu kendor, biarlah rohmu
                        menyala-nyala dan layanilah Tuhan”, jika kita penuh dengan Roh Kudus, roh kita pasti
                        menyala-nyala bagi Tuhan. Biarlah hidup kita menghasilkan buah roh dan menjadi saksi bagi Tuhan.

                    </p>

                    <p class="font-light text-[16px] text-etGray mb-[21px] sm:text-[12px]">Ingin tau lebih jelas tentang kisah
                        pengalaman Ko Han-Han dalam melayani? Bagaimana ia tetap mempertahankan “api” semangat dalam
                        melayani Tuhan?

                    </p>


                    <!-- <div class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px] mt-[38px] mb-[33px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/bpro2.png" alt="event-details-img"
                            class="max-h-[306px] w-full object-cover rounded-[8px]">
                        <img src="<?= get_template_directory_uri(); ?>/assets/new-img/bpro3.png "
                            alt="event-details-img" class="max-h-[306px] w-full object-cover rounded-[8px]">
                    </div> -->

                    <p class="font-light text-[16px] text-etGray mb-[43px] sm:text-[12px]">Yuk temukan jawabannya dalam Talkshow BPro -
                        The Calling bersama Narasumber Ko Han-Han disini.


                    </p>
                </div>
                <div class="border-y border-[#d9d9d9] py-[24px] flex items-center justify-between xs:flex-col xs:items-start gap-[20px]">
                    <!-- share options -->
                    <div class="flex gap-[28px] items-center">
                        <h6 class="font-medium text-[16px] text-etBlack">Share:</h6>
                        <div class="flex gap-[15px] text-[16px]">
                            <a href="#" class="text-[#757277] hover:text-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="text-[#757277] hover:text-etBlue"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
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
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">All Journal</h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px] sm:text-[12px]">
            <li class="opacity-80"><a href="<?= home_url()?>/" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">Journal</li>
        </ul>
    </div>
</section>
<?php endif;?>
<!-- BREADCRUMB SECTION END -->
<?php else :?>
<section class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">Journal</h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px] sm:text-[12px]">
            <li class="opacity-80"><a href="<?= home_url()?>/" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">Journal</li>
        </ul>
    </div>
</section>
<!-- MAIN CONTENT START -->
<div class="et-event-details-content py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="flex gap-[30px] lg:gap-[20px] md:flex-col md:items-center">
            <!-- left content -->
            <div class="left grow space-y-[40px] md:space-y-[30px]">
                <!-- single blog -->
                <div class="border border-[#D9D9D9] rounded-[8px] p-[24px] xxs:p-[18px]">
                    <div class="img overflow-hidden rounded-[8px] mb-[30px] relative">
                        <img src="<?= get_template_directory_uri()?>/assets/new-img/gabungan.png" alt="blog-cover"
                            class="w-full">

                        <div
                            class="bg-etBlue rounded-[6px] absolute top-[20px] left-[20px] text-white px-[20px] py-[13px]">
                            <span class="block text-[24px] font-medium leading-[0.7] mb-[6px]">08</span>
                            <span class="block text-[12px] font-medium leading-[0.7]">July</span>
                        </div>
                    </div>

                    <!-- txt -->
                    <div>
                        <!-- infos -->
                        <div class="flex items-center gap-[30px] mb-[5px]">
                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                        <path
                                            d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">BPro Administrator</a></span>
                            </div>

                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                            class="fill-etBlue" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">Talkshow Bpro</a></span>
                            </div>
                        </div>

                        <h3
                            class="text-[30px] lg:text-[27px] sm:text-[24px] xxs:text-[22px] font-medium text-etBlack mb-[10px] sm:text-[24px] sm:my-[15px]">
                            FA - FA Gabungan Bpro</h3>

                        <p class="font-light text-[16px] text-etGray mb-[10px] sm:text-[12px]"></p>

                        <a href="#" class="text-etBlue text-[16px] hover:text-etBlue">Read More <span
                                class="pl-[5px]"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <!-- single blog -->
                <div class="border border-[#D9D9D9] rounded-[8px] p-[24px] xxs:p-[18px]">
                    <div class="img overflow-hidden rounded-[8px] mb-[30px] relative">
                        <img src="<?= get_template_directory_uri()?>/assets/new-img/purpose.png" alt="blog-cover"
                            class="w-full">

                        <div
                            class="bg-etBlue rounded-[6px] absolute top-[20px] left-[20px] text-white px-[20px] py-[13px]">
                            <span class="block text-[24px] font-medium leading-[0.7] mb-[6px]">06</span>
                            <span class="block text-[12px] font-medium leading-[0.7]">July</span>
                        </div>
                    </div>

                    <!-- txt -->
                    <div>
                        <!-- infos -->
                        <div class="flex items-center gap-[30px] mb-[5px]">
                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                        <path
                                            d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">BPro Administrator</a></span>
                            </div>

                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                            class="fill-etBlue" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">Talkshow Bpro</a></span>
                            </div>
                        </div>

                        <h3
                            class="text-[30px] lg:text-[27px] sm:text-[24px] xxs:text-[22px] font-medium text-etBlack mb-[10px] sm:text-[24px] sm:my-[15px]">
                            God's Purpose in Me</h3>

                        <p class="font-light text-[16px] text-etGray mb-[10px] sm:text-[12px]">Setiap manusia diciptakan Tuhan pasti dengan suatu tujuan dalam hidupnya. Nah bagaimana kita sebagai profesional muda bisa mengerti tujuan hidup yang benar yang sesuai Firman Tuhan?</p>

                        <a href="<?php echo home_url() ?>/journal?journal-detail=Gods-Purpose-in-Me" class="text-etBlue text-[16px] hover:text-etBlue">Read More <span
                                class="pl-[5px]"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <!-- single blog -->
                <div class="border border-[#D9D9D9] rounded-[8px] p-[24px] xxs:p-[18px]">
                    <div class="img overflow-hidden rounded-[8px] mb-[30px] relative">
                        <img src="<?= get_template_directory_uri()?>/assets/new-img/the-calling.png" alt="blog-cover"
                            class="w-full">

                        <div
                            class="bg-etBlue rounded-[6px] absolute top-[20px] left-[20px] text-white px-[20px] py-[13px]">
                            <span class="block text-[24px] font-medium leading-[0.7] mb-[6px]">22</span>
                            <span class="block text-[12px] font-medium leading-[0.7]">Juni</span>
                        </div>
                    </div>

                    <!-- txt -->
                    <div>
                        <!-- infos -->
                        <div class="flex items-center gap-[30px] mb-[5px]">
                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                        <path
                                            d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">BPro Administrator</a></span>
                            </div>

                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                            class="fill-etBlue" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">Talkshow Bpro</a></span>
                            </div>
                        </div>

                        <h3
                            class="text-[30px] lg:text-[27px] sm:text-[24px] xxs:text-[22px] font-medium text-etBlack mb-[10px] sm:text-[24px] sm:my-[15px]">
                            The Calling</h3>

                        <p class="font-light text-[16px] text-etGray mb-[10px] sm:text-[12px]">Talkshow ‘The Calling’, Pdt. Agus Gunawan atau akrabnya dipanggil ‘Ko Han-Han’, membagikan alasan mengapa kita melayani Tuhan yaitu karena kita mengasihi Tuhan.</p>

                        <a href="<?php echo home_url() ?>/journal?journal-detail=the-calling" class="text-etBlue text-[16px] hover:text-etBlue">Read More <span
                                class="pl-[5px]"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <!-- single blog -->
                <div class="border border-[#D9D9D9] rounded-[8px] p-[24px] xxs:p-[18px]">
                    <div class="img overflow-hidden rounded-[8px] mb-[30px] relative">
                        <img src="<?= get_template_directory_uri()?>/assets/new-img/bpro1.jpg" alt="blog-cover"
                            class="w-full">

                        <div
                            class="bg-etBlue rounded-[6px] absolute top-[20px] left-[20px] text-white px-[20px] py-[13px]">
                            <span class="block text-[24px] font-medium leading-[0.7] mb-[6px]">23</span>
                            <span class="block text-[12px] font-medium leading-[0.7]">Mei</span>
                        </div>
                    </div>

                    <!-- txt -->
                    <div>
                        <!-- infos -->
                        <div class="flex items-center gap-[30px] mb-[5px]">
                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                        <path
                                            d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">BPro Administrator</a></span>
                            </div>

                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                            class="fill-etBlue" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">Gathering FA</a></span>
                            </div>
                        </div>

                        <h3
                            class="text-[30px] lg:text-[27px] sm:text-[24px] xxs:text-[22px] font-medium text-etBlack mb-[10px] sm:text-[24px] sm:my-[15px]">
                            BPro Race</h3>

                        <p class="font-light text-[16px] text-etGray mb-[10px] sm:text-[12px]">Pada tanggal 23 Mei 2024, BPro mengadakan program funday untuk gathering seluruh anggota FA, yaitu BPro Race. Event spesial ini diadakan setiap beberapa bulan sekali.</p>

                        <a href="<?php echo home_url() ?>/journal?journal-detail=bpro-race" class="text-etBlue text-[16px] hover:text-etBlue">Read More <span
                                class="pl-[5px]"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <!-- single blog -->
                <div class="border border-[#D9D9D9] rounded-[8px] p-[24px] xxs:p-[18px]">
                    <div class="img overflow-hidden rounded-[8px] mb-[30px] relative">
                        <img src="<?= get_template_directory_uri()?>/assets/new-img/bestie.png" alt="blog-cover"
                            class="w-full">

                        <div
                            class="bg-etBlue rounded-[6px] absolute top-[20px] left-[20px] text-white px-[20px] py-[13px]">
                            <span class="block text-[24px] font-medium leading-[0.7] mb-[6px]">23</span>
                            <span class="block text-[12px] font-medium leading-[0.7]">Maret</span>
                        </div>
                    </div>

                    <!-- txt -->
                    <div>
                        <!-- infos -->
                        <div class="flex items-center gap-[30px] mb-[5px]">
                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                        <path
                                            d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">BPro Administrator</a></span>
                            </div>

                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                            class="fill-etBlue" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">Talkshow Bpro</a></span>
                            </div>
                        </div>

                        <h3
                            class="text-[30px] lg:text-[27px] sm:text-[24px] xxs:text-[22px] font-medium text-etBlack mb-[10px] sm:text-[24px] sm:my-[15px]">
                            TS - Bestie in Community</h3>

                        <p class="font-light text-[16px] text-etGray mb-[10px] sm:text-[12px]"></p>

                        <a href="#" class="text-etBlue text-[16px] hover:text-etBlue">Read More <span
                                class="pl-[5px]"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <!-- single blog -->
                <div class="border border-[#D9D9D9] rounded-[8px] p-[24px] xxs:p-[18px]">
                    <div class="img overflow-hidden rounded-[8px] mb-[30px] relative">
                        <img src="<?= get_template_directory_uri()?>/assets/new-img/harmony.png" alt="blog-cover"
                            class="w-full">

                        <div
                            class="bg-etBlue rounded-[6px] absolute top-[20px] left-[20px] text-white px-[20px] py-[13px]">
                            <span class="block text-[24px] font-medium leading-[0.7] mb-[6px]">14</span>
                            <span class="block text-[12px] font-medium leading-[0.7]">Oct</span>
                        </div>
                    </div>

                    <!-- txt -->
                    <div>
                        <!-- infos -->
                        <div class="flex items-center gap-[30px] mb-[5px]">
                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                        <path
                                            d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                            class="stroke-etBlue" stroke-width="1.3" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">BPro Administrator</a></span>
                            </div>

                            <!-- single info -->
                            <div class="flex gap-[10px] items-center">
                                <span class="shrink-0">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.05666 18.75H8.05504C7.46832 18.7495 6.91657 18.5207 6.50187 18.1052L0.660341 12.2553C-0.194072 11.3994 -0.194072 10.0065 0.660341 9.15058L8.53478 1.26102C9.3463 0.44792 10.426 0 11.575 0H16.5709C17.7824 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5084 10.2167L9.60951 18.1074C9.19455 18.5218 8.64306 18.75 8.05666 18.75ZM11.575 1.46484C10.8179 1.46484 10.1064 1.75998 9.57163 2.29579L1.69707 10.1853C1.41222 10.4708 1.41222 10.9349 1.69707 11.2203L7.53857 17.0702C7.6767 17.2086 7.86051 17.285 8.05619 17.2851H8.05677C8.1529 17.2854 8.24812 17.2666 8.33694 17.2299C8.42577 17.1931 8.50643 17.1391 8.57427 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.5709 1.46484H11.575ZM13.458 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.458 3.03955C14.6696 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6696 7.43408 13.458 7.43408ZM13.458 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.458 5.96924C13.862 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.862 4.50439 13.458 4.50439Z"
                                            class="fill-etBlue" />
                                    </svg>
                                </span>
                                <span class="text-[14px] text-etGray sm:text-[12px]"><a href="#">BPro Anniversary</a></span>
                            </div>
                        </div>

                        <h3
                            class="text-[30px] lg:text-[27px] sm:text-[24px] xxs:text-[22px] font-medium text-etBlack mb-[10px] sm:text-[24px] sm:my-[15px]">
                            Harmony Celebration</h3>

                        <p class="font-light text-[16px] text-etGray mb-[10px] sm:text-[12px]">Di bulan Oktober 2023, BPro merayakan Anniversary yang ke-26, dengan tema ‘Harmony Celebration’. Event ini dibalut dengan dresscode asik bergaya retro.</p>

                        <a href="<?php echo home_url() ?>/journal?journal-detail=harmony-celebration" class="text-etBlue text-[16px] hover:text-etBlue">Read More <span
                                class="pl-[5px]"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

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

            <!-- right sidebar -->
            <div class="right max-w-full w-[370px] lg:w-[360px] shrink-0 space-y-[30px] md:space-y-[25px]">
                <!-- search widget -->
                <div
                    class="border border-[#e5e5e5] rounded-[10px] px-[30px] xxs:px-[20px] pt-[30px] xxs:pt-[20px] pb-[40px] xxs:pb-[30px]">
                    <h4
                        class="font-medium text-[24px] xxs:text-[20px] text-etBlack relative mb-[5px] before:content-normal before:absolute before:left-0 before:-bottom-[5px] before:w-[50px] before:h-[2px] before:bg-etBlue">
                        Search</h4>

                    <!-- search form -->
                    <form action="#" class="border border-[#e5e5e5] rounded-[8px] flex h-[60px] px-[20px] mt-[30px]">
                        <input type="search" name="search" id="et-news-search"
                            class="w-full bg-transparent text-[16px] focus:outline-none" placeholder="Search here..">
                        <button type="submit" class="text-[16px] hover:text-etBlue"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>

                <!-- Categories widget -->
                <div
                    class="border border-[#e5e5e5] rounded-[10px] px-[30px] xxs:px-[20px] pt-[30px] xxs:pt-[20px] pb-[40px] xxs:pb-[30px]">
                    <h4
                        class="font-medium text-[24px] xxs:text-[20px] text-etBlack relative mb-[5px] before:content-normal before:absolute before:left-0 before:-bottom-[5px] before:w-[50px] before:h-[2px] before:bg-etBlue">
                        Categories</h4>

                    <ul class="mt-[30px] text-[16px]">
                        <li class="text-etBlack py-[16px] border-b border-t border-[#D9D9D9]">
                            <a href="#" class="flex items-center justify-between hover:text-etBlue">
                                <span>Talkshow Bpro</span>
                                <span>(4)</span>
                            </a>
                        </li>
                        <li class="text-etBlack py-[16px] border-b border-[#D9D9D9]">
                            <a href="#" class="flex items-center justify-between hover:text-etBlue">
                                <span>Gathering FA</span>
                                <span>(1)</span>
                            </a>
                        </li>
                        <li class="text-etBlack py-[16px] border-b border-[#D9D9D9]">
                            <a href="#" class="flex items-center justify-between hover:text-etBlue">
                                <span>BPro Anniversary</span>
                                <span>(1)</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Recent Post widget -->
                <div
                    class="border border-[#e5e5e5] rounded-[10px] px-[30px] xxs:px-[20px] pt-[30px] xxs:pt-[20px] pb-[40px] xxs:pb-[30px]">
                    <h4
                        class="font-medium text-[24px] xxs:text-[20px] text-etBlack relative mb-[5px] before:content-normal before:absolute before:left-0 before:-bottom-[5px] before:w-[50px] before:h-[2px] before:bg-etBlue">
                        Recent Post</h4>

                    <div class="posts mt-[30px] space-y-[24px]">
                        <!-- single post -->
                        <div class="flex items-center gap-[16px]">
                            <div class="rounded-[6px] w-[78px] h-[79px] overflow-hidden shrink-0">
                                <img class="img-recent" src="<?= get_template_directory_uri()?>/assets/new-img/gabungan.png" alt="Post Image">
                            </div>

                            <div>
                                <span class="date text-[14px] text-etGray sm:text-[12px] flex items-center gap-[12px] mb-[3px]">
                                    <span class="icon">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.6756 4.42875C15.5769 2.78656 14.2056 1.5 12.5541 1.5H11.75V0.875C11.75 0.70924 11.6842 0.550268 11.5669 0.433058C11.4497 0.315848 11.2908 0.25 11.125 0.25C10.9592 0.25 10.8003 0.315848 10.6831 0.433058C10.5659 0.550268 10.5 0.70924 10.5 0.875V1.5H5.50001V0.875C5.50001 0.70924 5.43416 0.550268 5.31695 0.433058C5.19974 0.315848 5.04077 0.25 4.87501 0.25C4.70924 0.25 4.55027 0.315848 4.43306 0.433058C4.31585 0.550268 4.25001 0.70924 4.25001 0.875V1.5H3.44594C1.79407 1.5 0.422818 2.78656 0.32438 4.42875C0.139068 7.5175 0.142505 10.6506 0.334693 13.7409C0.432193 15.3103 1.68938 16.5675 3.25875 16.665C4.83157 16.7628 6.41563 16.8116 7.99969 16.8116C9.58344 16.8116 11.1678 16.7628 12.7406 16.665C14.31 16.5675 15.5672 15.3103 15.6647 13.7409C15.8572 10.6522 15.8606 7.51937 15.6756 4.42875ZM14.4175 13.6634C14.3885 14.1191 14.1944 14.5487 13.8716 14.8716C13.5487 15.1944 13.1192 15.3885 12.6634 15.4175C9.56907 15.6097 6.43094 15.6097 3.33657 15.4175C2.88086 15.3885 2.45134 15.1944 2.12845 14.8716C1.80557 14.5487 1.61147 14.1191 1.58251 13.6634C1.43601 11.2785 1.40296 8.88803 1.48344 6.5H14.5169C14.5956 8.8875 14.5653 11.2884 14.4175 13.6634ZM4.87501 4C5.04077 4 5.19974 3.93415 5.31695 3.81694C5.43416 3.69973 5.50001 3.54076 5.50001 3.375V2.75H10.5V3.375C10.5 3.54076 10.5659 3.69973 10.6831 3.81694C10.8003 3.93415 10.9592 4 11.125 4C11.2908 4 11.4497 3.93415 11.5669 3.81694C11.6842 3.69973 11.75 3.54076 11.75 3.375V2.75H12.5541C13.5456 2.75 14.3688 3.52031 14.4278 4.50344C14.4425 4.75156 14.4488 5.00125 14.4609 5.25H1.53907C1.55157 5.00125 1.55751 4.75156 1.57219 4.50344C1.63126 3.52031 2.45407 2.75 3.44594 2.75H4.25001V3.375C4.25001 3.54076 4.31585 3.69973 4.43306 3.81694C4.55027 3.93415 4.70924 4 4.87501 4Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M4.875 10.25C5.39277 10.25 5.8125 9.83027 5.8125 9.3125C5.8125 8.79473 5.39277 8.375 4.875 8.375C4.35723 8.375 3.9375 8.79473 3.9375 9.3125C3.9375 9.83027 4.35723 10.25 4.875 10.25Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M8 10.25C8.51777 10.25 8.9375 9.83027 8.9375 9.3125C8.9375 8.79473 8.51777 8.375 8 8.375C7.48223 8.375 7.0625 8.79473 7.0625 9.3125C7.0625 9.83027 7.48223 10.25 8 10.25Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M4.875 13.375C5.39277 13.375 5.8125 12.9553 5.8125 12.4375C5.8125 11.9197 5.39277 11.5 4.875 11.5C4.35723 11.5 3.9375 11.9197 3.9375 12.4375C3.9375 12.9553 4.35723 13.375 4.875 13.375Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M11.125 10.25C11.6428 10.25 12.0625 9.83027 12.0625 9.3125C12.0625 8.79473 11.6428 8.375 11.125 8.375C10.6072 8.375 10.1875 8.79473 10.1875 9.3125C10.1875 9.83027 10.6072 10.25 11.125 10.25Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M11.125 13.375C11.6428 13.375 12.0625 12.9553 12.0625 12.4375C12.0625 11.9197 11.6428 11.5 11.125 11.5C10.6072 11.5 10.1875 11.9197 10.1875 12.4375C10.1875 12.9553 10.6072 13.375 11.125 13.375Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M8 13.375C8.51777 13.375 8.9375 12.9553 8.9375 12.4375C8.9375 11.9197 8.51777 11.5 8 11.5C7.48223 11.5 7.0625 11.9197 7.0625 12.4375C7.0625 12.9553 7.48223 13.375 8 13.375Z"
                                                class="fill-etBlue" />
                                        </svg>
                                    </span>
                                    <span>08 July, 2024</span>
                                </span>

                                <h6 class="font-medium text-[15px] text-etBlack"><a href="#"
                                        class="hover:text-etBlue">FA - FA Gabungan Bpro</a>
                                </h6>
                            </div>
                        </div>

                        <!-- single post -->
                        <div class="flex items-center gap-[16px]">
                            <div class="rounded-[6px] w-[78px] h-[79px] overflow-hidden shrink-0">
                                <img class="img-recent" src="<?= get_template_directory_uri()?>/assets/new-img/purpose.png" alt="Post Image">
                            </div>

                            <div>
                                <span class="date text-[14px] text-etGray sm:text-[12px] flex items-center gap-[12px] mb-[3px]">
                                    <span class="icon">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.6756 4.42875C15.5769 2.78656 14.2056 1.5 12.5541 1.5H11.75V0.875C11.75 0.70924 11.6842 0.550268 11.5669 0.433058C11.4497 0.315848 11.2908 0.25 11.125 0.25C10.9592 0.25 10.8003 0.315848 10.6831 0.433058C10.5659 0.550268 10.5 0.70924 10.5 0.875V1.5H5.50001V0.875C5.50001 0.70924 5.43416 0.550268 5.31695 0.433058C5.19974 0.315848 5.04077 0.25 4.87501 0.25C4.70924 0.25 4.55027 0.315848 4.43306 0.433058C4.31585 0.550268 4.25001 0.70924 4.25001 0.875V1.5H3.44594C1.79407 1.5 0.422818 2.78656 0.32438 4.42875C0.139068 7.5175 0.142505 10.6506 0.334693 13.7409C0.432193 15.3103 1.68938 16.5675 3.25875 16.665C4.83157 16.7628 6.41563 16.8116 7.99969 16.8116C9.58344 16.8116 11.1678 16.7628 12.7406 16.665C14.31 16.5675 15.5672 15.3103 15.6647 13.7409C15.8572 10.6522 15.8606 7.51937 15.6756 4.42875ZM14.4175 13.6634C14.3885 14.1191 14.1944 14.5487 13.8716 14.8716C13.5487 15.1944 13.1192 15.3885 12.6634 15.4175C9.56907 15.6097 6.43094 15.6097 3.33657 15.4175C2.88086 15.3885 2.45134 15.1944 2.12845 14.8716C1.80557 14.5487 1.61147 14.1191 1.58251 13.6634C1.43601 11.2785 1.40296 8.88803 1.48344 6.5H14.5169C14.5956 8.8875 14.5653 11.2884 14.4175 13.6634ZM4.87501 4C5.04077 4 5.19974 3.93415 5.31695 3.81694C5.43416 3.69973 5.50001 3.54076 5.50001 3.375V2.75H10.5V3.375C10.5 3.54076 10.5659 3.69973 10.6831 3.81694C10.8003 3.93415 10.9592 4 11.125 4C11.2908 4 11.4497 3.93415 11.5669 3.81694C11.6842 3.69973 11.75 3.54076 11.75 3.375V2.75H12.5541C13.5456 2.75 14.3688 3.52031 14.4278 4.50344C14.4425 4.75156 14.4488 5.00125 14.4609 5.25H1.53907C1.55157 5.00125 1.55751 4.75156 1.57219 4.50344C1.63126 3.52031 2.45407 2.75 3.44594 2.75H4.25001V3.375C4.25001 3.54076 4.31585 3.69973 4.43306 3.81694C4.55027 3.93415 4.70924 4 4.87501 4Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M4.875 10.25C5.39277 10.25 5.8125 9.83027 5.8125 9.3125C5.8125 8.79473 5.39277 8.375 4.875 8.375C4.35723 8.375 3.9375 8.79473 3.9375 9.3125C3.9375 9.83027 4.35723 10.25 4.875 10.25Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M8 10.25C8.51777 10.25 8.9375 9.83027 8.9375 9.3125C8.9375 8.79473 8.51777 8.375 8 8.375C7.48223 8.375 7.0625 8.79473 7.0625 9.3125C7.0625 9.83027 7.48223 10.25 8 10.25Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M4.875 13.375C5.39277 13.375 5.8125 12.9553 5.8125 12.4375C5.8125 11.9197 5.39277 11.5 4.875 11.5C4.35723 11.5 3.9375 11.9197 3.9375 12.4375C3.9375 12.9553 4.35723 13.375 4.875 13.375Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M11.125 10.25C11.6428 10.25 12.0625 9.83027 12.0625 9.3125C12.0625 8.79473 11.6428 8.375 11.125 8.375C10.6072 8.375 10.1875 8.79473 10.1875 9.3125C10.1875 9.83027 10.6072 10.25 11.125 10.25Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M11.125 13.375C11.6428 13.375 12.0625 12.9553 12.0625 12.4375C12.0625 11.9197 11.6428 11.5 11.125 11.5C10.6072 11.5 10.1875 11.9197 10.1875 12.4375C10.1875 12.9553 10.6072 13.375 11.125 13.375Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M8 13.375C8.51777 13.375 8.9375 12.9553 8.9375 12.4375C8.9375 11.9197 8.51777 11.5 8 11.5C7.48223 11.5 7.0625 11.9197 7.0625 12.4375C7.0625 12.9553 7.48223 13.375 8 13.375Z"
                                                class="fill-etBlue" />
                                        </svg>
                                    </span>
                                    <span>06 July, 2024</span>
                                </span>

                                <h6 class="font-medium text-[15px] text-etBlack"><a href="<?php echo home_url() ?>/journal?journal-detail=Gods-Purpose-in-Me"
                                        class="hover:text-etBlue">God's Purpose in Me</a></h6>
                            </div>
                        </div>

                        <!-- single post -->
                        <div class="flex items-center gap-[16px]">
                            <div class="rounded-[6px] w-[78px] h-[79px] overflow-hidden shrink-0">
                                <img class="img-recent" src="<?= get_template_directory_uri()?>/assets/new-img/the-calling.png" alt="Post Image">
                            </div>

                            <div>
                                <span class="date text-[14px] text-etGray sm:text-[12px] flex items-center gap-[12px] mb-[3px]">
                                    <span class="icon">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.6756 4.42875C15.5769 2.78656 14.2056 1.5 12.5541 1.5H11.75V0.875C11.75 0.70924 11.6842 0.550268 11.5669 0.433058C11.4497 0.315848 11.2908 0.25 11.125 0.25C10.9592 0.25 10.8003 0.315848 10.6831 0.433058C10.5659 0.550268 10.5 0.70924 10.5 0.875V1.5H5.50001V0.875C5.50001 0.70924 5.43416 0.550268 5.31695 0.433058C5.19974 0.315848 5.04077 0.25 4.87501 0.25C4.70924 0.25 4.55027 0.315848 4.43306 0.433058C4.31585 0.550268 4.25001 0.70924 4.25001 0.875V1.5H3.44594C1.79407 1.5 0.422818 2.78656 0.32438 4.42875C0.139068 7.5175 0.142505 10.6506 0.334693 13.7409C0.432193 15.3103 1.68938 16.5675 3.25875 16.665C4.83157 16.7628 6.41563 16.8116 7.99969 16.8116C9.58344 16.8116 11.1678 16.7628 12.7406 16.665C14.31 16.5675 15.5672 15.3103 15.6647 13.7409C15.8572 10.6522 15.8606 7.51937 15.6756 4.42875ZM14.4175 13.6634C14.3885 14.1191 14.1944 14.5487 13.8716 14.8716C13.5487 15.1944 13.1192 15.3885 12.6634 15.4175C9.56907 15.6097 6.43094 15.6097 3.33657 15.4175C2.88086 15.3885 2.45134 15.1944 2.12845 14.8716C1.80557 14.5487 1.61147 14.1191 1.58251 13.6634C1.43601 11.2785 1.40296 8.88803 1.48344 6.5H14.5169C14.5956 8.8875 14.5653 11.2884 14.4175 13.6634ZM4.87501 4C5.04077 4 5.19974 3.93415 5.31695 3.81694C5.43416 3.69973 5.50001 3.54076 5.50001 3.375V2.75H10.5V3.375C10.5 3.54076 10.5659 3.69973 10.6831 3.81694C10.8003 3.93415 10.9592 4 11.125 4C11.2908 4 11.4497 3.93415 11.5669 3.81694C11.6842 3.69973 11.75 3.54076 11.75 3.375V2.75H12.5541C13.5456 2.75 14.3688 3.52031 14.4278 4.50344C14.4425 4.75156 14.4488 5.00125 14.4609 5.25H1.53907C1.55157 5.00125 1.55751 4.75156 1.57219 4.50344C1.63126 3.52031 2.45407 2.75 3.44594 2.75H4.25001V3.375C4.25001 3.54076 4.31585 3.69973 4.43306 3.81694C4.55027 3.93415 4.70924 4 4.87501 4Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M4.875 10.25C5.39277 10.25 5.8125 9.83027 5.8125 9.3125C5.8125 8.79473 5.39277 8.375 4.875 8.375C4.35723 8.375 3.9375 8.79473 3.9375 9.3125C3.9375 9.83027 4.35723 10.25 4.875 10.25Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M8 10.25C8.51777 10.25 8.9375 9.83027 8.9375 9.3125C8.9375 8.79473 8.51777 8.375 8 8.375C7.48223 8.375 7.0625 8.79473 7.0625 9.3125C7.0625 9.83027 7.48223 10.25 8 10.25Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M4.875 13.375C5.39277 13.375 5.8125 12.9553 5.8125 12.4375C5.8125 11.9197 5.39277 11.5 4.875 11.5C4.35723 11.5 3.9375 11.9197 3.9375 12.4375C3.9375 12.9553 4.35723 13.375 4.875 13.375Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M11.125 10.25C11.6428 10.25 12.0625 9.83027 12.0625 9.3125C12.0625 8.79473 11.6428 8.375 11.125 8.375C10.6072 8.375 10.1875 8.79473 10.1875 9.3125C10.1875 9.83027 10.6072 10.25 11.125 10.25Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M11.125 13.375C11.6428 13.375 12.0625 12.9553 12.0625 12.4375C12.0625 11.9197 11.6428 11.5 11.125 11.5C10.6072 11.5 10.1875 11.9197 10.1875 12.4375C10.1875 12.9553 10.6072 13.375 11.125 13.375Z"
                                                class="fill-etBlue" />
                                            <path
                                                d="M8 13.375C8.51777 13.375 8.9375 12.9553 8.9375 12.4375C8.9375 11.9197 8.51777 11.5 8 11.5C7.48223 11.5 7.0625 11.9197 7.0625 12.4375C7.0625 12.9553 7.48223 13.375 8 13.375Z"
                                                class="fill-etBlue" />
                                        </svg>
                                    </span>
                                    <span>22 Juni, 2024</span>
                                </span>

                                <h6 class="font-medium text-[15px] text-etBlack"><a href="<?php echo home_url() ?>/journal?journal-detail=the-calling"
                                        class="hover:text-etBlue">The Calling</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MAIN CONTENT END -->
<?php endif ; ?>
<?php
get_footer('main');