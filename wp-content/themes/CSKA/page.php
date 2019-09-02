<?php
get_header(); ?>

<? include('templates/section-slider.php') ?>

	<div class="content-area container">

		<?php while ( have_posts() ) : the_post(); ?>

					<div class="content-area_content">
						<?php the_content(); ?>
					</div><!-- .content__area -->

			<?php endwhile; ?>
	</div><!-- .content-area -->


  <?php/* include('feedback-block.php') */?>

<?php get_footer(); ?>
