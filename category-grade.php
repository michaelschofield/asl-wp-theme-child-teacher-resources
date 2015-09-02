<?php get_header(); ?>
			
<div class="has-cards" id="content">

	<header class="has-background background-base hero">
		<div class="col-md--eightcol col--centered clearfix">
			<h1 class="beta"><?php single_cat_title(); ?></h1>
			<p class="no-margin"><?php echo category_description(); ?></p>
		</div>
	</header>	

	<nav class="clearfix menu menu--gallery">
	    
	    <a href="<?php echo esc_url( get_category_link( '13' ) ) ?>" class="col-sm--twelvecol col-lg--sixcol card media menu__item">
	      <img src="http://placehold.it/500x281" alt="" />
	      <span class="menu__item__content">
	        <h3 class="menu__item__title">Preschool</h3>
	        <span class="zeta">
				<?php echo strip_tags( category_description( '13' ) ); ?> 
	        </span>
	      </span>	      
	    </a>

	    <a href="<?php echo esc_url( get_category_link( '8' ) ) ?>" class="col-sm--twelvecol col-lg--sixcol card media menu__item">
	      <img src="http://placehold.it/500x281" alt="" />
	      <span class="menu__item__content">
	        <h3 class="menu__item__title">Elementary School</h3>
	        <span class="zeta">
				<?php echo strip_tags( category_description( '8' ) ); ?> 
	        </span>
	      </span>
	      
	    </a>

	    <a href="<?php echo esc_url( get_category_link( '5' ) ) ?>" class="col-sm--twelvecol col-lg--sixcol card media menu__item">
	      <img src="http://placehold.it/500x281" alt="" />
	      <span class="menu__item__content">
	        <h3 class="menu__item__title">Middle School</h3>
	        <span class="zeta">
				<?php echo strip_tags( category_description( '5' ) ); ?> 
	        </span>
	      </span>
	      
	    </a>
	    
	    <a href="<?php echo esc_url( get_category_link( '6' ) ) ?>" class="col-sm--twelvecol col-lg--sixcol card media menu__item">
	      <img src="http://placehold.it/500x281" alt="" />
	      <span class="menu__item__content">
	        <h3 class="menu__item__title">High School</h3>
	        <span class="zeta">
				<?php echo strip_tags( category_description( '6' ) ); ?> 
	        </span>
	      </span>
	      
	    </a>

	 

	</nav>	

	<div class="hero" aria-hidden="true"></div>

</div> <!-- end #content -->

<?php get_footer(); ?>