<?php
// Template name: 404
 ?>
<?php get_header(); ?>

    <div class="container 404-page not-found">
      <h1 class="sub-title">Страница не найдена</h1>

      <?php the_content(); ?>

      <p>Извините, данная страница недоступна или ее нету на сайте.</p>
      <p> <a onclick="history.back();" class="link_back">Вернутся на предыдущую страницу?</a> </p>
    </div>



<?php get_footer(); ?>
