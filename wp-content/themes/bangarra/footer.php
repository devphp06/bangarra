        <div class="footer-main">
          <div class="footer-inner">
              <?php  $rows = get_field('footer_top_repeater','option');
                if($rows){
                  ?><div class="footer-top">   <?php
                  foreach($rows as $row)
                  { ?>
                      <div class="content"><h3 class="text-white"><?php echo $row['content'];?></div>
                  <?php }
                  ?></div><?php
                }
              ?>            
            <div class="footer-center" style="background-image: url(<?php echo get_field('footer_image','option');?>)">
            <?php if(get_field('footer_center_text','option')){?>
              <p class="text-white text-center"><?php echo get_field('footer_center_text','option');?></p>
            <?php }?>
            </div>
            <?php if ( has_nav_menu( 'footer_menu' ) ) : ?>
              <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'footer_menu',
                        'menu_class'      => 'menu-wrapper',
                        'container_class' => 'footer-bottom bg-dark', 
                        'items_wrap'      => '<ul class="footer-list">%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
              ?>
            <?php endif; ?>
          </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>