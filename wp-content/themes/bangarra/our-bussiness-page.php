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
                <h1 class="banner-heading"><?php echo get_field('banner_heading'); ?></h1>
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
                <h3 class="primary-color"><?php echo get_field('bennelong_funds_heading'); ?></h3>
                <?php echo get_field('bennelong_funds_desc'); ?>
              </div>
              <div class="col-12 col-md-6 text-end">
                <img src="<?php echo get_field('bennelong_funds_image'); ?>" alt="" class="img-fluid">
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
                <img src="<?php echo get_field('crown_golf_field_image'); ?>" alt="" class="img-fluid">
              </div> 
              <div class="right-side col col-lg-6">
                <h3 class="primary-color common-primary-heading"><?php echo get_field('crown_golf_heading'); ?></h3>
                <?php echo get_field('crown_golf_desc'); ?>
                  <img src="<?php echo get_field('crown_golf_bitmap_image'); ?>" class="img-fluid mt-4">
                </div>
            </div>
          </div>
        </div>
        <!-- //Bennelong Funds -->


        <!-- Our Business section -->
        <div class="our-business primary-background container-fluid">
          <div class="business-inner">
            <?php $group = get_field('in_number_business_group','option'); ?>
            <h3 class="primary-color common-primary-heading text-white"><?php echo $group['heading']; ?></h3>
            <div class="container business-numbers">
              <div class="row">
                <?php $subgroups = $group['in_number_data'];
                $subcount = 0;
                foreach($subgroups as $subgroup) {
                    $subcount++;
                    if($subcount == 1){$img_src = get_field('global_offices_image','option');}
                    if($subcount == 2){$img_src = get_field('funds_under_management_image','option');}
                    if($subcount == 3){$img_src = get_field('acres_of_golf_courses_image','option');}
                ?>
                <div class="col-md-6 col-lg-4 busi-number-box text-center">
                  <img src="<?php echo $img_src; ?>" alt="icon" class="img-fluid">
                  <h3 class="banner-heading active-color"><?php echo $subgroup["value"]; ?></h3>
                  <p class="primary-light"><?php echo $subgroup["subheading"]; ?></p>
                </div>
              <?php }?>

              </div>
            </div>
            <div class="date">
              <p><?php echo get_field('in_number_date','option'); ?></p>
            </div>
          </div>
        </div>
        <!-- // Our Business section-->

<?php get_footer();?>