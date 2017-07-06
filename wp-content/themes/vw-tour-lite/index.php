<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW Tour Lite
 */

get_header();

?>

<div class="main-container">
  <section class="services">
    <div class="container">
			<div class="col-md-8">
			<?php if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
              <div class="services-box">
                  <div class="service-image">
                    <?php 
                      if(has_post_thumbnail()) { 
                        the_post_thumbnail(); 
                      }
                    ?>
                  </div>
                  <div class="service-text">
					<header class="entry-header">
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
					</header>
                      <?php the_excerpt(); ?>
                      <a href="<?php the_permalink(); ?>" class="read-more"><?php echo esc_html_e('Read More','vw-tour-lite'); ?></a>
					  <div class="clearfix"></div>					  
                  </div>                                            
              </div>
			   <?php endwhile; ?>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<?php get_sidebar();?>
			</div>
          <div class="clearfix"></div>
          <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'vw-tour-lite' ),
                    'next_text'          => __( 'Next page', 'vw-tour-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-tour-lite' ) . ' </span>',
                ) );
            ?>
          </div>
          <?php else :
              get_template_part( 'no-results', 'archive' ); 
            endif; 
        ?>  
    </div>
    <div class="clear"></div>
  </section>
</div>
<?php get_footer(); ?>