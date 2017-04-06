
<?php get_header(); ?>

    <div class="herobanner" style="background-image:url(<?php echo get_theme_mod( 'herobanner_image', '' ); ?>)"></div>
    <div class="breakline"><div class="overlays"></div></div>

    <section id="content">
        <article class="content-inner">
            
            <?php 
            while( have_posts() ) : the_post(); 
                $post_meta = get_post_meta( get_the_ID() );
            ?>
                
                <h1 class="title"><?php the_title(); ?></h1>
                <h2 class="sub-title"><?php echo $post_meta['subtitle'][0] ?></h2>
                <span class="text"><?php the_content(); ?></span>
            
            <?php endwhile; ?>
        
        </article>
        <div class="breakline"><div class="overlays"></div></div>
        <?php get_sidebar(); ?>
    </section>

<?php get_footer(); ?>