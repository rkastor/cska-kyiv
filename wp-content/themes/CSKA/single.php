<?php
get_header(); ?>

	<div class="content-area container">

		<?php while ( have_posts() ) : the_post(); ?>

					<h1 class="sub-title"><?php the_title(); ?></h1>
					<br>

					<div class="content-area_content">
						<?php the_content(); ?>
					</div><!-- .content__area -->

			<?php endwhile; ?>
	</div><!-- .content-area -->

<?php get_footer(); ?>
