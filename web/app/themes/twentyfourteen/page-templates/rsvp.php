<?php

/**
 * Template Name: RSVP
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('rsvp'); ?>

<style>
    .opening p{
        color: #000;
        margin-bottom: 35px;
    }
</style>

<section id="opening" class="position-fixed w-100 top-0 left-0 vh-100 justify-content-center align-items-center" style="background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(10, 31, 56, 1) 26%, rgba(10, 31, 56, 1) 73%, rgba(0, 0, 0, 1) 100%); background-repeat: no-repeat; color: #fff; display: flex; z-index: 9999">
    <div class="text-center">
        <img src="https://b-pro.wit.id/demo/assets/img/logo-white.png" alt="" class="w-50 uk-animation-fade" />
        <div class="text-center w-100 uk-animation-fade">
            <button title="button" type="button" class="btn" onclick="handleClick()">
                <i class="fa-solid fa-envelope fa-3x text-white"></i>
                <i class="fa-solid fa-envelope-open-text fa-3x text-white" style="display: none;"></i>
            </button>
        </div>
    </div>
</section>

<audio class="d-none" id="audioPlay" src="<?= get_template_directory_uri() ?>/audio/audio.mp3"></audio>

<img class="position-absolute top-0 left-0 flag-img" src="<?= get_template_directory_uri() ?>/images/flag-1.png" alt="">

<section class="py-2 text-center uk-animation-fade">
    <img src="<?= get_template_directory_uri() ?>/images/logo.png" alt="Logo B-Pro">
</section>

<section class="my-5 text-center" uk-scrollspy="target: h4; cls: uk-animation-fade; delay: 500">
    <h4 class="fw-light"><?php the_field('category_event')?></h4>
    <h1 class="fw-bold"><?php the_field('title_event')?></h1>
</section>

<section class="my-5" uk-scrollspy="target: .animated; cls: uk-animation-fade; delay: 500">
    <div class="container">
        <div class="row mb-5">
            <?php if(have_rows('left_description')) :?>
                <?php while(have_rows('left_description')) : the_row();
                    $venue = get_sub_field('venue');
                    $location_venue = get_sub_field('location_venue');
                    $day_and_start_time = get_sub_field('day_and_start_time');
                ?>
                    <div class="col-6 ps-3 animated" style="border-right: 1px solid #fff;">
                        <div>
                            <h4 class="fw-bold mb-0"><?= $venue ?></h4>
                            <h4 class="fw-light"><?= $location_venue ?></h4>
                        </div>
                        <div>
                            <h4 class="fw-light"><?= $day_and_start_time ?></h4>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
            <div class="col-6 ps-3 animated">
            <?php if(have_rows('right_description')) :?>
                <?php while(have_rows('right_description')) : the_row(); 
                    $description = get_sub_field('description');
                ?>
                    <h3 class="fw-light"><?= $description ?></h3>
                <?php endwhile;?>
            <?php endif;?>
            </div>
        </div>
        <div class="row g-3 justify-content-center">
            <?php if(have_rows('speaker')) :?>
                <?php while(have_rows('speaker')) : the_row();
                    $profile_photo = get_sub_field('profile_photo');    
                    $name_speaker = get_sub_field('name_speaker');    
                    $position_speaker = get_sub_field('position_speaker');    
                    $small_description = get_sub_field('small_description');    
                ?>
                    <div class="col-12 col-md-6 animated">
                        <div class="d-flex gap-2 justify-content-start align-items-center">
                            <img class="object-fit-cover" src="<?= $profile_photo ?>" alt="Irfan Arsandi" width="150" height="150">
                            <div>
                                <h5 class="fw-bold mb-0"><?= $name_speaker ?></h5>
                                <h5 class="fw-light"><?= $position_speaker ?></h5>
                                <p><?= $small_description ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div>
        <div class="row my-5">
            <?php if(have_rows('commitment_fee')) :?>
                <?php while(have_rows('commitment_fee')) : the_row() ;
                    $title = get_sub_field('title');
                    $price = get_sub_field('price');
                ?>
                    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                        <div>
                            <p class="fw-light small-text mb-0">
                                <?= $title ?>
                            </p>
                            <p class="fw-bold small-text">
                                <?= $price ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif;?>
            <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                <div>
                    <div class="d-flex">
                        <p class="bg-white rounded text-primary py-2 px-2 small-text mb-0">
                            E-<strong>CERTIFICATE</strong>
                        </p>
                    </div>
                    <p class="fw-light small-text">
                        for participants
                    </p>
                </div>
            </div>
            <?php if(have_rows('registration')) : ?>
                <?php while(have_rows('registration')) : the_row() ;
                    $head_title = get_sub_field('registration_name');
                    $button_name = get_sub_field('registration_button_name');
                    $button_link = get_sub_field('registration_button_link');
                ?>
                    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                        <div>
                            <p class="fw-light small-text mb-0">
                                <?= $head_title ?>
                            </p>
                            <p class="fw-bold border border-1 border-white p-1 small-text">
                                <a class="text-decoration-none" href="<?= $button_link ?>"><?= $button_name ?></a>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif;?>
            <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                <div>
                    <div class="d-flex">
                        <p class="bg-white rounded text-primary py-2 px-2 fw-bold small-text">
                            LIMITED<br />
                            SEAT!!!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="position-relative" uk-scrollspy="target: .animated; cls: uk-animation-fade; delay: 500">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded shadow position-relative animated opening">
                <?php the_field('opening_and_description_event')?>
                <img class="position-absolute bottom-0 end-0 flag-img d-none" src="<?= get_template_directory_uri() ?>/images/flag-2.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="position-relative" style="background: url(<?php the_field('background_rundown')?>) top center no-repeat; background-size: cover;" uk-scrollspy="target: .animated; cls: uk-animation-fade; delay: 500">
    <div class="animated" style="position: absolute; left: 0; width: 80%; height: 100%; background-color: #39404fba; z-index: 1">
    </div>
    <div class="top-50 end-0 translate-middle-y shadow animated" style="position: absolute; width: 90%; height: 95%; background-color: #39404fba; z-index: 1">
    </div>
    <div class="container py-5 position-relative z-3">
        <div class="text-center">
            <h1 class="mb-5 fw-bold"><?php the_field('title_reservation')?></h1>
            <?php if(have_rows('rundown')) :?>
                <?php while(have_rows('rundown')) : the_row(); 
                    $layout_type = get_sub_field('layout_type');
                    $time = get_sub_field('time');
                    $title_session = get_sub_field('title_session');
                    $session_name_event = get_sub_field('session_name_event');
                ?>
                    <?php if($layout_type == 'without-session-name-event') :?>
                        <div class="rundown-without-description">
                            <h4 class="fw-bold"><?= $time ?></h4>
                            <h4 class="mb-5 fw-bold"><?= $title_session ?></h4>
                        </div>
                    <?php else :?>
                        <div class="rundown-with-description">
                            <h4 class="fw-bold"><?= $time ?></h4>
                            <h4 class="fw-bold"><?= $title_session ?></h4>
                            <h4 class="fw-light mb-5">
                                <?= $session_name_event ?>
                            </h4>
                        </div>
                    <?php endif;?>
                <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
</section>

<section class="position-relative" uk-scrollspy="target: .animated; cls: uk-animation-fade; delay: 500">
    <div class="container pt-5 py-2">
        <div class="text-center animated">
            <h1 class="mb-5">REGISTRATION</h1>
            <form id="submissionForm" class="mb-5">
                <?php wp_nonce_field('submit_form', 'form_nonce'); ?>
                <div class="row g-4 text-center justify-content-center">

                    <div class="col-10">
                        <h4 class="fw-light mb-0 text-center">Name</h4>
                        <input name="name" class="bg-white border-none rounded w-100" type="text">
                    </div>
                    <div class="col-10">
                        <h4 class="fw-light mb-0 text-center">E-mail</h4>
                        <input name="email" class="bg-white border-none rounded w-100" type="email">
                    </div>
                    <div class="col-10">
                        <h4 class="fw-light mb-0 text-center">Phone No.</h4>
                        <input name="phone" class="bg-white border-none rounded w-100" type="text">
                    </div>
                    <!-- <div class="col-10 d-flex justify-content-center">
                        <div class="g-recaptcha" data-sitekey="6Ld0hyIqAAAAACEprRYsHLDXoGHpFDOFY22Qg3f0"></div>
                    </div> -->
                    <div class="col-10">
                        <h4 class="fw-light">
                            <?php the_field('informational_form_contact')?>
                        </h4>
                    </div>
                    <div class="col-10">
                        <button type="submit" class="bg-danger p-2 w-100 text-center text-white d-flex align-items-center justify-content-center" id="submitBtn">
                            <span id="submitText">Submit</span>
                            <div id="spinner" class="spinner-border text-light ms-2" role="status" style="display: none;">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </div>
                </div>
            </form>

            <div class="d-flex justify-content-between align-items-end">
                <div>
                    <h2 class="fw-light mb-0">Hotline B-Pro</h2>
                    <a href="tel:081131166111" class="text-decoration-none">
                        <h2 class="fw-bold">0811-3116-6111</h2>
                    </a>
                </div>
                <div>
                    <div class="d-flex justify-content-center align-items-center gap-3">
                        <div class="border border-1 border-white rounded-circle px-2 py-1">
                            <a href="https://www.tiktok.com/@b.pro.manyar"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                        <div class="border border-1 border-white rounded-circle px-2 py-1">
                            <a href="https://www.instagram.com/b.pro.manyar/"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="border border-1 border-white rounded-circle px-2 py-1">
                            <a href="https://www.facebook.com/profile.php?id=100067809792113"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black" id="successModalLabel">Submission Successful</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-black">
                Your submission was successful!
            </div>
            <div class="modal-footer text-black">
                <button type="button" class="btn btn-primary" id="successOkButton">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black" id="errorModalLabel">Submission Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-black">
                There was an error with your submission. Please try again.
            </div>
            <div class="modal-footer text-black">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<section class="py-3 text-center">
    <small>© 2024 Bethany Professional Manyar</small>
</section>


<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<script>
    function handleClick() {
        // Change the envelope icon immediately
        var closedEnvelope = document.querySelector('.fa-envelope');
        var openEnvelope = document.querySelector('.fa-envelope-open-text');
        closedEnvelope.style.display = 'none';
        openEnvelope.style.display = 'inline';

        // Wait 0.5 seconds before starting the opacity transition
        setTimeout(function() {
            // Change the opacity of the section with transition
            var openingSection = document.getElementById('opening');
            openingSection.style.transition = 'opacity 1s';
            openingSection.style.opacity = '0';

            setTimeout(() => {
                openingSection.style.display = 'none';
            }, 500);
            // Play the audio
            var audio = document.getElementById('audioPlay');
            audio.play();
        }, 500);
    }
</script>
<?php
get_footer();
