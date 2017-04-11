

<div id="sidebar">
    <div class="sidebar-inner">

        <?php

        $pages = get_posts( array(
            'post_type' => 'page',
            'orderby' => 'menu_order',
        ));

        foreach( $pages as $page ) :
            $post_meta = get_post_meta( $page->ID );
            if ( $post_meta['show_in_sidebar'] === null ||
                 empty( $post_meta['show_in_sidebar'] ) ) continue;

        ?>

        <a href="<?php echo get_the_permalink( $page->ID ); ?>" class="sidebar-elem"
           style="display: block; background-image:url(<?php echo wp_get_attachment_url( $post_meta['_thumbnail_id'][0] ); ?>)">
            <div class="title"><?php echo $page->post_title; ?></div>
            <div class="breakline"><div class="overlays"></div></div>
        </a>

        <?php endforeach; ?>

    </div>
</div>
