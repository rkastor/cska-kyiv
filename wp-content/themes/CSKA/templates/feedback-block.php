<? 
// block before footer with contact form
?>

<section class="feedback-block">
    <div class="container">
        <div class="flex flex-justify-space-between">

            <div class="feedback-block__form">
                <?php echo do_shortcode('[contact-form-7 id="12"]'); ?>
            </div>
            <div class="feedback-block__map">
        
              <? include('map-block.php'); ?>
        
            </div>
        </div>

    </div>
</section>