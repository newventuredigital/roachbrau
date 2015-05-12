<?php get_header(); ?>

<div class="row" id="post-<?php the_ID(); ?>">
	<div class="medium-7 columns">
			<h2>Error 404 - Page Not Found</h2>
	</div>

	<aside class="medium-4 medium-offset-1 columns sidebar">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
		<?php endif; ?>
 	</aside>
 </div>

<?php get_footer(); ?>