<?php
/* Template Name: Submissions List */

if (!is_user_logged_in() || !(current_user_can('administrator') || current_user_can('panitia'))) {
    wp_redirect(home_url('/panitia-login'));
    exit;
}

get_header();
?>

<style>
    body {
        background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(10, 31, 56, 1) 26%, rgba(10, 31, 56, 1) 73%, rgba(0, 0, 0, 1) 100%);
        color: #fff;
    }

    .table-container {
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
    }

    table {
        width: 100%;
        color: #fff;
    }
</style>

<div class="container mt-5 table-container">
    <div class="text-start">
        <a href="/scanner" class="btn btn-secondary mb-5">
            < Back to Scanner</a>
    </div>
    <h2 class="text-center mb-4">Submissions List</h2>
    <?php
    $noconfirm = 0;
    $confirm = 0;
                $args = array(
                    'post_type' => 'submission',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                    $checked_in = get_post_meta(get_the_ID(), 'checked_in', true);
                    if($checked_in == "true"){
                    $confirm++;
                    }else{
                        $noconfirm++;          
                    }     
    ?>
<?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <tr>
                        <td colspan="6" class="text-center">No submissions found.</td>
                    </tr>
                <?php
                endif;
                ?>
    <p class="text-white">Confirmed: <?php echo $confirm; ?> & Not Confirmed: <?php echo $noconfirm; ?></p>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Confirmed?</th>
                    <th>Send Email</th>
                    <th>Send WhatsApp</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $args = array(
                    'post_type' => 'submission',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $name = get_the_title();
                        $email = get_post_meta(get_the_ID(), 'email', true);
                        $phone = get_post_meta(get_the_ID(), 'phone', true);
                        $checked_in = get_post_meta(get_the_ID(), 'checked_in', true);
                        $email_sent = get_post_meta(get_the_ID(), 'email_sent', true);
                        $button_text = $email_sent ? 'Send Email Again' : 'Send Email';

                        // Format phone number
                        $phone = format_phone_number_for_whatsapp($phone);

                        // // Construct the WhatsApp message
                        // $whatsapp_message = rawurlencode(
                        //     "*Invitation QR Code for DISCOVER CYBER SECURITY AND FINANCIAL TRAP*,\n " .
                        //         " *Name: $name*,\n" .
                        //         " *Email: $email*,\n" .
                        //         " *Phone: +$phone*,\n\n" .
                        //         " *QR Code:* " . get_permalink() . ",\n\n" .
                        //         " This message was automatically generated."
                        // );

                        // // Generate the WhatsApp URL
                        // $whatsapp_url = "https://api.whatsapp.com/send?phone=$phone&text=$whatsapp_message";

                        $whatsapp_message = rawurlencode("Shalom *" . $name . "*!\n Terima kasih telah mendaftarkan diri di event workshop “Discover Cyber Security & Financial Trap”. Pastikan kamu telah menerima QR code kepesertaan, atau silakan cek di email (Inbox atau Spam) yang didaftarkan. Kamu bisa menunjukkan QR code tersebut saat registrasi ulang di lokasi. See you there!\n\n Best Regards,\n
 *Bethany Professional*.");
                        $whatsapp_url = "https://api.whatsapp.com/send?phone=$phone&text=$whatsapp_message";

                ?>
                        <tr>
                            <td><?php echo esc_html($name); ?></td>
                            <td><?php echo esc_html($email); ?></td>
                            <td><?php echo esc_html($phone); ?></td>
                            <td><?php echo esc_html($checked_in === 'true' ? 'Yes' : 'No'); ?></td>
                            <td>
                                <button class="btn btn-primary send-email" data-post-id="<?php echo get_the_ID(); ?>"><?php echo $button_text; ?></button>
                            </td>
                            <td>
                                <a href="<?php echo esc_url($whatsapp_url); ?>" target="_blank" class="btn btn-success">Send WhatsApp</a>
                            </td>
                        </tr>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <tr>
                        <td colspan="6" class="text-center">No submissions found.</td>
                    </tr>
                <?php
                endif;
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        $(".send-email").on("click", function() {
            var post_id = $(this).data("post-id");
            var $button = $(this);

            $.ajax({
                url: ajax_params.ajax_url,
                type: "POST",
                data: {
                    action: "send_email",
                    post_id: post_id,
                },
                success: function(response) {
                    if (response.success) {
                        alert("Email sent successfully.");
                        $button.text("Send Email Again");
                    } else {
                        alert("Failed to send email.");
                    }
                },
            });
        });
    });
</script>

<?php
get_footer();
?>