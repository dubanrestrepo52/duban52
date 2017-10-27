<?php get_header(); ?>
	<div class="row">
		<?php query_posts('p=25') ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<div style="width: 100%;"><?php the_content(); ?></div>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>
	<div class="row">
		<div class="col-3 side">
			<h4 class="text-white">Soy un Aside</h4>
			<ul>
				<li><a class="text-white" href="">Item 1</a></li>
				<li><a class="text-white" href="">Item 2</a></li>
				<li><a class="text-white" href="">Item 3</a></li>
				<li><a class="text-white" href="">Item 4</a></li>
				<li><a class="text-white" href="">Item 5</a></li>
			</ul>
		</div>
		<div class="col-9 contenedor">
			<h2 class="text-center mt-2">Información de interés</h2>
			<div class="row">
				<?php query_posts('cat=4') ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				<div class="col-12 mt-3">
					
				</div>
				<div class="col-3">
					
					<figure class="">
						<?php the_post_thumbnail('thumbnail'); ?>
					</figure>
				</div>
				<div class="col-9">
					<h4><a class="text-primary" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
							
					<?php the_excerpt(); ?></div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?> 
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="http://localhost/transitoyarumal/wp-content/themes/transito_theme/js/bootstrap.min.js"></script>
<script src="http://localhost/transitoyarumal/wp-content/themes/transito_theme/js/bootstrap.bundle.min.js"></script>	
<?php wp_footer(); ?>	
<?php get_footer(); ?>
