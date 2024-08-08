<?php

/**
 * Template Name: Journal Detail Template
 */

get_header('main');
?>

<style>
    .left p {
    font-weight: 300;
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 30px;
    text-align: justify;
    }

    .left ul {
    margin-bottom: 30px;
    text-align: justify;
    list-style-type: disc;
    margin-left: 30px;
}

.left ul li {
    font-size: 16px;
}
</style>

<!-- BREADCRUMB SECTION START -->
<section
    class="et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]"><?php the_title();?></h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px] sm:text-[12px]">
            <li class="opacity-80"><a href="<?= home_url()?>/" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page"><?php the_title();?></li>
        </ul>
    </div>
</section>
<!-- BREADCRUMB SECTION END -->

<!-- main content -->
<div class="et-event-details-content py-[130px] lg:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="flex gap-[30px] lg:gap-[20px] md:flex-col md:items-center">
            <!-- left content -->
            <div class="left">
                <!-- img -->
                <div class="relative rounded-[8px] overflow-hidden">
                    <img width="100%" src="<?php the_post_thumbnail_url();?>"
                        alt="event-details-img">
                    <!-- hall number tag -->
                    <!-- <span
                        class="absolute top-[20px] left-[20px] bg-etBlue rounded-[6px] text-white px-[12px] py-[5px] inline-block font-normal text-[16px]">Hall
                        No: 59</span> -->
                </div>

                <!-- txt -->
                <div>
                    <h4 class="text-[30px] xs:text-[25px] xxs:text-[22px] font-medium text-etBlack mb-[11px] mt-[27px]">
                        <?php the_title();?></h4>

                    <?php the_content();?>
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

<?php get_footer('main'); ?>