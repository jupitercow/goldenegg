<?php get_header(); ?>

<main id="content" class="wrap">
	
	<article>

		<header class="articleHeader">
			<h1><?php the_title(); ?></h1>
		</header>

		<section class="entryContent">
			<?php the_post(); the_content(); ?>
		</section>
	
	</article>

	<?php get_sidebar(); ?>

</main>

<?php egg_component( 'contentBlocks' ); ?>

<?php get_footer();
