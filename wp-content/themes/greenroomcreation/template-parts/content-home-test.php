<!-- All Projects Section -->
    <!-- <h2>ISOTOPE FILTER Example For WORK ITEMS</h2>        -->
<!-- <div class="term-filters"> -->
	<!-- <ul id="filters">
		<li><a href="javascript:void(0)" data-filter="*" class="selected">All</a></li>
		?php 
			$terms = get_terms('project-category');
			$count = count($terms); //How many are they?
			if ( $count > 0 ){  //If there are more than 0 terms
				foreach ( $terms as $term ) {  //for each term:
					echo "<li><a href='javascript:void(0)' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
				}
			} 
		?>
	</ul> -->
<!-- </div> -->

<div id="item-list" class="div-projects">	
	<!-- ?php 
		$args = array(
			'post_type'=> 'project',
			'posts_per_page' => -1,
			'order' => 'ASC',
			'orderby' => 'title'			
		);

		$the_projects = new WP_Query($args);?> -->

		<?php
			$args = array(  
			'post_type' => 'project',
			'posts_per_page' => -1, 
			'orderby' => 'title', 
			'order' => 'ASC', 
		); 

		$loop = new WP_Query( $args ); ?>

		<div class="item"> <?php // 'item' is used as an identifier ?>

			<!-- Site URL -->
			<?php if( !empty(get_field('project_link')) ): ?>					
					<?php $url = get_field('project_link');?>
			<?php endif; ?>	

			<?php while ( $loop->have_posts() ) :  $loop->the_post(); ?>

				<?php if(( $url )): ?> 
					<a href="<?php echo "$url"; ?> "target="_blank"> <?php the_post_thumbnail('medium'); ?>
				<?php endif; ?> 

			<?php endwhile; ?>

		</div> <!-- end item -->

	<?php
		wp_reset_postdata(); ?>

</div> <!-- end item-list -->

<?php

