<?php

/**
 * Template Name: Contact Template
 */

get_header('main'); ?>

<style>
    .font-light {
        font-size: 15px;
    }

    .hero-banner::before {
        content: '';
        background-color: rgb(0 13 131 / 0.7);
        height: 100%;
        width: 100%;
        top: 0;
        bottom: 0;
    }

    .custom-again input {
        height: 50px;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;
        font-size: 15px;
    }

    .custom-again label {
        font-size: 15px;
        margin-bottom: 0;
    }
    .custom-again textarea {
        font-size: 15px;
        margin-bottom: 0;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .custom-again .wpcf7-submit {
        height: 50px;
        padding: 10px;
        margin: 20px 0;
        border-radius: 10px;
        font-size: 15px;
    }

    .screen-reader-response {
        display: none;
    }

    span.wpcf7-not-valid-tip {
        color: red;
        font-size: 14px;
    }
</style>

<!-- BREADCRUMB SECTION START -->
<?php if(have_rows('hero_banner')) :?>
<?php while(have_rows('hero_banner')) : the_row();
    $hero_image = get_sub_field('hero_image');
    $hero_title = get_sub_field('hero_title');
?>
<section style="background-image:url('<?= ($hero_image != NULL) ? $hero_image : '' ?>'); background-size:cover; background-position:center" class="hero-banner et-breadcrumb bg-[#000D83] pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('<?= get_template_directory_uri()?>/assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]"><?= $hero_title ?></h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px] sm:text-[12px]">
            <li class="opacity-80"><a href="<?= home_url()?>/" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page"><?= the_title()?></li>
        </ul>
    </div>
</section>
<?php endwhile;?>
<?php endif;?>
<!-- BREADCRUMB SECTION END -->


<!-- CONTACT SECTION START -->
<div class="py-[120px] xl:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="grid grid-cols-2 md:grid-cols-1 gap-[60px] xl:gap-[40px] items-center">
            <!-- left side contact infos -->
            <div>
                <div class="bg-etBlue p-[40px] sm:p-[30px] space-y-[24px] text-[16px]">
                    <!-- single contact info -->
                    <div class="flex flex-wrap sm:flex-col xs:text-center items-center gap-[20px] pb-[20px] text-white border-b border-white/30 last:border-0 last:pb-0">
                        <span class="icon shrink-0 border border-dashed border-white rounded-full h-[62px] w-[62px] flex items-center justify-center">
                            <img src="<?= get_template_directory_uri()?>/assets/img/call-msg.svg" alt="icon">
                        </span>
                        <?php if(have_rows('contact_group')) :?>
                        <?php while(have_rows('contact_group')) : the_row();
                            $title = get_sub_field('title');
                            $phone_number = get_sub_field('phone_number');
                            $link_phone_number = get_sub_field('link_phone_number');
                        ?>
                            <div class="txt">
                                <span class="font-light"><?= $title ?></span>
                                <h4 class="font-semibold text-[12px]"><a href="<?= $link_phone_number ?>"><?= $phone_number ?></a></h4>
                            </div>
                        <?php endwhile;?>
                        <?php endif;?>
                    </div>
                    <!-- single contact info -->
                    <div class="flex flex-wrap sm:flex-col xs:text-center items-center gap-[20px] pb-[20px] text-white border-b border-white/30 last:border-0 last:pb-0">
                        <span class="icon shrink-0 border border-dashed border-white rounded-full h-[62px] w-[62px] flex items-center justify-center">
                            <img src="<?= get_template_directory_uri()?>/assets/img/mail.svg" alt="icon">
                        </span>
                        <?php if(have_rows('mail_group')) :?>
                        <?php while(have_rows('mail_group')) : the_row();
                            $title = get_sub_field('title');
                            $email = get_sub_field('email');
                            $link_email = get_sub_field('link_email');
                        ?>
                            <div class="txt">
                                <span class="font-light"><?= $title ?></span>
                                <h4 class="font-semibold text-[12px]"><a href="<?= $link_email ?>"><?= $email ?></a></h4>
                            </div>
                        <?php endwhile;?>
                        <?php endif;?>
                    </div>

                    <!-- single contact info -->
                    <div class="flex flex-wrap sm:flex-col xs:text-center items-center gap-[20px] pb-[20px] text-white border-b border-white/30 last:border-0 last:pb-0">
                        <span class="icon shrink-0 border border-dashed border-white rounded-full h-[62px] w-[62px] flex items-center justify-center">
                            <img src="<?= get_template_directory_uri()?>/assets/img/location-dot-circle.svg" alt="icon">
                        </span>
                        <?php if(have_rows('location_group')) :?>
                        <?php while(have_rows('location_group')) : the_row();
                            $title = get_sub_field('title');
                            $location = get_sub_field('location');
                        ?>
                            <div class="txt">
                                <span class="font-light"><?= $title ?></span>
                                <h4 class="font-semibold text-[12px]"><?= $location ?></h4>
                            </div>
                        <?php endwhile;?>
                        <?php endif;?>
                    </div>
                </div>

                <!-- video cover -->
                <div class="relative">
                    <?php
                        $iframe = get_field('iframe');
                    ?>
                    <?= $iframe ?>
                    <!-- <img src="<?= get_template_directory_uri()?>/assets/img/contact-video-cover.jpg" alt="video cover" class="w-full"> -->
                    <!-- <a href="https://youtu.be/6KmuL6RcdNA?si=s1RJZZwk6XcqZAwX" data-fslightbox class="video-btn-shadow w-[58px] aspect-square rounded-full bg-white text-[18px] text-etBlue flex items-center justify-center absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%]">
                        <i class="fa-solid fa-play"></i>
                    </a> -->
                </div>
            </div>

            <!-- right side contact form -->
            <div>
                <h2 class="text-[40px] md:text-[35px] sm:text-[30px] xxs:text-[28px] font-medium text-etBlack mb-[7px]"><?= the_field('head_title_form')?></h2>
                <p class="text-etGray font-light text-[16px] mb-[38px]"><?= the_field('description_form')?></p>

                <!-- <form action="#" class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] xs:gap-[20px] text-[16px]">
                    <div>
                        <label for="et-contact-name" class="font-lato font-semibold text-etBlack block mb-[12px]">Your Name*</label>
                        <input type="text" name="name" id="et-contact-name" placeholder="Your Name" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                    </div>
                    <div>
                        <label for="et-contact-email" class="font-lato font-semibold text-etBlack block mb-[12px]">Your Email*</label>
                        <input type="email" name="email" id="et-contact-email" placeholder="Your Email" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                    </div>
                    <div class="col-span-2 xxs:col-span-1">
                        <label for="et-contact-message" class="font-lato font-semibold text-etBlack block mb-[12px]">Your Message*</label>
                        <textarea name="message" id="et-contact-message" placeholder="Your Message" class="border border-[#ECECEC] h-[145px] p-[20px] rounded-[4px] w-full focus:outline-none"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-etBlue h-[55px] px-[24px] rounded-[10px] text-[16px] font-medium text-white hover:bg-etBlack">Send Message <span class="icon pl-[10px]"><i class="fa-solid fa-arrow-right-long"></i></span></button>
                    </div>
                </form> -->
                <div class="custom-again">
                    <?= do_shortcode('[contact-form-7 id="e432f6f" title="Contact form 1"]')?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT SECTION END -->


<!-- map -->

<?php
get_footer('main');
