<?php
function jm_active_plugin() {
    if(version_compare(get_bloginfo('version'), '5.0', '<')) {
        wp_die('Você precisa atualizar o wordpress para usar este plugin');
        exit();
    }
}