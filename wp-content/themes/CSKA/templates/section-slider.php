  <section class="section--slider">

    <?php

    include('slider-top.php');

    ?>

    <div class="services-list">

      <div class="container">

        <div class="services-list__container">

          <?php wp_nav_menu( array(

                'menu'            => 'main',

                'theme_location'  => 'main',

                'container_class' => 'container-fluid services-block burger-menu',

                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',

              ) ); ?>

            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
  
  
      </div>
    </div>

  </section>