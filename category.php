<?php get_header(); ?>
			
<div class="has-cards" id="content">

	<header class="has-background background-base hero">
		<div class="col-md--eightcol col--centered clearfix">
			<h1 class="beta"><?php single_cat_title(); ?></h1>
			<p class="no-margin"><?php echo category_description(); ?></p>
		</div>
	</header>	

	<div class="wrap clearfix">

		<main id="main" class="clearfix js-masonry hero--small wrap" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="col-lg--fourcol">
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('card clearfix'); ?> role="article">
					
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="media" style="margin-bottom: 1em;">							
					<?php the_post_thumbnail('full'); ?>
					</div>
					<?php endif; ?>


					<header class="card__header">
						<a class="link--undecorated" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<h2 class="card__title delta"><?php the_title(); ?></h2>
						</a>
					</header>

					<section class="content">

						<?php if ( has_excerpt() ) : ?>
						<p class="zeta">
							<?php echo get_the_excerpt(); ?>
						</p>
						<?php else : ?>
						<?php the_content( 'Read More'); ?>
						<?php endif; ?>
					</section> <!-- end article section -->


					<footer class="clearfix">

						<div class="col-sm--sixcol share">
							<a class="link" onclick="_gaq.push(['_trackEvent', 'Shares', 'Click', 'Facebook']);" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>" title="Share on Facebook" target="new"><svg class="svg svg--facebook"><use xlink:href="#icon-facebook"></use></svg></a>
							<a class="link" onclick="_gaq.push(['_trackEvent', 'Shares', 'Click', 'Twitter']);" href="https://twitter.com/intent/tweet?text=<?php echo get_the_permalink() ?>" title="Share on Twitter" target="new">
								<svg class="svg svg--twitter"><use xlink:href="#icon-twitter"></use></svg>        
							</a>
						</div>

						<div class="col-sm--sixcol align-right" style="top: 10px; opacity: .8;">

							<?php if ( in_category( 'preschool' ) ) : ?>
							<a class="epsilon link link--undecorated link--grade link--grade--pre" href="<?php echo get_category_link( '13' )?>" title="Grade Recommendation: Preschool" alt="Recommended for Preschool">PRE</a>
							<?php endif; ?>	

							<?php if ( in_category( 'elementary-school' ) ) : ?>
							<a class="epsilon link link--undecorated link--grade link--grade--e" href="<?php echo get_category_link( '8' )?>" title="Grade Recommendation: Elementary School" alt="Recommended for Elementary School">E</a>
							<?php endif; ?>	

							<?php if ( in_category( 'middle-school' ) ) : ?>
							<a class="epsilon link link--undecorated link--grade link--grade--ms" href="<?php echo get_category_link( '5' )?>" title="Grade Recommendation: Middle School" alt="Recommended for Middle School">MS</a>
							<?php endif; ?>	

							<?php if ( in_category( 'high-school' ) ) : ?>
							<a class="epsilon link link--undecorated link--grade link--grade--hs" href="<?php echo get_category_link( '6' )?>" title="Grade Recommendation: High School" alt="Recommended for High School">HS</a>
							<?php endif; ?>		



						</div>

					</footer>
		
								
				</article> <!-- end article -->

			</div>
		
			<?php endwhile; ?>	
		
		    <?php else : ?>
		
			    <article id="post-not-found" class="hentry clearfix">
			    	<header class="article-header">
			    		<h1><?php _e("Sorry, No Results.", "bonestheme"); ?></h1>
			    	</header>
			    	<section class="post-content">
			    		<p><?php _e("Try your search again.", "bonestheme"); ?></p>
			    	</section>
			    	<footer class="article-footer">
			    	    <p><?php _e("This is the error message in the search.php template.", "bonestheme"); ?></p>
			    	</footer>
			    </article>
		
		    <?php endif; ?>

	    </main> <!-- end #main -->

	    <?php if (function_exists('bones_page_navi')) { // if expirimental feature is active ?>
	
	        <?php bones_page_navi(); // use the page navi function ?>
	
        <?php } else { // if it is disabled, display regular wp prev & next links ?>
	        <nav class="wp-prev-next">
		        <ul class="clearfix">
			        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
			        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
		        </ul>
	        </nav>
        <?php } ?>	
	
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>