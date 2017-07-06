<?php
/**
 * The template for displaying image attachments.
 *
 * @package VW Tour Lite
 */

get_header(); ?>

<div id="content-vw" class="container">
    <div class="middle-align">       
        <div class="col-md-9">
            <?php while ( have_posts() ) : the_post(); ?>    
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <h1><?php the_title();?></h1>    
                        <div class="entry-attachment">
                            <div class="attachment">
                                <?php vw_tour_lite_the_attached_image(); ?>
                            </div>
    
                            <?php if ( has_excerpt() ) : ?>
                                <div class="entry-caption">
                                    <?php the_excerpt(); ?>
                                </div>
                            <?php endif; ?>
                        </div>    
                        <?php
                            the_content();
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'vw-tour-lite' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div>    
                    <?php edit_post_link( __( 'Edit', 'vw-tour-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                </article>    
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template();

                    if ( is_singular( 'attachment' ) ) {
                        // Parent post navigation.
                        the_post_navigation( array(
                            'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-tour-lite' ),
                        ) );
                    } elseif ( is_singular( 'post' ) ) {
                        // Previous/next post navigation.
                        the_post_navigation( array(
                            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-tour-lite' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Next post:', 'vw-tour-lite' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-tour-lite' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-tour-lite' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                        ) );
                    }
                
                ?>    
            <?php endwhile; // end of the loop. ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar();?>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>