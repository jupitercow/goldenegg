<?php get_header(); ?>

<div id="content">

	<div class="wrap">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class( 'cf' ); ?>>

			<header class="article-header">
				<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			</header>

			<section class="entry-content">
				<?php the_content(); ?>
			</section>

		</article>

		<?php endwhile; 
			locate_template('components/pageNavi/pageNavi.php'); 
		else : 
			echo '<h1>Nothing Found Here</h1>';
		endif; ?>

	</div>

</div>

<?php get_footer(); ?>
