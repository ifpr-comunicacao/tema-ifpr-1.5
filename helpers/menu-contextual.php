<?php
/* Menu páginas do mesmo nivel */
$siblings = wp_list_pages('title_li=&child_of=' . $post->post_parent . '&echo=0' . '&depth=1');
$has_siblings = wp_list_pages('title_li=&child_of=' . $post->post_parent . '&echo=0' . '&depth=1' . '&exclude=' . $post->ID);
$has_menu = get_post_meta(get_the_ID(), 'menu', true);
if (!$has_menu || $has_menu == false) :
    if ($has_siblings && $post->post_parent) : ?>
        <nav class="menu-contextual-page row">
            <ul class="menu-contextual-page-list col-12">
                <?php echo $siblings; ?>
            </ul>
            <a class="menu-contextual-toggle" aria-label="menu-contextual" aria-expanded="false" onclick="Submenu('menu-contextual-toggle')">Mais</a>
        </nav>
<?php
    endif;
endif;
/* Menu páginas do mesmo nivel */
?>