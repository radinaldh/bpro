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
    margin-right: 10px;
    background: #18377e;
    color: #fff;
    padding: 14px;
    border-radius: 100%;
}

.et-single-accordion-item__body a {
    font-size: 15px;
    font-weight: 500;
}

.et-single-accordion-item__body p {
    display: flex;
    flex-direction: column;
    gap: 10px;
}


.hero-banner::before {
    content: '';
    background-color: rgb(0 13 131 / 0.7);
    height: 100%;
    width: 100%;
    top: 0;
    bottom: 0;
}
</style>



<!-- BREADCRUMB SECTION START -->
<?php if ( have_rows( 'section_header' ) ) : ?>
<?php while ( have_rows( 'section_header' ) ) : the_row(); ?>
<section style="background-image:url('<?php the_sub_field( 'background_image' ); ?>'); background-size:cover; background-position:center" class="hero-banner et-breadcrumb pt-[210px] lg:pt-[190px] sm:pt-[160px] pb-[130px] lg:pb-[110px] sm:pb-[80px] relative z-[1] before:absolute before:inset-0 before:bg-[url('<?= get_template_directory_uri(); ?>/assets/img/breadcrumb-bg.jpg')] before:bg-no-repeat before:bg-cover before:bg-center before:-z-[1] before:opacity-30">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full text-center text-white">
        <h1 class="et-breadcrumb-title font-medium text-[56px] md:text-[50px] sm:text-[22px]">
            <?php the_sub_field( 'title' ); ?></h1>
        <ul class="inline-flex items-center gap-[10px] font-medium text-[16px]">
            <li class="opacity-80"><a href="index-2.html" class="hover:text-etBlue">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i></li>
            <li class="current-page"><?php the_sub_field( 'title' ); ?></li>
        </ul>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!-- BREADCRUMB SECTION END -->


<!-- FAQ SECTION START -->
<?php if ( have_rows( 'section_dropdown' ) ) : ?>
	<?php while ( have_rows( 'section_dropdown' ) ) : the_row(); ?>
<section class="et-faq py-[130px] xl:py-[80px] md:py-[60px]">
    <div
        class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <!-- heading -->
        <div class="text-center mb-[52px] xl:mb-[42px] md:mb-[32px]">
            <h6 class="et-section-sub-title"><?php the_sub_field( 'tag' ); ?></h6>
            <h2 class="et-section-title"><?php the_sub_field( 'title' ); ?></h2>
        </div>

        <!-- faq section -->
        <div class="grid grid-cols-1 sm:grid-cols-1 gap-[30px]">
            <div class="et-accordion space-y-[16px]">
            <?php if ( have_rows( 'accordion' ) ) : ?>
                <?php while ( have_rows( 'accordion' ) ) : the_row(); ?>
                <!-- single question -->
                <div class="et-single-accordion-item bg-white border border-[#E5E5E5] rounded-[8px] py-[24px] xs:py-[15px] px-[30px] xs:px-[20px] ">
                    <div class="et-single-accordion-item__header flex items-center justify-between cursor-pointer">
                        <h3 class="et-single-accordion-item__title font-semibold text-[20px] text-etBlack"><?php the_sub_field( 'title_accordion' ); ?>
                        </h3>
                        <span class="text-[15px]"><i class="fa-solid fa-angles-right"></i></span>
                    </div>

                    <?php if ( have_rows( 'content_accordion' ) ) : ?>
                        <?php while ( have_rows( 'content_accordion' ) ) : the_row(); ?>
                    <div class="et-single-accordion-item__body">
                        <p class="font-light text-[20px]">
                        <?php if ( have_rows( 'button_download' ) ) : ?>
							<?php while ( have_rows( 'button_download' ) ) : the_row(); ?>
                            <a href="<?php the_sub_field( 'link_button' ); ?>" target="_blank"><i class="fa-solid fa-download"></i>
                                <?php the_sub_field( 'title_button' ); ?> </a>
                            <?php endwhile; ?>
                            <?php else : ?>
                                 <?php // No rows found ?>
                        </p>
						<?php endif; ?>
                    </div>
                    <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
                </div>
                <?php endwhile; ?>
		<?php else : ?>
			<?php // No rows found ?>
		<?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<script src="<?= get_template_directory_uri()?>/assets/js/accordion.js"></script>
<?php get_footer('main');?>