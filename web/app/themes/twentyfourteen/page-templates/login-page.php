<?php
/* Template Name: Panitia Login */

if (is_user_logged_in()) {
    wp_redirect(home_url('/scanner'));
    exit;
}

$error_message = '';

if (isset($_POST['log']) && isset($_POST['pwd'])) {
    $credentials = array(
        'user_login'    => sanitize_text_field($_POST['log']),
        'user_password' => sanitize_text_field($_POST['pwd']),
        'remember'      => true
    );

    $user = wp_signon($credentials, false);

    if (is_wp_error($user)) {
        $error_message = $user->get_error_message();
    } else {
        $user = get_userdata($user->ID);
        if (in_array('administrator', $user->roles)) {
            wp_logout();
            $error_message = 'Wrong credentials.';
        } else {
            $token = bin2hex(random_bytes(16));
            update_user_meta($user->ID, 'login_token', $token);
            echo "<script>
                localStorage.setItem('loginToken', '$token');
                window.location.href = '" . home_url('/scanner') . "';
            </script>";
            exit;
        }
    }
}
get_header();
?>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(10, 31, 56, 1) 26%, rgba(10, 31, 56, 1) 73%, rgba(0, 0, 0, 1) 100%);
        color: #fff;
    }

    .login-form {
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        width: 100%;
    }

    .error-message {
        color: red;
    }

    @media screen and (max-width: 700px) {
        main {
            width: 100% !important;
        }
    }
</style>

<div class="login-form">
    <h2 class="text-center">Bethany Professional</h2>
    <?php if (!empty($error_message)) : ?>
        <p class="error-message text-center"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="log" id="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="pwd" id="password" class="form-control" required>
        </div>
        <div class="d-grid">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
    </form>
</div>

<?php
get_footer();
?>