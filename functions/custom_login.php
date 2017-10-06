<?php

/**
 * Check if $_GET or $_POST isset in order to assign it to a variable
 *
 * @package WPJobster
 * @subpackage Jobster
 * @since Jobster v3.5.0
 */

class WPJ_Form {
    static function get( $key,  $default_value = '' ) {
        return isset( $_GET[$key] ) ? trim( $_GET[$key] ) : $default_value;
    }
    static function post( $key,  $default_value = '' ) {
        return isset( $_POST[$key] ) ? trim( $_POST[$key] ) : $default_value;
    }
} ?><?php
//------------------------------------------------
//
//   (c) graviti
//   URL: http://graviti.com/
//
//  Custom Login Register
//
//------------------------------------------------


function graviti_custom_login_header()
{
    get_header();
}

add_action('login_head', 'graviti_custom_login_header');


function graviti_custom_login_footer()
{   
    ?>
    <div class="login-links">
        <div class="row">
            <div class="col-6">
                <a href="/wp-login.php?action=forgot-password">Zabudol som heslo</a>
            </div>
            <div class="col-6 text-right">
                <a href="/wp-login.php?action=register">Registrácia</a>
            </div>
        </div>
    </div>
    
    <?php get_footer();?>
    <script>
        $("#login form p label").contents().filter(function () {
            return this.nodeType === 3;
        }).remove();

         $("#user_login").attr("placeholder", "<?php echo addslashes(__('Používateľské meno', 'graviti')); ?>");
        $("#user_email").attr("placeholder", "<?php echo addslashes(__('Email', 'graviti')); ?>");
        $("#user_pass").attr("placeholder", "<?php echo addslashes(__('Heslo', 'graviti')); ?>");
        $("#user_password").attr("placeholder", "<?php echo addslashes(__('Heslo', 'graviti')); ?>");
        $("#user_confirm_password").attr("placeholder", "<?php echo addslashes(__('Potvrdte heslo', 'graviti')); ?>");

        $('#login > h1').remove();
        $('#login > #backtoblog').remove();
        $('#login > #nav').remove();
        $('#login .forgetmenot').remove();
        $('#login #reg_passmail').remove();
        
        $('#loginform').parent().siblings('.login-links').show();
        
        $('input').not('input[type="submit"]').each(function(){
            $(this).addClass('form-control');
        });
        $('input[type="submit"]').each(function(){
            $(this).addClass('btn');
            $(this).addClass('btn-primary');
        });
        
        if (($(window).width()) < 768){
            $('footer').removeClass('footer-fixed');
        }
    </script>
    <?php
}

add_action('login_footer', 'graviti_custom_login_footer');


function graviti_login_form_extra_fileds()
{
    ?>


    <div id="divider_login" style="text-align: center; clear: both;">
        <div class="divider">
            <span><?php _e('or', 'graviti'); ?></span>
        </div>

        <?php do_action('wordpress_social_login'); ?>

        <br/><a class=""
                href="<?php bloginfo('wpurl'); ?>/wp-register.php"><?php _e('Are you a member?', 'graviti'); ?></a>
    </div>

    <?php
}

add_action('socialne_siete_login', 'graviti_login_form_extra_fileds');


function graviti_custom_login_form_message()
{
    return " ";
}

add_filter('login_message', 'graviti_custom_login_form_message');


function graviti_register_form_extra_fileds()
{
    $user_pass = WPJ_Form::post('user_password');
    $user_confirm_password = WPJ_Form::post('user_confirm_password');
    ?>
    <p>
        <input type="password" name="user_password" id="user_password" size="30" maxlength="100"
               placeholder="<?php echo addslashes(__('Heslo', 'graviti')); ?>"
               value="<?php echo $user_pass; ?>"/>
    </p>

    <p>
        <input type="password" name="user_confirm_password" id="user_confirm_password" size="30" maxlength="100"
               placeholder="<?php echo addslashes(__('Potvdte heslo', 'graviti')); ?>"
               value="<?php echo $user_confirm_password; ?>"/>
    </p>


    <?php

}

add_action('register_form', 'graviti_register_form_extra_fileds', 1, 1);


function graviti_register_password_validation($errors)
{

    // Check the password
    if ($_POST['user_password'] == '') {
        $errors->add('empty_password', __('<strong>ERROR</strong>: Please enter a password.', 'graviti'));
    } elseif ($_POST['user_password'] != $_POST['user_confirm_password']) {
        $errors->add('confirm_password', __('<strong>ERROR</strong>: Passwords do not match', 'graviti'));
    }

    return $errors;
}

add_filter('registration_errors', 'graviti_register_password_validation', 10, 3);


function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function register_form_custom_password()
{
    $user_pass = WPJ_Form::post('user_password', '');
    if ($user_pass == '') {
        $user_pass = generateRandomString();
    }
    return $user_pass;
}

add_filter('random_password', 'register_form_custom_password');


function graviti_custom_login_redirect()
{
    return home_url();
}

add_filter('login_redirect', 'graviti_custom_login_redirect', 10, 3);


function graviti_custom_user_register($user_id)
{
    if ($user_id > 0) {
        update_user_meta($user_id, 'uz_email_verification', 0);
        $email_key = graviti_email_verification_init($user_id);
        graviti_registration_completed_functions($user_id);

        graviti_send_email_allinone_translated('user_new', $user_id, false, false, false, false, false, false, $email_key);
        graviti_send_sms_allinone_translated('user_new', $user_id, false, false, false, false, false, false, $email_key);

        graviti_send_email_allinone_translated('user_admin_new', 'admin', $user_id);
        graviti_send_sms_allinone_translated('user_admin_new', 'admin', $user_id);
    }
}

add_filter('user_register', 'graviti_custom_user_register');


remove_action('register_new_user', 'wp_send_new_user_notifications');
