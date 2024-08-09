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
            $checked_in = get_post_meta(get_the_ID(), 'checked_in', true);
            $qr_code_url = get_post_meta(get_the_ID(), 'qr_code_url', true);
            $name = get_the_title();
            $email = get_post_meta(get_the_ID(), 'email', true);
            $phone = get_post_meta(get_the_ID(), 'phone', true);
        ?>
            <div id="card" class="card mx-auto" style="max-width: 600px;">
                <div class="card-body text-center">
                    <?php if ($checked_in === 'true') : ?>
                        <h5 class="card-title">Submission Details</h5>
                        <p class="card-text"><strong>Name:</strong> <?php echo esc_html($name); ?></p>
                        <p class="card-text"><strong>Email:</strong> <?php echo esc_html($email); ?></p>
                        <p class="card-text"><strong>Phone:</strong> <?php echo esc_html($phone); ?></p>
                        <h6 class="mb-0">You are already checked in!</h6>
                        <h4 class="fw-light mb-0">PROFESSIONAL WORKSHOP</h4>
                        <h3 class="fw-bold">DISCOVER CYBER SECURITY AND FINANCIAL TRAP</h3>
                    <?php else : ?>
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
                    <?php endif; ?>
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

    document.addEventListener('DOMContentLoaded', function() {
        const postId = <?php echo get_the_ID(); ?>; // Get the current post ID

        function checkStatus() {
            jQuery.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'check_submission_status',
                    post_id: postId
                },
                success: function(response) {
                    if (response.success && response.data.checked_in === 'true') {
                        // If checked in status is true, reload the page
                        window.location.reload();
                    }
                }
            });
        }

        // Check the status every 5 seconds
        setInterval(checkStatus, 5000);
    });
</script>

<!-- Include html2canvas library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<?php
get_footer();
