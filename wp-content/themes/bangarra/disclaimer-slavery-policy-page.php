<?php 
/**
 * Template name: Disclaimer Slavery Policy
 */
get_header();?>

    <!-- anonymous-information -->
    <div class="content-main">
      <div class="common-header-strip">
        <div class="container">
        <?php if(get_field('page_title')){?>
          <h1 class="banner-heading text-white"><?php echo get_field('page_title');?></h1>
        <?php }?>
        </div>
      </div>
      <div class="anonymous-information">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-7">
                <?php $content_data = get_field('content');
                    if($content_data){
                        foreach($content_data as $data){?>
                        <?php if($data['heading']){ ?>
                            <h3 class="primary-color common-primary-heading"><?php echo $data['heading']; ?></h3>
                        <?php } ?>
                        <?php if($data['description']){echo $data['description'];} ?>        
                <?php } } ?>
            </div>
            <div class="col-12 col-md-5 d-none d-md-block rounded-circle text-end mt-5 pt-5">
            <?php if(get_field('image')){?>
                <img src="<?php echo get_field('image');?>" alt="" class="img-fluid mt-3 pt-4">
            <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //anonymous-information -->


<?php get_footer();?>