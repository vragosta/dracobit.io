<?php
	get_header();
?>

<main class="tutorial-page-container container">
	<?php get_template_part( 'content', get_post_type() ); ?>
</main>

<?php get_footer(); ?>
