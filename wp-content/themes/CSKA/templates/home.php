<?php

//  Template name: Home page

  $pageClass = "home";

 ?>



<?php get_header(); ?>

<? include('section-slider.php') ?>

  <section class="sug-block">

    <div class="container">

      <div class="col-xs-12">

        <?php the_content(); ?>

      </div>

    </div>

  </section>


      <? /*
    <div class="projects">

      <?php include('project-slider.php'); ?>

    </div>

    */ ?>



    <!-- <section class="reviews">

      <?php include('reviews-home.php') ?>

    </section> -->


    <? /*
    <div id="contact-block" class="contact-block container-fluid">

      <div class="contact-block-form">

        <p class="sub-title text-center">Мы свяжемся с Вами в ближайшее время</p>

        <?php echo do_shortcode('[contact-form-7 id="78"]'); ?>

      </div>

    </div> */ ?>




  <?php/* include('feedback-block.php') */?>

<?php get_footer(); ?>

