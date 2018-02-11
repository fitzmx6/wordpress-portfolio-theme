<?php get_header(); ?>
	
	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if(!is_page( 'Contact' ) && !is_single()) : ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="grid-d-4 grid-t-6 grid-panel cs-style-3">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<figure>
								<?php the_post_thumbnail(); ?>
								<figcaption>
									<h2><?php the_title(); ?></h2>
									<div class="view">View</div>
								</figcaption>
							</figure>
						</a>
					</div>
				<?php endif; ?>
			<?php endif; ?>
			<?php if( is_page( 'web' ) ) : ?>
				<div class="grid-d-4 grid-t-6 grid-panel">
					<?php query_posts( 'category_name=Web' ); ?>
				</div>
		    <?php endif; ?>
			<?php if(is_single() || is_page( 'Contact' )) : ?>
				<div class="post">
			    	<div class="grid-d-12">
			    		<div id="blog-title">
			    			<h2><?php the_title(); ?></h2>
			    		</div>
		    			<?php the_content(); ?>
		    		</div>
				</div><!-- end .post -->
			<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div> <!-- end #content -->     

<?php get_footer(); ?>