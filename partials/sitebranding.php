<div class="site-branding">
    <?php if(is_front_page()): ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    <?php else: ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    <?php endif; ?>
</div><!-- .site-branding -->
