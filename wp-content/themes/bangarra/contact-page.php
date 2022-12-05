<?php 
/**
 * Template name: Contact
 */
get_header();?>

    <!-- Content -->
    <div class="contactUs">
      <div class="common-header-strip">
        <div class="container">
            <?php if(get_field('heading')){?><h1 class="banner-heading text-white"><?php echo get_field('heading');?></h1><?php }?>
        </div>
      </div>
      <div class="contact-form" <?php if(get_field('form_background_image')){?>style="background:url(<?php echo get_field('form_background_image'); ?>) top right no-repeat;"<?php }?>>
        <div class="contact-inner container">
          <div class="row">
            <div class="col-12 col-lg-7">
              <?php if(get_field('form_heading')){?><h3 class="heading-sm"><?php echo get_field('form_heading');?></h3><?php }
                    $form = get_field('form_shortcode');
                    if ($form) {?>
                        <div class="contactForm" id="contactForm">
                            <?php echo do_shortcode($form); ?>
                        </div>
                    <?php } ?>
            </div>
            <div class="col-12 col-lg-5 rounded-circle text-center text-lg-end desktop-map">
            <?php if(get_field('map_source_link')){?><iframe class="rounded-circle" src="<?php echo get_field('map_source_link');?>" width="404" height="404" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><?php }?>
            </div>
          </div>
        </div>
        <div class="contact-address-details container-fluid bg-gray">
          <div class="container">
          <div class="row">
            <?php $rows = get_field('address_and_phone_details');
                if($rows){
                foreach($rows as $row) { ?>
                <div class=" details">
                  <?php if($row['heading']){?><h3 class="active-color"><?php echo $row['heading']?></h3><?php }?>
                  <?php if($row['details']){?><p><?php echo $row['details']?></p><?php }?>
                </div>
            <?php } } ?>  
            </div>
            <div class="rounded-circle text-center mobile-map">
            <?php if(get_field('map_source_link')){?><iframe class="rounded-circle" src="<?php echo get_field('map_source_link');?>" width="404" height="404" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //Content -->

<?php get_footer();?>