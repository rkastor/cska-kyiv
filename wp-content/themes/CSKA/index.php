<?php
get_header(); ?>

<? include('templates/section-slider.php') ?>

<div class="container news">

		<?php if ( have_posts() ) : ?>

			<?php /* if ( is_home() && ! is_front_page() ) : ?>
					<h1 class="sub-title h1"><?php single_post_title(); ?></h1>
			<?php endif; */ ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();?>


         <div class="article-block article-block--col">
           <a class="article-block__img" href="<?php the_permalink(); ?>" title="Перейти на старницу «<?php the_title(); ?>»">
             <img src="<?php echo get_the_post_thumbnail_url(); ?>" >
					 </a>
					 <div class="article-block__desc">

						 <p class="article-block__title">
							 <a href="<?php the_permalink(); ?>" title="перейти на старницу «<?php the_title(); ?>»"><?php the_title(); ?></a>
						 </p>
						 <p class="article-block__excerpt"><?php echo excerpt(30); ?></p>
						 <a href="<?php the_permalink(); ?>" class="article-block__link">Дальше..</a>
					 </div>
         </div>

         <?php
    			// End the loop.
        endwhile; ?>
       <div class="col-xs-12 text-center">
    			<?php // Previous/next page navigation.
    			the_posts_pagination( array(
    				'prev_text'          => __( 'Previous page' ),
    				'next_text'          => __( 'Next page' ),
    				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
    			) );
    		// If no content, include the "No posts found" template.
    		else :?>

			<p>Поки що на цій сторінці немає актуальних записів. Можливо, вони з'являться в майбутньому</p>

			<p> 
				<a href="#0" onclick="history.back();" class="link_back">Повернутися на попередню сторінку?</a>
			</p>
			<? endif;
    		?>

        </div>

    </div>




  	<?php/* include('feedback-block.php') */?>

<?php get_footer(); ?>
