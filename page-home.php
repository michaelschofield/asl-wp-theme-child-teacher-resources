<?php get_header(); ?>

<div id="content">
	
	<header class="has-background background-base hero">
		<div class="clearfix wrap">
			<p class="col-lg--eightcol col--centered">
				We have a wealth of resources for <a href="#">every grade level</a>, from 
				an early world of learning for preschools to classroom lesson plans for 
				elementary, middle and high school teachers, and even free online practice 
				tests and scholarship search assistance for your students. 
			</p>
			
			<!--
			<p class="col-lg--eightcol col--centered">
				You can plan a field trip to the library for your class 
				or homeschool group, learn how to sign your students up for 
				Alvin Sherman Library Cards to access great homework helpers 
				online (there’s even an e-card option), or schedule an 
				appointment with a librarian for research assistance or 
				help selecting books for your classroom. 
			</p>
			-->
		</div>
	</header>

	<nav class="clearfix menu menu--gallery">
	    
	    <a href="<?php echo esc_url( get_category_link( '10' ) ) ?>" class="col-sm--twelvecol col-lg--eightcol card media menu__item">
	      <img src="http://public.library.nova.edu/teachers/wp-content/uploads/sites/2/2015/09/tr-worldbook.jpg" alt="" />
	      <span class="menu__item__content">
	        <h3 class="menu__item__title">World Book</h3>
	        <span class="zeta">
				<?php echo strip_tags( category_description( '10' ) ); ?> 
	        </span>
	      </span>
	      
	    </a>
	    
	    <a href="<?php echo esc_url( get_category_link( '2' ) ) ?>" class="col-sm--sixcol col-lg--fourcol card media menu__item">
    		<img src="http://public.library.nova.edu/teachers/wp-content/uploads/sites/2/2015/09/tr-biography.jpg" alt="" />
			<span class="menu__item__content">
				<h3 class="menu__item__title">Biographies</h3>
				<span class="zeta">
					<?php echo strip_tags( category_description( '2' ) ); ?>
				</span>
			</span>    
	    </a>

	    <a href="<?php echo esc_url( get_category_link( '14' ) ) ?>" class="col-sm--sixcol col-lg--fourcol card media menu__item">
	    	<img src="http://public.library.nova.edu/teachers/wp-content/uploads/sites/2/2015/09/tr-currentevents.jpg" alt="" />
			<span class="menu__item__content">
				<h3 class="menu__item__title">Current Events</h3>
				<span class="zeta">
					<?php echo strip_tags( category_description( '14' ) ); ?>
				</span>	
			</span>    
	    </a>

	    <a href="<?php echo esc_url( get_category_link( '12' ) ) ?>" class="col-sm--sixcol col-lg--fourcol card media menu__item">
	    	<img src="http://public.library.nova.edu/teachers/wp-content/uploads/sites/2/2015/09/tr-english.jpg" alt="" />
			<span class="menu__item__content">
				<h3 class="menu__item__title">English Language Arts</h3>
				<span class="zeta">
					<?php echo strip_tags( category_description( '12' ) ); ?>
				</span>
			</span>    
	    </a>

	    <a href="<?php echo esc_url( get_category_link( '16' ) ) ?>" class="col-sm--sixcol col-lg--fourcol card media menu__item"><img src="http://placehold.it/500x281" alt="" />
	      <span class="menu__item__content">
	        <h3 class="menu__item__title">Foreign Language and ESL</h3>
	        <span class="zeta">
				<?php echo strip_tags( category_description( '16' ) ); ?>
	        </span>
	      </span>    
	    </a>

	    <a href="<?php echo esc_url( get_category_link( '17' ) ) ?>" class="col-sm--sixcol col-lg--fourcol card media menu__item"><img src="http://placehold.it/500x281" alt="" />
	      <span class="menu__item__content">
	        <h3 class="menu__item__title">General</h3>
	        <span class="zeta">
				<?php echo strip_tags( category_description( '17' ) ); ?>
	        </span>
	      </span>    
	    </a>

	    <a href="<?php echo esc_url( get_category_link( '15' ) ) ?>" class="col-sm--sixcol col-lg--fourcol card media menu__item">
	    	<img src="http://public.library.nova.edu/teachers/wp-content/uploads/sites/2/2015/09/tr-socialstudies.jpg" alt="" />
	      <span class="menu__item__content">
	        <h3 class="menu__item__title">Social Studies</h3>
	        <span class="zeta">
				<?php echo strip_tags( category_description( '15' ) ); ?>
	        </span>
	      </span>    
	    </a>

	    <a href="<?php echo esc_url( get_category_link( '7' ) ) ?>" class="col-sm--sixcol col-lg--fourcol card media menu__item">
	    	<img src="http://public.library.nova.edu/teachers/wp-content/uploads/sites/2/2015/09/tr-orbit.gif" alt="" />
			<span class="menu__item__content">
				<h3 class="menu__item__title">STEM</h3>
				<span class="zeta">
					<?php echo strip_tags( category_description( '7' ) ); ?>
				</span>
			</span>    
	    </a>

	    <a href="<?php echo esc_url( get_category_link( '4' ) ) ?>" class="col-sm--sixcol col-lg--sixcol card media menu__item">
	    	<img src="http://public.library.nova.edu/teachers/wp-content/uploads/sites/2/2015/09/tr-grade.jpg" alt="" />
			<span class="menu__item__content">
				<h3 class="menu__item__title">By Grade</h3>
				<span class="zeta">
				<?php echo strip_tags( category_description( '4' ) ); ?>
				</span>
			</span>    
	    </a>

	    <a href="#" class="col-sm--twelvecol col-lg--sixcol card media menu__item">
	    	<img src="http://placehold.it/500x281" alt="" />
	      <span class="menu__item__content">
	        <h3 class="menu__item__title">Parent Educators</h3>
	        <span class="zeta">
				No content
	        </span>
	      </span>    
	    </a>

	</nav>	

	<article class="clearfix has-cards hero" role="article">
		
		<?php the_content(); ?>

	</article><!--/.clearfix /.wrap-->

</div><!--/#content-->

<?php get_footer(); ?>