<?php
/**
 * Sliders
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package theme
 */
?>
<?php //slider page ?>
<?php if(get_field('slider')): ?>
    <div class="cycle-slideshow slider-page">
        <div class="cycle-overlay"></div>
        <?php while(has_sub_field('slider')): ?>
                <?php
                    $enlace = get_sub_field('enlace');
                    $imagen = get_sub_field('imagen');
                    $image_thumb = wp_get_attachment_image_src( $imagen["id"], 'slider_page' );
                    $titulo = get_sub_field('titulo');
                    $descripcion = get_sub_field('descripcion');
                ?>
                <?php if($enlace): ?><a href="<?php echo $enlace ?>"><?php endif ?>
                <img src="<?php echo $image_thumb[0]; ?>" class="slidepage" <?php if($titulo): ?>alt="<?php echo $titulo ?>" data-cycle-title="<?php echo $titulo ?>" <?php endif ?><?php if($descripcion): ?>data-cycle-desc="<?php echo $descripcion ?>" <?php endif ?>/>
                <?php if($enlace): ?></a><?php endif ?>
        <?php endwhile; ?>
        <div class="cycle-pager"></div>
    </div><!-- #slider -->
<?php endif; ?>

<?php //slider global ?>
<?php if(!get_field('slider') && get_field('slider', 'options') && get_field('show_slider_global')): ?>
    <div class="cycle-slideshow slider-global">
        <div class="cycle-overlay"></div>
        <?php while(has_sub_field('slider', 'options')): ?>
                <?php
                    $enlace = get_sub_field('enlace');
                    $imagen = get_sub_field('imagen');
                    $image_thumb = wp_get_attachment_image_src( $imagen["id"], 'slider' );
                    $titulo = get_sub_field('titulo');
                    $descripcion = get_sub_field('descripcion');
                ?>
                <?php if($enlace): ?><a href="<?php echo $enlace ?>"><?php endif ?>
                <img src="<?php echo $image_thumb[0]; ?>" class="slidehome" <?php if($titulo): ?>alt="<?php echo $titulo ?>" data-cycle-title="<?php echo $titulo ?>" <?php endif ?><?php if($descripcion): ?>data-cycle-desc="<?php echo $descripcion ?>" <?php endif ?>/>
                <?php if($enlace): ?></a><?php endif ?>
        <?php endwhile; ?>
        <div class="cycle-pager"></div>
    </div><!-- #slider -->
<?php endif; ?>
