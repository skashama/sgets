{{--
  Template Name: Product Page
--}}

@extends('layouts.app')

@section('content')  

<?php
$group1 = get_field('featured_image_group1');
$group2 = get_field('featured_image_group2');
$group3 = get_field('featured_image_group3');
$group4 = get_field('featured_image_group4');
$headerImage = get_field('page_header');

// if( $group1 ): ?>

<div class="page-header" style="width: 100%;">
    <img src="<?php echo esc_url( $headerImage['url'] ); ?>" class="img-fluid" alt="<?php echo esc_attr( $headerImage['alt'] ); ?>" />
</div>
    
<!-- <//?php echo var_dump($group1['featured_image']   ) ?> -->

<div id="product">
    <div class="container">
        <div class="page-title">
            <h2><?php the_field('page_title'); ?></h2>
            <hr>
            <p><?php the_field('page_description') ?></p>
        </div>

        <div class="row prod-group_one">
            <div class="col-xs-12 col-md-6 single-product">
                <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                <h3><?= $group1['featured_image_title'] ?></h3>
                <p><?= $group1['feature_image_description'] ?></p>
            </div>
            <div class="col-xs-12 col-md-6 single-product">
                <img src="<?php echo esc_url( $group2['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                <h3><?= $group2['featured_image_title'] ?></h3>
                <p><?= $group2['feature_image_description'] ?></p>
            </div>

        </div>

        <div class="row prod-group_two">
            <div class="col-xs-12 col-md-6 single-product">
                <img src="<?php echo esc_url( $group3['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                <h3><?= $group3['featured_image_title'] ?></h3>
                <p><?= $group3['featured_image_description'] ?></p>
            </div>
            <div class="col-xs-12 col-md-6 single-product">
                <img src="<?php echo esc_url( $group4['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                <h3><?= $group4['featured_image_title'] ?></h3>
                <p><?= $group4['featured_image_description'] ?></p>
            </div>
        </div>
    </div>
</div>
<?
// php endif; 

?> 
@endsection