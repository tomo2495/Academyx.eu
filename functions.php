<?php
/**
 * graviti functions and definitions
 *
 * @package graviti
 * @since graviti 1.0
 */

    require get_template_directory() . '/functions/graviti-setup.php';
    require get_template_directory() . '/functions/widget-zones.php';
    require get_template_directory() . '/functions/template-functions.php';
    require get_template_directory() . '/functions/styles-scripts.php';
    require get_template_directory() . '/functions/bs4navwalker.php';
    require get_template_directory() . '/functions/theme-options.php';
     require get_template_directory() . '/functions/custom_login.php';


   add_action('wp_head', 'add_google_analytics');
function add_google_analytics() { ?>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-4591974-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-4591974-8');
</script>
<?php } 



add_action('wp_head', 'add_google_tag');
function add_google_tag() { ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MX8ZDKL');</script>
<!-- End Google Tag Manager -->
<?php }


add_action('after_body', 'add_google_tag2');
function add_google_tag2() { ?>
<!-- Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
<?php }

add_action('wp_head', 'add_fb_pixel');
function add_fb_pixel() { ?>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '287977948354379');
  fbq('track', 'PageView');
</script>

<!-- End Facebook Pixel Code -->
<?php }


add_action('wp_head', 'add_mailchimp');
function add_mailchimp() { ?>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/31367536041ac24d66499e2d2/6193c11953ffa9cedf496b12e.js");</script>


<?php }
