{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')  
  <div style="width: 100%; background: white;">
    <!-- FROM  CUSTOM FRONT PAGE CONTENT -->

    <?php 
      $imageOne = get_field('homepage_sliderone');
      $imageTwo = get_field('homepage_slidertwo');
      $imageThree = get_field('homepage_sliderthree');
      $myText = get_field('page_title'); 

      // debuging function : var_dump
    //  echo  var_dump($myText);  

      // if( !empty( $imageOne ) && !empty( $imageTwo ) && !empty( $imageThree ) ): ?>

      <?php 
         // echo $get_details();
        // $images = array(
        //   get_field('homepage_sliderone'),
        //   get_field('homepage_slidertwo'),
        //   get_field('homepage_sliderthree')
        // ); ?>
      
      
        <div class="homeslide">
          <div><img src="<?php echo esc_url($imageOne['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
          <div><img src="<?php echo esc_url($imageTwo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
          <div><img src="<?php echo esc_url($imageThree['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
        </div>


    <!-- <?//php endif; ?> -->

    <!-- var_dump(get_field('homepage_sliderone')['url'])  -->

    <div class="">
      <div class="main-content">
        <h2><?= the_field('page_title'); ?></h2>
        <!-- {!!the_field('page_title')  !!} -->
        <!-- <img src="http://placehold.it/300" /> -->

        <p><?php the_field('textfield'); ?></p>
      </div>

      <!-- <p class="secondParg"><?php the_field('textfieldTwo'); ?></p> -->
      <div id="contact" class="text-center">
        <div class="container">
          <!-- <div class="col-md-8 col-md-offset-2 myContact-details"> -->
            <div class="contact-title">
              <h2><?php the_field('contact_title'); ?></h2>
              <hr>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-4"><?php the_field('contact_infouno'); ?></div>
              <div class="col-md-4"><?php the_field('contact_infotwo'); ?></div>
              <div class="col-md-4"><?php the_field('contact_infothree'); ?></div>
              <div class="clearfix"></div>
            </div>
          <!-- </div> -->
          
        </div>
      </div>
      
    </div>
    
    <!-- Calling this function from FrontPage.php controller   -->
    <!-- {!! $get_details !!} -->
  </div>
@endsection
