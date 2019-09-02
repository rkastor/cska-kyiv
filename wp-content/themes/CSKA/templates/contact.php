<?php

/**

 * Template Name: Contact Page

 */



get_header(); ?>


<? include('section-slider.php') ?>


<div class="contact container-fluid">

  <div class="container">



    <? /*<h1 class="sub-title h1"><?php the_title(); ?></h1> */ ?>



    <div class="contact__container flex flex-justify-f fx-md-display fx-md-wrap">
      
      <div class="contact__text">

        <div class="contact__content">

          <?php the_content(); ?>
        
        </div>

        <ul class="contact__num">

        <? if (get_option('settings')['phone1']) 
        { ?>
          <li>
            <a class="contact__phone" href="tel:<?php echo str_replace(array('+', ' ', '(' , ')', '-'), '', get_option('settings')['phone1']); ?>"
              title="Позвонить">
              <i class="fa fa-phone"></i><? echo get_option('settings')['phone1']; ?>
            </a>
          </li>
        <? } if (get_option('settings')['email']) 
        { ?>
          <li>
            <a href="mailto:<? echo get_option('settings')['email']; ?>">
              <i class="fa fa-send-o"></i><? echo get_option('settings')['email']; ?>
            </a>
          </li>
        <? } if (get_option('settings')['address']) 
        { ?>
          <li>
            <a >
              <i class="fa fa-map-marker"></i><? echo get_option('settings')['address']; ?>
            </a>
          </li>
        <? } /*if (get_option('settings')['address2']) 
        { ?>
          <li>
            <a >
              <i class="fa fa-map-marker"></i><? echo get_option('settings')['address2']; ?>
            </a>
          </li>
        <? } */?>
          <?/* } if (get_option('settings')['phone2']) {
          ?>
          <li>
            <a class="contact__phone" href="tel:<?php echo str_replace(array('+', ' ', '(' , ')', '-'), '', get_option('settings')['phone2']); ?>"
              title="Позвонить">
              <i class="fa fa-phone"></i><? echo get_option('settings')['phone2']; ?>
            </a>
          </li>
          <? } if (get_option('settings')['phone3']) {
          ?>
          <li>
            <a class="contact__phone" href="tel:<?php echo str_replace(array('+', ' ', '(' , ')', '-'), '', get_option('settings')['phone3']); ?>"
              title="Позвонить">
              <i class="fa fa-phone"></i><? echo get_option('settings')['phone3']; ?>
            </a>
          </li> */ ?>

        </ul>

      </div>
  
      <div id="contact-block" class="contact__contact-block container-fluid row">

        <div class="contact__contact-content">

          <p class="h4 text-center" data-depth="0.5">Ми відповімо Вам в найближчий час</p>

          <?php echo do_shortcode('[contact-form-7 id="12"]'); ?>

        </div>

      </div>


      <div class="contact__map full-width">

      <? include('map-block.php'); ?>

      </div>

    </div>

  </div>

</div>



<?php get_footer(); ?>

