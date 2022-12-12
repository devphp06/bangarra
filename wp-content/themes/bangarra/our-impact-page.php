<?php 
/**
 * Template name: Our Impact
 */
get_header();

function get_grant_recipients_slider_images($images_arr,$size){        
    if($images_arr){
        $images_chunk = array_chunk($images_arr, $size);
        foreach($images_chunk as $images){
            ?><div class="item"><?php
            foreach($images as $image){
                if($image){ ?>
                    <div class="imgs-box">
                        <a href="<?php if($image['url']){echo $image['url'];}?>" target="_blank"><img src="<?php echo $image['image']; ?>" alt="Recipient Icons" class="img-fluid"></a>
                    </div>
                <?php }
            }
            ?></div><?php
        }
    }
}
?>   

    <!-- banner -->
    <div class="banner-impact people-banners banner-main" <?php if(get_field('banner_image')){?>style="background: url(<?php echo get_field('banner_image');?>);"<?php }?>>
        <div class="container">
          <div class="row">
            <div class="banner-sec">
                <?php if(get_field('banner_heading')){?><h1 class="banner-heading"><?php echo get_field('banner_heading');?></h1><?php }?> 
            </div>
          </div>
        </div>
    </div>
    <!-- //banner -->
    
    <!-- bennelong foundation -->
    <div class="bennelong-foundation">
      <div class="container">
        <div class="row bennelong-row">
          <div class="left-side col-12 col-md-8 pe-4">
          <?php if(get_field('bennelong_foundation_heading')){ ?>
            <h3 class="primary-color common-primary-heading"><?php echo get_field('bennelong_foundation_heading');?></h3>
                <?php }?>
                <?php if(get_field('bennelong_foundation_description')){ ?>
                <?php echo get_field('bennelong_foundation_description');?>
            <?php }?>        
            </div>
            <div class="col-12 col-md-4 text-end px-5">
                <?php if(get_field('bennelong_foundation_image')){ ?>  
                    <img src="<?php echo get_field('bennelong_foundation_image');?>" alt="Bennelong foundation" class="img-fluid">
                <?php }?>
          </div> 
        </div>
      </div>
    </div>
    <!-- // bennelong foundation -->    

    <!-- Grant Recipients slider -->
    <div class="grant-recipients">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col text-center">
                    <?php if(get_field('grant_recipients_heading')){ ?>
                        <h3 class="primary-color common-primary-heading"><?php echo get_field('grant_recipients_heading'); ?></h3>
                    <?php } ?>
                    <?php if(get_field('grant_recipients_description')){ ?>
                        <p class="pb-2"><?php echo get_field('grant_recipients_description'); ?></p>
                    <?php } ?>
                    <div class="organisations-icons">
                        <?php $images = get_field('grant_recipients_slider'); ?>
                        <div class="owl-carousel owl-theme grant-recipients-slider grant-recipients-pcview">
                            <?php get_grant_recipients_slider_images($images,3); ?>
                        </div>
                        <div class="owl-carousel owl-theme grant-recipients-slider grant-recipients-mobileview">
                            <?php get_grant_recipients_slider_images($images,5); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Grant Recipients -->

    <!-- Case Study -->
    <div class="case-study bg-gray">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="left-side col-12 col-lg-6 pe-0 pe-lg-5">
                    <?php if(get_field('case_study_heading')){ ?>
                        <h3 class="primary-color common-primary-heading"><?php echo get_field('case_study_heading'); ?></h3>
                    <?php } ?>
                    <?php if(get_field('case_study_description')){ ?>
                        <?php echo get_field('case_study_description'); ?>
                    <?php } ?>
                </div>
                <div class="right-side col-12 col-lg-6 d-flex align-items-center">
                    <?php if(get_field('case_study_video_link')){ ?>
                        <iframe width="715" height="425" src="<?php echo get_field('case_study_video_link'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- //Case Study -->

    <!-- Our Impact by Numbers -->
    <div class="our-business impact-by-numbers primary-background container-fluid">
        <div class="business-inner">
        <?php $group = get_field('in_number_impact_group','option'); 
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
            <?php } ?>  
        </div>
    </div>
    <!-- // Our Impact by Numbers -->

    <!-- Case Study -->
    <div class="case-study foundation-annual-report" <?php if(get_field('annual_report_background_image')){ ?>style="background: url(<?php echo get_field('annual_report_background_image'); ?>) top right no-repeat;"<?php } ?>>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="left-side col-12 col-lg-6 pe-0 pe-lg-5">
                    <?php if(get_field('annual_report_heading')){ ?>
                        <h3 class="primary-color common-primary-heading"><?php echo get_field('annual_report_heading'); ?></h3>
                    <?php } ?>
                    <?php if(get_field('annual_report_download_report')){ ?>
                        <a <?php if(get_field('annual_report_download_report_link')){ echo 'href="'.get_field('annual_report_download_report_link').'"'; echo 'download="Annual report"'; } ?>>
                            <p class="active-color"><?php echo get_field('annual_report_download_report'); ?></p>
                        </a>
                    <?php } ?>
                </div>
                <div class="right-side col-12 col-lg-6 d-flex align-items-center">
                    <?php if(get_field('annual_report_image')){ ?>
                        <img style="width: 100%;height: auto;" src="<?php echo get_field('annual_report_image'); ?>" alt="Annual report image">
                    <?php } ?>  
                </div>
            </div>
        </div>
    </div>
    <!-- //Case Study -->

    <!-- Our Vision for Reconciliation -->
    <div class="case-study our-vision bg-gray">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="left-side col-12 col-lg-6 pe-0 pe-lg-5">
                    <?php if(get_field('our_vision_heading')){ ?>
                        <h3 class="primary-color common-primary-heading"><?php echo get_field('our_vision_heading'); ?></h3>
                    <?php } ?>
                    <?php if(get_field('our_vision_description')){ ?>
                        <?php echo get_field('our_vision_description'); ?>
                    <?php } ?>
                    <?php if(get_field('download_our_reconciliation_heading')){ ?>
                        <a <?php if(get_field('download_our_reconciliation_link')){ echo 'href="'.get_field('download_our_reconciliation_link').'"'; echo "download='Action plan report'"; }?> class="reconciliation active-color webview">
                            <?php echo get_field('download_our_reconciliation_heading'); ?>
                        </a>
                    <?php } ?>
                </div>
                <div class="our-vision-right-img right-side col-12 col-lg-6 d-flex align-items-center text-center books-img">
                    <?php if(get_field('our_vision_image')){ ?>
                    <img src="<?php echo get_field('our_vision_image'); ?>" alt="Our Vision" class="img-fluid mx-auto">
                    <?php } ?>  
                </div>
                <?php if(get_field('download_our_reconciliation_heading')){ ?>
                        <a <?php if(get_field('download_our_reconciliation_link')){ echo 'href="'.get_field('download_our_reconciliation_link').'"'; echo "download='Action plan report'"; }?> class="reconciliation active-color mobileview">
                            <?php echo get_field('download_our_reconciliation_heading'); ?>
                        </a>
                    <?php } ?>
            </div>
        </div>
    </div>
    <!-- //Our Vision for Reconciliation -->

    <!-- Sustainability & Community -->
    <div class="sustainability" <?php if(get_field('s_c_background_image')){ ?>style="background: url(<?php echo get_field('s_c_background_image'); ?>);" <?php } ?>>
        <div class="container">
            <div class="sustainability-content text-center">
                <?php if(get_field('s_c_heading')){ ?>
                    <h2 class="text-white common-primary-heading"><?php echo get_field('s_c_heading'); ?></h2>
                <?php } ?>
                <?php if(get_field('s_c_description')){ ?>
                    <?php echo get_field('s_c_description'); ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Ends Sustainability & Community -->

    <!-- Carbon Neutral -->
    <div class="case-study our-vision carbonNeutral">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="left-side col-12 col-lg-6 pe-0 pe-lg-5">
                    <?php if(get_field('carbon_neutral_heading')){ ?>
                        <h3 class="primary-color common-primary-heading"><?php echo get_field('carbon_neutral_heading'); ?></h3>
                    <?php } ?>
                    <?php if(get_field('carbon_neutral_description')){ ?>
                        <?php echo get_field('carbon_neutral_description'); ?>
                    <?php } ?>
                    <?php if(get_field('carbon_neutral_read_more_text')){ ?>
                        <a href="<?php if(get_field('carbon_neutral_read_more_link')){ echo get_field('carbon_neutral_read_more_link'); } ?>" class="reconciliation active-color" target="_blank"><?php echo get_field('carbon_neutral_read_more_text'); ?></a>
                    <?php } ?>                
                </div>
                <div class="right-side col-12 col-lg-6 d-flex align-items-center text-center books-img">
                    <?php if(get_field('carbon_neutral_image')){ ?>
                        <img src="<?php echo get_field('carbon_neutral_image'); ?>" alt="TRACElogo" class="img-fluid mx-auto trace-img">        
                    <?php } ?>                    
                </div>
            </div>
        </div>
    </div>
    <!-- Ends Carbon Neutral -->    
<?php get_footer();?>