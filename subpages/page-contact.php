<?php /* Template Name: Kontakt Side */ ?>

<?php get_header(); ?>
<section id="content" class="contact-site">
    
    <div class="contacts content-inner">
        <div class="title">Kontakt</div>
        
        <?php 
        $coworkers = get_posts( array( 'post_type' => 'medarbejder' ));
        foreach( $coworkers as $coworker ) :
            $post_meta = get_post_meta( $coworker->ID ); 
        ?>
        
        <div class="contact">
            <div class="img" style="background-image:url(<?php echo $post_meta['cw_pic'][0]; ?>)">
                <div class="breakline"><div class="overlays"></div></div>
            </div>
            <div class="info">
                <div class="position"><?php echo $post_meta['cw_position'][0]; ?></div>
                <div class="name"><?php echo $post_meta['cw_fname'][0] . ' ' . $post_meta['cw_lname'][0]; ?></div>
                <div class="phone">Tlf.: <?php echo $post_meta['cw_phone'][0]; ?></div>
                <div class="mail"><?php echo $post_meta['cw_email'][0]; ?></div>
            </div>
            <div class="breakline"><div class="overlays"></div></div>
        </div>
        
        <?php endforeach; ?>
        
    </div>
    
    <div class="breakline"><div class="overlays"></div></div>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>