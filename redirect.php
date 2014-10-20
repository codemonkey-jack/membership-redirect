<?php

add_action('init', 'redirect_to_registration', 0);

function redirect_to_registration() {
   if (isset($_GET['action']) && $_GET['action'] == 'validatepage1') {
       wp_redirect(site_url('/registration-complete/'));
       exit;
   }
}
?>
