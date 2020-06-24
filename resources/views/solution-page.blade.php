{{--
  Template Name: Solution Page
--}}

@extends('layouts.app')

@section('content')  

<?php
    $group1 = get_field('featured_solution_group_1');
    $group2 = get_field('featured_solution_group2');
    $group3 = get_field('featured_solution_group3');
    $headerImage = get_field('page_header');
?>

<div class="page-header" style="width: 100%;">
    <img src="<?php echo esc_url( $headerImage['url'] ); ?>" alt="<?php echo esc_attr( $headerImage['alt'] ); ?>" />
</div>

<div id="solution">
    <div class="container">
        <div class="page-title">
            <h2><?php the_field('page_title'); ?></h2>
            <hr>
            <p><?php the_field('page_description') ?></p>
        </div>

        <div class="row row-cols-1 row-cols-md-2">  
        <div class="col mb-4">
            <div class="card">
            <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group1['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group1['featured_image_description'] ?></p>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group1['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group1['featured_image_description'] ?></p>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group1['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group1['featured_image_description'] ?></p>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group1['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group1['featured_image_description'] ?></p>
            </div>
            </div>
        </div>
       </div>
    </div>
</div>
@endsection