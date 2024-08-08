<?php

/**
 * Template Name: RSVP
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('rsvp'); ?>

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
    <h4 class="fw-light">PROFESSIONAL WORKSHOP</h4>
    <h1 class="fw-bold">DISCOVER CYBER SECURITY<br />AND FINANCIAL TRAP</h1>
</section>

<section class="my-5" uk-scrollspy="target: .animated; cls: uk-animation-fade; delay: 500">
    <div class="container">
        <div class="row mb-5">
            <div class="col-6 ps-3 animated" style="border-right: 1px solid #fff;">
                <div>
                    <h4 class="fw-bold mb-0">Awning Bethany Manyar </h4>
                    <h4 class="fw-light">Jl Manyar Rejo II No.36-38</h4>
                </div>
                <div>
                    <h4 class="fw-light">Saturday, August 17th 2024<br />
                        Start from 01.00 PM</h4>
                </div>
            </div>
            <div class="col-6 ps-3 animated">
                <h3 class="fw-light">
                    With<br />
                    Praise and<br />
                    Worship Night
                </h3>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-12 col-md-6 animated">
                <div class="d-flex gap-2 justify-content-start align-items-center">
                    <img class="object-fit-cover" src="<?= get_template_directory_uri() ?>/images/irfan.png" alt="Irfan Arsandi" width="150" height="150">
                    <div>
                        <h5 class="fw-bold mb-0">Irfan Arsandi</h5>
                        <h5 class="fw-light">CEO WIT.ID</h5>
                        <p>Digital Transformation: How<br />
                            Technology is Reshaping Industries<br />
                            & Cyber Security Case in Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 animated">
                <div class="d-flex gap-2 justify-content-start align-items-center">
                    <img class="object-fit-cover" src="<?= get_template_directory_uri() ?>/images/juhono.png" alt="Irfan Arsandi" width="150" height="150">
                    <div>
                        <h5 class="fw-bold mb-0">Juhono S. Sudirgo, CFP, QWP, AEPP</h5>
                        <h5 class="fw-light">Financial Planner</h5>
                        <p>Smart Financial Management: The Trap<br />
                            of Online Gambling and Instant Loans</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="row my-5">
            <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                <div>
                    <p class="fw-light small-text mb-0">
                        Commitment Fee
                    </p>
                    <p class="fw-bold small-text">
                        Rp. 50.000
                    </p>
                </div>
            </div>
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
            <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                <div>
                    <p class="fw-light small-text mb-0">
                        REGISTRATION
                    </p>
                    <p class="fw-bold border border-1 border-white p-1 small-text">
                        <a class="text-decoration-none" href="bit.ly/bproevent">BIT.LY/BPROEVENT</a>
                    </p>
                </div>
            </div>
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
            <div class="col-10 bg-white rounded shadow position-relative animated">
                <h5 class="fw-light py-5 text-dark">
                    Shallom profesional muda, <br /> <br />
                    Dengan penuh semangat dan rasa syukur, kami ingin menginformasikan kepada Anda bahwa Bethany Professional (BPro) akan mengadakan workshop dengan topik yang relevan dengan keseharian kita, yaitu kemajuan teknologi dan financial. <br /> <br />
                    Seiring dengan pesatnya perkembangan di dunia teknologi dan financial, muncul berbagai ilmu dan informasi baru hampir setiap hari. Hal ini menuntut kita, sebagai para profesional muda untuk selalu siap dan tanggap menghadapi perubahan. <br /> <br />
                    Untuk itu, BPro ingin memfasilitasi Anda dalam menambah wawasan dan memperluas perspektif melalui workshop ini, agar Anda lebih siap dan diperlengkapi dalam menghadapi tantangan dunia profesional yang terus berkembang. <br /> <br />
                    Kami mengundang Anda untuk bergabung dalam acara <strong>"Professional Workshop"</strong> yang disertai dengan <strong>"Praise & Worship Night"</strong>. Kami berharap event ini dapat memberi manfaat dan membantu dalam perjalanan profesional Anda. <br /> <br />
                    Terima kasih.<br /> Tuhan Yesus memberkati <br />
                    <img class="my-2" src="<?= get_template_directory_uri() ?>/images/logo.png" alt="Logo B-Pro"><br />
                    Be Success, Be Profesional.
                </h5>
                <img class="position-absolute bottom-0 end-0 flag-img d-none" src="<?= get_template_directory_uri() ?>/images/flag-2.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="position-relative" style="background: url(<?= get_template_directory_uri() ?>/images/bg.jpg) top center no-repeat; background-size: cover;" uk-scrollspy="target: .animated; cls: uk-animation-fade; delay: 500">
    <div class="animated" style="position: absolute; left: 0; width: 80%; height: 100%; background-color: #39404fba; z-index: 1">
    </div>
    <div class="top-50 end-0 translate-middle-y shadow animated" style="position: absolute; width: 90%; height: 95%; background-color: #39404fba; z-index: 1">
    </div>
    <div class="container py-5 position-relative z-3">
        <div class="text-center">
            <h1 class="mb-5 fw-bold">EVENT RUNDOWN</h1>
            <h4 class="fw-bold">13.00 - 13.30</h4>
            <h4 class="mb-5 fw-bold">Re-Registration</h4>
            <h4 class="fw-bold">13.30 - 15.00</h4>
            <h4 class="fw-bold">Session 1</h4>
            <h4 class="fw-light mb-5">
                <i>Digital Transformation: <br /> How Technology is Reshaping Industries & <br /> Cyber Security Case in Indonesia</i>
            </h4>
            <h4 class="fw-bold">15.00 - 15.30</h4>
            <h4 class="fw-bold mb-5">Coffee Break</h4>
            <h4 class="fw-bold">15.30 - 17.00</h4>
            <h4 class="fw-bold">Session 2</h4>
            <h4 class="fw-light mb-5">
                <i>Smart Financial Management: <br /> The Trap of Online Gambling and <br /> Instant Loans</i>
            </h4>
            <h4 class="fw-bold">17.00 - 17.30</h4>
            <h4 class="fw-bold mb-5">Coffee Break</h4>
            <h4 class="fw-bold">17.30 - 19.00</h4>
            <h4 class="fw-bold">Praise & Worship Night</h4>
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
                    <div class="col-10">
                        <h4 class="fw-light">
                            Pembayaran commitment fee dapat ditransfer melalui <br />
                            Rek BCA 4700385405 a.n Aprilliawati Wahyuni Sanjaya PP
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
                            <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                        <div class="border border-1 border-white rounded-circle px-2 py-1">
                            <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="border border-1 border-white rounded-circle px-2 py-1">
                            <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
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
                <h5 class="modal-title" id="successModalLabel">Submission Successful</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Your submission was successful!
            </div>
            <div class="modal-footer">
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
                <h5 class="modal-title" id="errorModalLabel">Submission Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                There was an error with your submission. Please try again.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<section class="py-3 text-center">
    <small>© 2024 Bethany Professional Manyar</small>
</section>


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
