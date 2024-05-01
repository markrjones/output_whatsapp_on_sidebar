function display_whatsapp_button_above_sidebar(){
    $wa_number = get_post_meta(get_the_ID(), '_whatsapp', true);
    $wa_link = 'https://wa.me/' . $wa_number;
    ?>
    <a href=<?php echo $wa_link; ?>>
        <div class="verified-badge">
            <i class="sl sl-icon-check"></i> Chat on Whatsapp
        </div>
    </a>
    <?php
}
add_action( 'listeo/single-listing/sidebar-start', 'display_whatsapp_button_above_sidebar');
