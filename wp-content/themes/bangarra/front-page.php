<?php 
/**
 * Template name: Home
 */
get_header();?>
    <!-- banner -->
    <div class="banner-main" style="background-image: url(<?php echo get_field('banner_image');?>);">
      <div class="container">
        <div class="row">
          <div class="banner-sec">
            <h1 class="banner-heading"><?php echo get_field('banner_heading');?></h1>
            <p class="text-white"><?php echo get_field('banner_text');?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- //banner -->

    <!-- Bennelong Funds -->
    <div class="bennelong-funds">
      <div class="container">
        <div class="row">
          <div class="left-side col-12 col-md-6">
            <h3 class="primary-color common-primary-heading"><?php echo get_field('our_business_heading');?>
            </h3>
            <h4 class="heading-sm"><?php echo get_field('our_business_text');?>
            </h4>
            <a href="<?php echo get_field('our_business_btn_link'); ?>">
            <button class="active-background text-white btn theme-btn"><?php echo get_field('our_business_btn');?></button></a>
          </div>
          <div class="col-12 col-md-6 text-end">
            <img src="<?php echo get_field('our_businesses_image'); ?>" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <!-- //Bennelong Funds -->

    <!-- Our Business section -->
    <div class="our-business primary-background container-fluid">
      <div class="business-inner">
        <div class="business-carousel owl-carousel owl-theme">
          <?php
          $in_num_arr = array('in_number_business_group','in_number_people_group','in_number_principle_group','in_number_impact_group');
          foreach($in_num_arr as $in_num_gp){
              $rows = get_field($in_num_gp,'option');
          ?>
          <div> 
            <h3 class="primary-color common-primary-heading text-white text-center"><?php echo $rows['heading']; ?></h3>
            <div class="container business-numbers">
              <div class="row">

              <?php $subrows = $rows['in_number_data'];
              $subcount = 0;
              foreach($subrows as $subrow) {
                  $subcount++;
                  if($subcount == 1){$img_src = get_field('global_offices_image','option');}
                  if($subcount == 2){$img_src = get_field('funds_under_management_image','option');}
                  if($subcount == 3){$img_src = get_field('acres_of_golf_courses_image','option');}
              ?>
                <div class="col-md-6 col-lg-4 busi-number-box text-center">
                  <img src="<?php echo $img_src; ?>" alt="icon" class="img-fluid">
                  <h3 class="banner-heading active-color"><?php echo $subrow["value"]; ?></h3>
                  <p class="primary-light"><?php echo $subrow["subheading"]; ?></p>
                </div>
              <?php }?>

              </div>
              <?php if($in_num_gp == 'in_number_business_group'){?>
              <div class="date" style="display: flex; justify-content: flex-end; width: 100%;">
                <p><?php echo get_field('in_number_date','option'); ?></p>
              </div>
              <?php }?>
            </div> 
          </div>
          
          <?php }?>
        </div>
        
      </div>
    </div>
    <!-- // Our Business section-->

    <!-- Our Principles -->
    <div class="crown-golf bg-gray">
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="left-side col col-12 col-md-6 p-0">
            <img src="<?php echo get_field('our_principle_image');?>" alt="" class="img-fluid">
          </div>
          <div class="right-side col col-12 col-md-6">
            <h3 class="primary-color common-primary-heading"><?php echo get_field('our_principles_heading'); ?></h3>
            <h4 class="heading-sm"><?php echo get_field('our_principles_text'); ?></h4>
            <a href="<?php echo get_field('our_principles_btn_link'); ?>"><button class="active-background text-white btn theme-btn"><?php echo get_field('our_principles_btn'); ?></button></a>
          </div>
        </div>
      </div>
    </div>
    <!-- //Our Principles -->

    <!-- Our People -->
    <div class="our-people bg-gray" style="background: url(<?php echo get_field('our_people_background_image');?>) top left no-repeat;background-size: 50%;">
    <!-- <div class="our-people bg-gray">  -->
      <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-lg-7 text-center">
            <h3 class="primary-color common-primary-heading"><?php echo get_field('our_people_heading'); ?></h3>
            <h4 class="heading-sm"><?php echo get_field('our_people_text'); ?></h4>
          </div>
        </div>
        <div class="owl-slider">
          <div id="ourPeopleSlider" class="owl-carousel">
            <?php  $rows = get_field('our_people_repeater');
                if($rows){
                    foreach($rows as $row)
                    { ?>
                        <div class="card">
                            <div class="img-box">
                              <img src="<?php echo $row['image'];?>" alt="" class="img-fluid">
                            </div>
                            <div class="people-detail">
                              <p class="person-name"><?php echo $row['name'];?></p>
                              <p class="designation"><?php echo $row['designation'];?></p>
                            </div>
                        </div>
                    <?php }
                }
            ?>  
          </div>
        </div>
        <div class="btn-container">
          <a href="<?php echo get_field('our_people_btn_link'); ?>"><button class="active-background text-white btn theme-btn float-end"><?php echo get_field('our_people_btn'); ?></button></a>
        </div>
      </div>
    </div>
    <!-- //Our People -->
<?php get_footer();?>