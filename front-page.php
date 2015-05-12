<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

<div class="row" id="post-<?php the_ID(); ?>">
	<div class="medium-7 columns">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		<?php endwhile; endif; ?>


		<?php $args = array('posts_per_page' => 10);
          $posts = get_posts( $args );
          foreach ($posts as $post) { setup_postdata( $post ); ?>
            <div class="individual-post cf">
	            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	            <div class="excerpt">
	            <?php echo excerpt(49); ?>
	            </div>

	            <div class="post-info cf">
		            <div class="date"><?php the_time('n/j/y'); ?></div>
		            <div class="category">Posted in <?php the_category(', '); ?></div>
	            </div>
            </div>
          <?php wp_reset_postdata(); } ?>

	</div>
		
	<aside class="medium-4 medium-offset-1 columns sidebar">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
				<?php endif; ?>
	</aside>
</div>

<?php get_footer(); ?>