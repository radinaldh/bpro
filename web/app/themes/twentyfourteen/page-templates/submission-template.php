<?php

get_header('rsvp'); ?>

<style>
    .qr-image {
        width: 300px;
        height: 300px;
    }
</style>

<section class="py-5 vh-100 d-flex align-items-center">
    <div class="container">
        <?php if (get_post_type() == 'submission') :
            $qr_code_url = get_post_meta(get_the_ID(), 'qr_code_url', true);
            $name = get_the_title();
            $email = get_post_meta(get_the_ID(), 'email', true);
            $phone = get_post_meta(get_the_ID(), 'phone', true);
        ?>
            <div id="card" class="card mx-auto" style="max-width: 600px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Submission Details</h5>
                    <p class="card-text"><strong>Name:</strong> <?php echo esc_html($name); ?></p>
                    <p class="card-text"><strong>Email:</strong> <?php echo esc_html($email); ?></p>
                    <p class="card-text"><strong>Phone:</strong> <?php echo esc_html($phone); ?></p>
                    <div class="d-flex justify-content-center">
                        <img class="qr-image" src="<?php echo esc_url($qr_code_url); ?>" alt="QR Code" />
                    </div>
                    <div class="mt-3 text-center">
                        <button id="downloadCardBtn" class="btn btn-secondary">Download Card as Image</button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
    document.getElementById('downloadCardBtn').addEventListener('click', function() {
        const card = document.getElementById('card');
        const downloadButton = document.getElementById('downloadCardBtn');

        // Hide the download button before capturing
        downloadButton.style.display = 'none';

        html2canvas(card, {
            useCORS: true, // Enable cross-origin image loading
            logging: true, // Enable logging for debugging
            onclone: (documentClone) => {
                documentClone.getElementById('downloadCardBtn').style.display = 'none';
            }
        }).then(canvas => {
            // Restore the download button after capturing
            downloadButton.style.display = 'block';

            const link = document.createElement('a');
            link.href = canvas.toDataURL('image/png');
            link.download = 'Submission_Card.png';
            link.click();
        });
    });
</script>

<!-- Include html2canvas library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<?php
get_footer();
