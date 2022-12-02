<?php 
/**
 * Template name: Our Businesses
 */
get_header();?>

        <!-- banner -->
        <div class="banner-main" style="background-image: url(<?php echo get_field('banner_image');?>)">
          <div class="container">
            <div class="row">
              <div class="banner-sec">
              <?php if(get_field('banner_heading')){?>
                <h1 class="banner-heading"><?php echo get_field('banner_heading'); ?></h1>
              <?php }?>
              </div>
            </div>
          </div>
        </div>
        <!-- //banner -->  
        
        <!-- Bennelong Funds -->
        <div class="bennelong-funds">
          <div class="container">
            <div class="row bennelong-row">
              <div class="left-side col-12 col-md-6">
                <?php if(get_field('bennelong_funds_heading')){?><h3 class="primary-color"><?php echo get_field('bennelong_funds_heading'); ?></h3><?php }?>
                <?php if(get_field('bennelong_funds_desc')){?><?php echo get_field('bennelong_funds_desc'); ?><?php }?>
              </div>
              <div class="col-12 col-md-6 text-end">
              <?php if(get_field('bennelong_funds_image')){?>
                <img src="<?php echo get_field('bennelong_funds_image'); ?>" alt="" class="img-fluid">
              <?php }?>
              </div> 
            </div>
          </div>
        </div>
        <!-- //Bennelong Funds -->

        <!-- Crown Golf -->
        <div class="crown-golf bg-gray">
          <div class="container-fluid">
            <div class="row d-flex align-items-center">
              <div class="left-side col col-lg-6 p-0">
              <?php if(get_field('crown_golf_field_image')){?>
                <img src="<?php echo get_field('crown_golf_field_image'); ?>" alt="" class="img-fluid">
              <?php }?>
              </div> 
              <div class="right-side col col-lg-6">
                <?php if(get_field('crown_golf_heading')){?><h3 class="primary-color common-primary-heading"><?php echo get_field('crown_golf_heading'); ?></h3><?php }?>
                <?php if(get_field('crown_golf_desc')){?><?php echo get_field('crown_golf_desc'); ?><?php }?>
                <?php if(get_field('crown_golf_bitmap_image')){?><img src="<?php echo get_field('crown_golf_bitmap_image'); ?>" class="img-fluid mt-4"><?php }?>
              </div>
            </div>
          </div>
        </div>
        <!-- //Bennelong Funds -->


        <!-- Our Business section -->
        <div class="our-business primary-background container-fluid">
          <div class="business-inner">
            <?php $group = get_field('in_number_business_group','option'); 
            if($group){ 
              if($group['heading']){?>
                <h3 class="primary-color common-primary-heading text-white"><?php echo $group['heading']; ?></h3>
              <?php }?>
              <div class="container business-numbers">
                <div class="row">
                  <?php $subgroups = $group['in_number_data'];
                  if($subgroups){ 
                  foreach($subgroups as $subgroup) {
                  ?>
                  <div class="col-md-6 col-lg-4 busi-number-box text-center">
                    <?php if($subgroup["icon_image"]){?><img src="<?php echo $subgroup["icon_image"]; ?>" alt="icon" class="img-fluid"><?php }?>
                    <?php if($subgroup["value"]){?><h3 class="banner-heading active-color"><?php echo $subgroup["value"]; ?></h3><?php }?>
                    <?php if($subgroup["subheading"]){?><p class="primary-light"><?php echo $subgroup["subheading"]; ?></p><?php }?>
                  </div>
                <?php } }?>

                </div>
              </div>
              <?php if(get_field('in_number_date','option')){?>
                <div class="date">
                  <p><?php echo get_field('in_number_date','option'); ?></p>
                </div>
              <?php }?>
            <?php } ?>  
          </div>
        </div>
        <!-- // Our Business section-->

<?php get_footer();?>