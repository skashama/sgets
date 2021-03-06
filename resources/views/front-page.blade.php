{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')  
  <div style="width: 100%; background: white;">

    <?php 
      $imageOne = get_field('homepage_sliderone');
      $imageTwo = get_field('homepage_slidertwo');
      $imageThree = get_field('homepage_sliderthree');
      $myText = get_field('page_title');
      $link = get_field('cta_link');
      $linkTwo = get_field('cta_link_two');  
    ?>
      
      <div class="page-header">
        <div class="col-12 text-center p-4 homepage-banner-text">
          <p class="justify-content-center"><?php the_field('homepage_banner_text'); ?></p>
        </div>
        <div class="homeslide">
          <div class="slider-container"><img src="<?php echo esc_url($imageOne['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
          <div class="slider-container"><img src="<?php echo esc_url($imageTwo['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
          <div class="slider-container"><img src="<?php echo esc_url($imageThree['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
        </div>
      </div>


    <div class="">
      <div class="main-content">
        <h2><?= the_field('page_title'); ?></h2>


        <p><?php the_field('textfield'); ?></p>
        <div class="button-group">
          <?php
          if( $link ): ?>
            <a href="<?php echo esc_url( $link ); ?>" class="btn btn-outline-info btn-lg" tabindex="-1" role="button"><?= the_field('cta_one'); ?></a>
            <a href="<?php echo esc_url( $linkTwo ); ?>" class="btn btn-outline-secondary btn-lg" tabindex="-1" role="button"><?= the_field('cta_two'); ?></a>
          <?php endif; ?>
        </div>
      </div>


      <div id="contact" class="text-center">
        <div class="container">

            <div class="contact-title">
              <h2><?php the_field('contact_title'); ?></h2>
              
            </div>
            <div class="row justify-content-center">
              <div class="col 12 col-md-6 col-lg-3"><?php the_field('contact_infouno'); ?></div>
              <div class="col 12 col-md-6 col-lg-3"><?php the_field('contact_infotwo'); ?></div>
              <div class="col 12 col-md-6 col-lg-3"><?php the_field('contact_infothree'); ?></div>
              <div class="col 12 col-md-6 col-lg-3"><?php the_field('contact_infofour'); ?></div>  
              <div class="clearfix"></div>
            </div>
         
        </div>
      </div>
      
    </div>
    
  </div>
@endsection
