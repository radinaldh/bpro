<?php

/**
 * Template Name: Makalah Mingguan
 */

get_header('main'); ?>

<style>
.img-right img {
    width: 100%;
}

.et-single-accordion-item__body i {
    font-size: 14px;
}

.et-single-accordion-item__body a {
    font-size: 14px;
}
</style>



<!-- BREADCRUMB SECTION START -->
<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('<?= get_template_directory_uri(); ?>/assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">Makalah</h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px]">
            <li class="opacity-80"><a href="index-2.html" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page">Makalah</li>
        </ul>
    </div>
</section>
<!-- BREADCRUMB SECTION END -->


<!-- FAQ SECTION START -->
<section class="et-faq py-[130px] xl:py-[80px] md:py-[60px]">
    <div
        class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <!-- heading -->
        <div class="text-center mb-[52px] xl:mb-[42px] md:mb-[32px]">
            <h6 class="et-section-sub-title">Makalah</h6>
            <h2 class="et-section-title">Makalah Mingguan</h2>
        </div>

        <!-- faq section -->
        <div class="grid grid-cols-2 sm:grid-cols-1 gap-[30px]">
            <div class="et-accordion space-y-[16px]">
                <!-- single question -->
                <div
                    class="et-single-accordion-item bg-white border border-[#E5E5E5] rounded-[8px] py-[24px] xs:py-[15px] px-[30px] xs:px-[20px] open">
                    <div class="et-single-accordion-item__header flex items-center justify-between cursor-pointer">
                        <h3 class="et-single-accordion-item__title font-semibold text-[20px] text-etBlack">Family Altar
                        </h3>
                        <span class="text-[15px]"><i class="fa-solid fa-angles-right"></i></span>
                    </div>

                    <div class="et-single-accordion-item__body">
                        <p class="font-light text-[20px]">Agustus 2024 <br>
                            <a href="https://drive.google.com/file/d/1ZjZGbw_K7SKCnPRieF21Nvc2kix2OmFg/view"
                                target="_blank"><i class="fa-solid fa-download"></i> Materi Minggu 1 - 5 Agustus
                                2024</a>
                            <br>
                        </p>
                    </div>
                </div>

                <!-- single question -->
                <div
                    class="et-single-accordion-item bg-white border border-[#E5E5E5] rounded-[8px] py-[24px] xs:py-[15px] px-[30px] xs:px-[20px]">
                    <div class="et-single-accordion-item__header flex items-center justify-between cursor-pointer">
                        <h3 class="et-single-accordion-item__title font-semibold text-[20px] text-etBlack">Youth
                            Cornerstone - Bethany Youth Community</h3>
                        <span class="text-[15px]"><i class="fa-solid fa-angles-right"></i></span>
                    </div>

                    <div class="et-single-accordion-item__body">
                        <p class="font-light text-[20px]">Agustus 2024 <br>
                            <a href="https://drive.google.com/file/d/1rngWutXYLP7ZbO0qG2ELB0WzYkajtt0g/view"
                                target="_blank"><i class="fa-solid fa-download"></i> Materi Minggu 1 - 5 Agustus
                                2024</a>
                            <br>
                            <a href="https://drive.google.com/file/d/19sVGKyvTk7k6hAqfNsp_V1kcLPT_7w8R/view"
                                target="_blank"><i class="fa-solid fa-download"></i> Materi Minggu 2 - 12 Agustus
                                2024</a>
                                <br>
                            <a href="https://drive.google.com/file/d/15MBIS1L3w5vqcoccUoD1NnVwCS5j2bOi/view"
                                target="_blank"><i class="fa-solid fa-download"></i> Materi Minggu 3 - 19 Agustus
                                2024</a>
                                <br>
                            <a href="https://drive.google.com/file/d/15MBIS1L3w5vqcoccUoD1NnVwCS5j2bOi/view"
                                target="_blank"><i class="fa-solid fa-download"></i> Materi Minggu 4 - 26 Agustus
                                2024</a>
                                <br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="img-right">
                <img src="<?= get_template_directory_uri()?>/assets/new-img/fa-bpro.png" alt="" srcset="">
            </div>
        </div>
    </div>
</section>


<script src="<?= get_template_directory_uri()?>/assets/js/accordion.js"></script>
<?php get_footer('main');?>im