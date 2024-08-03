<?php

/**
 * Template Name: Bible Template
 */

get_header('bible'); ?>

<iframe id="fullscreen-iframe" src="https://www.bible.com/reading-plans" allowfullscreen></iframe>
<script>
    const iframe = document.getElementById('fullscreen-iframe');

    function launchFullscreen(element) {
        if (element.requestFullscreen) {
            element.requestFullscreen();
        } else if (element.mozRequestFullScreen) {
            /* Firefox */
            element.mozRequestFullScreen();
        } else if (element.webkitRequestFullscreen) {
            /* Chrome, Safari & Opera */
            element.webkitRequestFullscreen();
        } else if (element.msRequestFullscreen) {
            /* IE/Edge */
            element.msRequestFullscreen();
        }
    }

    launchFullscreen(iframe);
</script>

<?php
get_footer('main');
