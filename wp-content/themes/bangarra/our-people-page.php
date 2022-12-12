<?php 
/**
 * Template name: Our People
 */
get_header();?>

    <!-- banner -->
    <div class="people-banners banner-main" <?php if(get_field('banner_image')){?>style="background-image: url(<?php echo get_field('banner_image');?>);"<?php }?>>
      <div class="container">
        <div class="row">
          <div class="banner-sec">
            <?php if(get_field('banner_heading')){?><h1 class="banner-heading"><?php echo get_field('banner_heading');?></h1><?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- //banner -->

    <!-- Bangarra Family Office -->
    <div class="bangarra-family-office">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="left-side col-12 col-lg-8 me-3 pe-5">
            <?php if(get_field('family_office_heading')){?>
              <h3 class="primary-color heading-sm"><?php echo get_field('family_office_heading');?></h3>
            <?php }?>
            <?php if(get_field('family_office_text')){?>
              <p class="pe-3"><?php echo get_field('family_office_text');?></p>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- // Bangarra Family Office -->

    <!-- Board of Directors -->
    <div class="board-directors bg-gray">
      <?php if(get_field('bod_heading')){?>
        <div class="div-heading d-flex justify-content-center align-items-center">
            <h3 class="heading-sm d-inline-block"><?php echo get_field('bod_heading');?></h3>
        </div>
      <?php }?>
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="left-side col-12 col-lg-3">
            <?php if(get_field('bod_side_heading')){?>
              <h3 class="primary-color common-primary-heading pt-lg-5"><?php echo get_field('bod_side_heading');?></h3>
            <?php }?>
          </div>
          <div class="right-side col-lg-8">
            <div class="row">
              <?php $rows = get_field('meet_board_of_directors_repeater');
                 if($rows){
                  $i=0;
                  foreach($rows as $row) { $i++;?>
                  <div class="col-md-6 <?php if($i==2){ echo 'card2';}?>">
                    <div class="img-box">
                      <?php if($row['image']){?>
                        <img src="<?php echo $row['image'];?>" alt="img" class="img-fluid our-people-image">
                      <?php }?>
                    </div>
                    <div class="people-detail">
                      <?php if($row['name']){?><p class="person-name"><?php echo $row['name'];?></p><?php }?>
                      <?php if($row['qualification']){?><p class="heading-sm"><?php echo $row['qualification'];?></p><?php }?>
                      <?php if($row['designation']){?><p class="designation person-name"><?php echo $row['designation'];?></p><?php }?>
                    </div>
                  </div>
              <?php }}?>
            </div>
            <?php if(get_field('description')){?><?php echo get_field('description');?><?php }?>
          </div>
        </div>
      </div>
    </div>
      <!-- //Board of Directors -->

      <!-- //Board of Directors : Directors-->
    <!-- card details -->
     <?php $rows = get_field('other_directors_members');
       if($rows){
        $i =0;
        foreach($rows as $row) { $i++;?>
          <div class="cards-details <?php if($i%2==0){echo 'bg-gray';}?>">
            <div class="container">
              <div class="row reverse-col d-flex align-items-center">
                <div class="people-detail col-12 col-lg-8">
                  <?php if($row['name']){?><h3 class="person-name"><?php echo $row['name'];?></h3><?php }?>  
                  <?php if($row['qualification']){?><p class="heading-sm"><?php echo $row['qualification'];?></p><?php }?>  
                  <?php if($row['designation']){?><span class="designation person-name d-block pt-3"><?php echo $row['designation'];?></span><?php }?>  
                  <?php if($row['description']){?><?php echo $row['description'];?><?php }?>  
                </div>
                <div class="right-side col-12 col-lg-4 text-center">
                  <?php if($row['image']){?>
                    <img src="<?php echo $row['image'];?>" alt="image" class="img-fluid our-people-image">
                  <?php }?>  
                </div>
              </div>
            </div>
          </div>
    <?php }}?>
    <!-- //Board of Directors : Directors-->

    <!-- Executive Team -->
    <div class="board-directors bg-gray">
      <?php if(get_field('executive_team_heading')){?>
        <div class="div-heading d-flex justify-content-center align-items-center">
            <h3 class="heading-sm d-inline-block"><?php echo get_field('executive_team_heading');?></h3>
        </div>
      <?php }?>
    </div>
    <?php $rows = get_field('executive_team_members');
       if($rows){
        $i =0;
        foreach($rows as $row) { $i++;?>
          <div class="cards-details <?php if($i%2!=0){echo 'bg-gray ';} if($i ==1){echo 'executive_team-member1';}?>">
            <div class="container">
              <div class="row reverse-col d-flex align-items-center">
                <div class="people-detail col-12 col-lg-8">
                  <?php if($row['name']){?><h3 class="person-name"><?php echo $row['name'];?></h3><?php }?>  
                  <?php if($row['qualification']){?><p class="heading-sm"><?php echo $row['qualification'];?></p><?php }?>  
                  <?php if($row['designation']){?><span class="designation person-name d-block pt-3"><?php echo $row['designation'];?></span><?php }?>  
                  <?php if($row['description']){?><?php echo $row['description'];?><?php }?>  
                </div>
                <div class="right-side col-12 col-lg-4 text-center">
                  <?php if($row['image']){?>
                    <img src="<?php echo $row['image'];?>" alt="image" class="img-fluid our-people-image">
                  <?php }?>  
                </div>
              </div>
            </div>
          </div>
    <?php }}?>
    <!-- //Executive Team -->

    <!-- Our Business section -->
    <div class="our-business impact-by-numbers primary-background container-fluid">
        <div class="business-inner">
        <?php $group = get_field('in_number_people_group','option'); 
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
    <!-- // Our Business section-->
<?php get_footer();?>