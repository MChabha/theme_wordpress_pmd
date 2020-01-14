<?php
add_action('wp_footer', 'ajout_commentaire_footer');

function ajout_commentaire_footer(){
    echo '<!-- Je suis un commentaire -->';
}
