<?php
/**
 * Template Name: Display Jobs 
 */
?>

<?php get_header(); ?>
template-jobs.php

<?php 
// правим си куери за пейджовете
$jobs_args = array(
    'post_type'      => 'job',
    'post_status'    => 'publish',
    'posts_per_page' => 10,
    'orderby'        => 'date',
    'order'          => 'ASC'
);

// направихме си едно къстъм WPQUERY, което приема тези аргументи: $jobs_args
$jobs_query = new WP_Query( $jobs_args );
// var_dump($jobs_query);
?>

<!-- Правим си проверка за ако има постове, и докато има постове  -->
<?php 
    if ( have_posts()) {
        while (have_posts()){
            // Вика постове    
            the_post();
            
            // Показва съдържанието на пейдж темплейта
            the_content();
        }
    }
?>
<ul class="jobs-listing">
	
<!-- в провеката си слагаме: $jobs_query->have_posts -->
	<?php if ($jobs_query->have_posts()): ?>
		<?php while ($jobs_query->have_posts()): $jobs_query->the_post(); ?>
		<!-- content -->
		
		<!-- call template-part job-item, 'template-parts/job', 'item', template-parts is name of folder -->
		<?php get_template_part( 'template-parts/job', 'item' )?>

	<?php endwhile; ?>

	<?php posts_nav_link(); ?>
<?php endif; ?>

<!-- Слагаме този ресет, за да не бърникаме из другите лупове на WP -->
<?php wp_reset_postdata(); ?>

</ul>

<?php get_footer(); ?>