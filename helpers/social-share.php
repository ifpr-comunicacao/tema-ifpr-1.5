<?php
/**
 * Social Share
 * @link http://crunchify.me/1VIxAsz
 */
function ifpr_social_sharing() {
    // Get current page Title
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
    
    // Get current page URL
    $url = urlencode(get_the_permalink());

    /* Get the current post Image Thumbnail */
    $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
    if ( empty($media) ){ $media = 'https://reitoria.ifpr.edu.br/wp-content/uploads/2019/08/ifpr-default.jpg'; }

    // Construct sharing URL without using any script
    $twitter = 'https://twitter.com/intent/tweet?text='.$title.'&amp;url='.$url.'&amp';
    $facebook = 'https://www.facebook.com/sharer/sharer.php?u='.$url;
    $whatsapp = 'whatsapp://send?text='.$title.'&nbsp;'.$url;
    $linkedIn = 'https://www.linkedin.com/shareArticle?mini=true&url='.$url.'&amp;title='.$title;

    // Add sharing button at the end of page/page content
    $tw_content     = '<h6><i class="fas fa-share-square"></i> Compartilhe</h6> <a class="crunchify-link crunchify-twitter" href="'.$twitter.'" target="_blank"><i class="fab fa-twitter-square"></i> Twitter</a>';
    $fb_content     = '<a class="crunchify-link crunchify-facebook" href="'.$facebook.'" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a>';
    $whats_content  = '<a class="crunchify-link crunchify-whatsapp" href="'.$whatsapp.'" target="_blank"><i class="fab fa-whatsapp-square"></i> WhatsApp</a>';
    $linke_content  = '<a class="crunchify-link crunchify-linkedin" href="'.$linkedIn.'" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>';

    $content = $tw_content . $fb_content . $whats_content . $linke_content;

    return $content;
}