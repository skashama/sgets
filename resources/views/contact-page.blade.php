{{--
  Template Name: Contact Page
--}}

@extends('layouts.app')

@section('content')  

<?php 
$headerImage = get_field('page_header');
?>

<div class="pages-header col-12 text-center p-4" style="width: 100%;">
  <h3 class="mt-4"><?php the_field('page_header_title'); ?></h3>
</div>

<div id="contact" class="text-center">
      <div class="container">          
          <div class="form-intro">
            <h5><?php the_field('page_content_title'); ?></h5>
          </div>
          <div class="row justify-content-center">
            <div class="form-element">
              <?php the_field('contact_form'); ?>
            </div>
            <div class="clearfix"></div>
          </div>          
      </div>
</div>


@endsection