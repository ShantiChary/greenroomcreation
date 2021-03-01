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
	<?php 
		$args = array(
			'post_type'=> 'project',
			'posts_per_page' => -1,
			'order' => 'ASC',
			'orderby' => 'title'			
		);

		$the_projects = new WP_Query($args);?>

			<?php if ( $the_projects->have_posts() ) : ?>

				<?php while ( $the_projects->have_posts() ) {
					$the_projects->the_post(); 

						$termList = get_the_terms( $post->ID, 'project-category' );  //Get the assigned terms for a particular item
						$termName = ""; //initialize the string that will contain the terms

						if ( $termList && ! is_wp_error( $termList ) ) {
							foreach ( $termList as $term ) { // for each term 
								$termName .= $term->slug.' '; //create a string that has all the slugs 
							}
						}
				?> 
				<div class="<?php echo $termName; ?> item"> <?php // 'item' is used as an identifier ?>
					<!-- <h2>?php the_title(); ?></h2> -->

						<!-- Site URL -->
						<?php if( !empty(get_field('project_link')) ): ?>					
								<?php $url = get_field('project_link');?>
						<?php endif; ?>	

						<?php if ($post->ID == 122): ?>
							<?php the_post_thumbnail('medium'); ?>
						<?php endif; ?>

						<?php if($post->ID != 122): ?>
						<a href="<?php echo "$url"; ?> "target="_blank"> <?php the_post_thumbnail('medium'); ?> 

							<div class="image-overlay">

									<?php 
										$field_name = "project_overlay";
										$image = get_field('project_overlay');
										$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

										if(!empty($image)) {
											$field = get_field_object($field_name); ?>

											<div class="image-overlay-inner">
												<?php 
												if( $image ) {
													echo wp_get_attachment_image( $image, $size );
												} ?>
											</div>
										<?php }
									?>

							</div>
						<?php endif; ?> 				
						<?php if( $url ): ?>
							</a>
						<?php endif; ?>

				</div> <!-- end item -->
		<?php }  ?>
	<?php endif; ?>
</div> <!-- end item-list -->

<?php



