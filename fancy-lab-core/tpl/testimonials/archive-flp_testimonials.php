<?php
/**
 * 
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab Pro
 */

get_header();
?>

<div class="content-area">
	<main>
		<div class="container">
			<h1 class="archive-title"><?php esc_html_e( 'Testimonials', 'fancy-lab-pro' ) ?></h1>
			<div class="row">
				<?php
				
				if( have_posts() ):
					// If we have posts, then we start the Loop.
					while( have_posts() ): the_post(); ?>

                        <div class="col-12 col-sm-6 col-md-4 testimonial-article">
                            <article>
                                <div class="the-post">
                                    <div class="post-thumbnail">
                                    <?php 
                                        if( has_post_thumbnail() ): 
                                            the_post_thumbnail( 'fancy-lab-pro-testimonials-400-250', array( 'class' => 'img-fluid') );
                                        else:
                                            ?>
                                                <img src="<?php echo get_template_directory_uri() . '/img/thumbnail-default.jpg' ?>" />
                                            <?php
                                        endif;
                                    ?>
                                    </div>

                                    <?php edit_post_link( __( 'Edit testimonial' , 'fancy-lab-pro' ), '<div class="edit-post-link">', ' →</div>' ); ?>

                                    <h2 class="title">
                                        <?php the_title(); ?>
                                    </h2>						
                                    <div class="content"><?php the_content(); ?></div>
                                </div>
                            </article>
                        </div>
                        
                    <?php
					// End the loop.	
					endwhile;

					// We're using numeric page navigation here.
					the_posts_pagination( array(
						'prev_text'	=> esc_html__( 'Previous' , 'fancy-lab-pro'),
						'next_text'	=> esc_html__( 'Next' , 'fancy-lab-pro')
					));

				// If no content, display the following message
				else: 
				?>
					<p><?php esc_html_e( 'Nothing to display', 'fancy-lab-pro' ) ?></p>
				<?php
				endif;
				?>
			</div>
		</div>											
	</main>
</div>

<?php get_footer(); ?>