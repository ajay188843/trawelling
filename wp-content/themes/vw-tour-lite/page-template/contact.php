<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<div id="content-vw" class="container">
    <div class="middle-align">	
		<div class="col-md-4 contact-info">
			<h3><?php esc_html_e('FIND US HERE','vw-tour-lite'); ?></h3>
			<div class="contact-location">
				<span class="head"><?php esc_html_e('LOCATION','vw-tour-lite'); ?></span> <br>
 					<?php echo esc_html( get_theme_mod('vw_tour_lite_our_address','') ); ?>
 			</div>	
			<div class="contact-call">
				<span class="head"><?php esc_html_e('SUPPORT CALL','vw-tour-lite'); ?></span> <br>
					<?php echo esc_html( get_theme_mod('vw_tour_lite_contact','') ); ?>
			</div>			
			<div class="contact-email">
				<span class="head"><?php esc_html_e('EMAIL ADDRESS','vw-tour-lite'); ?></span> <br>
				<?php echo esc_html( get_theme_mod('vw_tour_lite_email','') ); ?>
			</div>
		</div>       
		<div class="col-md-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
                <?php the_content();?>                
            <?php endwhile; // end of the loop. ?>          
        </div>        
        <div class="clear"></div>    
	</div>
</div>
<?php get_footer(); ?>