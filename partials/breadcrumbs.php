<?php

if ( is_front_page() ) return;

if ( class_exists( 'woocommerce' ) && is_woocommerce() ) {
    woocommerce_breadcrumb();
    return;
}

if ( ! function_exists('bcn_display') ) return;

?>
<div id="breadcrumbs" class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php bcn_display() ?>
</div> <!-- #breadcrumbs -->
