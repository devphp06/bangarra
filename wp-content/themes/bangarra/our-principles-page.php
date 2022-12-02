<?php 
/**
 * Template name: Our Principles
 */
get_header();?>

    <!-- banner -->
    <div class="principle-banners banner-main" style="background-image: url(<?php echo get_field('banner_image');?>);">
      <div class="container">
        <div class="row">
          <div class="banner-sec">
          <?php if(get_field('banner_heading')){?><h1 class="banner-heading"><?php echo get_field('banner_heading');?></h1><?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- //banner -->

    <!-- about-us -->
    <div class="about-us" style="background: url(<?php echo get_field('about_us_background_image');?>) top right no-repeat;">
      <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-end">
          <div class="left-side col-12 col-lg-6 pe-lg-5">
            <?php if(get_field('about_us_heading')){?><h3 class="primary-color common-primary-heading"><?php echo get_field('about_us_heading');?></h3><?php }?>
            <?php if(get_field('about_us_description')){?><?php echo get_field('about_us_description');?><?php }?>
          </div>
          <div class="right-side col-12 col-lg-4 text-center text-lg-end py-4 pt-lg-0 p-0">
            <?php if(get_field('about_us_slide_image')){?><img src="<?php echo get_field('about_us_slide_image');?>" alt="" class="img-fluid"><?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- //about-us -->

    <!-- Global Values -->
    <div class="global-values bg-gray">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="right-side col-12 col-lg-8">
            <?php if(get_field('global_values_heading')){?><h3 class="primary-color common-primary-heading"><?php echo get_field('global_values_heading');?></h3><?php }?>
            <?php if(get_field('global_values_description')){?><?php echo get_field('global_values_description');?><?php }?>
          </div>
          <div class="left-side d-none d-lg-block col-12 col-lg-4 d-flex align-items-center">
            <?php if(get_field('global_values_side_text')){?><p class="heading-sm"><?php echo get_field('global_values_side_text');?></p><?php }?>
          </div>
        </div>
      </div>
    </div>
      <!-- //Global Values -->

    <!-- Environmental Social -->
    <div class="global-values">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="left-side col-12 col-lg-8">
            <?php if(get_field('e_s_g_heading')){?><h3 class="primary-color common-primary-heading"><?php echo get_field('e_s_g_heading');?></h3><?php }?>
            <?php if(get_field('e_s_g_description')){?><?php echo get_field('e_s_g_description');?><?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- //Environmental Social -->

<?php get_footer();?>