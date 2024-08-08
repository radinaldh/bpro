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
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Confirmed?</th>
                    <th>Send Email</th>
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
                ?>
                        <tr>
                            <td><?php echo esc_html($name); ?></td>
                            <td><?php echo esc_html($email); ?></td>
                            <td><?php echo esc_html($phone); ?></td>
                            <td><?php echo esc_html($checked_in === 'true' ? 'Yes' : 'No'); ?></td>
                            <td>
                                <button class="btn btn-primary send-email" data-post-id="<?php echo get_the_ID(); ?>"><?php echo $button_text; ?></button>
                            </td>
                        </tr>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <tr>
                        <td colspan="5" class="text-center">No submissions found.</td>
                    </tr>
                <?php
                endif;
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
get_footer();
?>