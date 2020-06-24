{{--
  Template Name: Contact Page
--}}

@extends('layouts.app')

@section('content')  

<?php 
$headerImage = get_field('page_header');
?>

<div class="page-header" style="width: 100%;">
    <div class="col-12 text-center p-4 contact-banner-text">
        <p><?php the_field('contact_banner_text') ?></p>
        <p class="justify-content-center"><?php the_field('contact_banner_text_2') ?></p>
    </div> 
    <div class="contact-banner-image"> 
       <img src="<?php echo esc_url( $headerImage['url'] ); ?>" alt="<?php echo esc_attr( $headerImage['alt'] ); ?>" />
    </div>
</div>

<div id="contact" class="text-center">
        <div class="container">
          <!-- <div class="col-md-8 col-md-offset-2 myContact-details"> -->
            <div class="contact-title">
              <h2><?php the_field('page_title'); ?></h2>
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


@endsection