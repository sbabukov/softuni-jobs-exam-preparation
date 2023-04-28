<?php get_header(); ?>

<!-- Заглавието на архивната стр. -->
<?php the_archive_title(); ?>

<ul class="jobs-listing">

<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>
		<!-- content -->
		
		<!-- call template-part job-item, 'template-parts/job', 'item', template-parts is name of folder -->
		<?php get_template_part( 'template-parts/post', 'item' )?>

	<?php endwhile; ?>

	<?php posts_nav_link(); ?>
<?php endif; ?>

</ul>

<?php get_footer(); ?>