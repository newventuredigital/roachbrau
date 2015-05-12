<?php get_header(); ?>
<div class="row" id="post-<?php the_ID(); ?>">
	<div class="medium-7 columns">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
				<div class="excerpt">
					<p>
					<?php echo excerpt(36); ?>
					</p>
				</div>

			<?php endwhile; ?>

			<?php else : ?>
				<h2>Not Found</h2>
				<p>Looks like we've got a broken link!.</p>
			<?php endif; ?>
	</div>


		<aside class="medium-4 medium-offset-1 columns sidebar">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
 				<?php endif; ?>
 		</aside>
 	</div>
 </div>

<?php get_footer(); ?>