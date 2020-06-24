{{--
  Template Name: Product Page
--}}

@extends('layouts.app')

@section('content')  

<?php
$group1 = get_field('featured_image_group1');
$group2 = get_field('featured_image_group2');
$group3 = get_field('featured_image_group3');
$headerImage = get_field('page_header');

// if( $group1 ): ?>

<div class="page-header" style="width: 100%;">
    <img src="<?php echo esc_url( $headerImage['url'] ); ?>" alt="<?php echo esc_attr( $headerImage['alt'] ); ?>" />
</div>
    
<!-- <//?php echo var_dump($group1['featured_image']   ) ?> -->

<div id="product">
    <div class="container">
        <div class="page-title">
            <h2><?php the_field('page_title'); ?></h2>
            <hr>
            <p><?php the_field('page_description') ?></p>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                <h3>Some text</h3>
                <p><?= $group1['feature_image_description'] ?></p>
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                <h3>Some text</h3>
                <p><?= $group1['feature_image_description'] ?></p>
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                <h3>Some text</h3>
                <p><?= $group1['feature_image_description'] ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                <h3>Some text</h3>
                <p><?= $group1['feature_image_description'] ?></p>
            </div>
        </div>
    </div>
</div>
<?
// php endif; 

?> 
@endsection