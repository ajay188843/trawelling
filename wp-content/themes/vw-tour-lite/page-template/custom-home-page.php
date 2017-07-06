<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>
<?php /** slider section **/ ?>
<?php if( get_theme_mod('slide_number') != ''){ ?>
<div class="slider-main">
  <?php 
    $slideimage = '';
    $slideno = array();
    $slideimage = array(
      '1' =>  get_template_directory_uri().'',
      '2' =>  get_template_directory_uri().'',
      '3' =>  get_template_directory_uri().'',
    );

    $count =  get_theme_mod('slide_number', '3');
  ?>
    <div id="slider" class="nivoSlider">
    <?php 
      $n = 0;
      for($i=1;$i<=$count;$i++) {
        $n++;
        $slideno[] = $n;
        ?>
        <img src="<?php echo esc_url( get_theme_mod('slide_image'.$i, $slideimage[$i]) ); ?>" alt="<?php echo esc_attr(get_theme_mod('slide_title'.$i, true)); ?>" title="#slidecaption<?php echo esc_html($i); ?>" />
    <?php } ?>
    </div> 
    <?php
    foreach( $slideno as $sln ){ ?>   
    <?php
    } ?>
</div>
<?php }?>
<?php do_action('vw_tour_lite_after_slider'); ?>

<section id="our-services">
  <div class="innerlightbox">
    <div class="container">
      <?php if( get_theme_mod('vw_tour_lite_main_title') != ''){ ?>
      <h3 class="borderline-grey"><?php echo esc_html(get_theme_mod('vw_tour_lite_main_title','Why Choose Us?')); ?></h3>
      <div class="images_border">
        <img src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/images/img-border.png') ); ?>" alt="">
      </div>
      <?php }?>
      <div class="col-md-12 choosemargintop">
        <?php

        $number=get_theme_mod('vw_tour_lite_service_number', 3);
        for ($i=1; $i<=$number; $i++) {
              ?>    
          <div <?php if($number == 1){ echo ' class="col-md-12"'; }elseif($number == 2){ echo 'class="col-md-6"'; }elseif($number == 3){ echo 'class="col-md-4"';  }else { echo 'class="col-md-4 col-sm-4 col-xs-12"'; } ?> >
            <div class="page-box">
              <div class="box-image padding0 text-center">
                <?php if( get_theme_mod('vw_tour_lite_service_image'.$i) != ''){ ?>
                  <img class="service-img" src="<?php echo esc_url(get_theme_mod('vw_tour_lite_service_image'.$i)); ?>" alt=""/>
                <?php }?>
              </div>
              <div class="clearfixfix"></div> 
              <div class="box-content padding0 text-center">
                <?php if( get_theme_mod('vw_tour_lite_service_title'.$i) != ''){ ?>
                  <h4><?php echo esc_html(get_theme_mod('vw_tour_lite_service_title'.$i)); ?> </h4>
                <?php }?>
                <?php if( get_theme_mod('vw_tour_lite_service_subcontent'.$i) != ''){ ?>
                  <p><?php echo esc_html (get_theme_mod ('vw_tour_lite_service_subcontent'.$i,'vw-tour-lite'));?></p>
                <?php }?>
                <div class="clearfixfix"></div> 
              </div>
              <div class="clearfixfix"></div>      
            </div>
          </div>
              <?php if($i%3 == 0){ echo '<div class="clearfix topmargin"></div>';}
             
            }
            ?>
      </div>          
    </div>
  </div>
</section>
<?php do_action('vw_tour_lite_after_ourservices'); ?>

<?php get_footer(); ?>