{{--
  Template Name: Team Page
--}}

@extends('layouts.app')

@section('content')  

<?php 
$group1 = get_field('featured_team_group_1');
$group2 = get_field('featured_team_group_2');
$group3 = get_field('featured_team_group_3');
$group4 = get_field('featured_team_group_4');
$headerImage = get_field('page_header');
?>

<div class="page-header" style="width: 100%;">
    <img src="<?php echo esc_url( $headerImage['url'] ); ?>" class="img-fluid" alt="<?php echo esc_attr( $headerImage['alt'] ); ?>" />
</div>

<div id="product">
    <div class="container">
        <div class="page-title">
            <h2><?php the_field('page_title'); ?></h2>
            <hr>
        </div>

        <div class="row mx-auto justify-content-center team-section_block">
            <div class="col-lg-3 text-center"><img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" /></div>
            <div class="col-lg-6 team-member_details">
                <h3><?= $group1['featured_image_title'] ?></h3>
                <p><?= $group1['featured_image_description'] ?></p>
            </div>
        </div>

        <div class="row mx-auto justify-content-center team-section_block">
            <div class="col-lg-3 text-center"><img src="<?php echo esc_url( $group2['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" /></div>
            <div class="col-lg-6 team-member_details">
                <h3><?= $group2['featured_image_title'] ?></h3>
                <p><?= $group2['featured_image_description'] ?></p>
            </div>
        </div>

        <div class="row mx-auto justify-content-center team-section_block">
            <div class="col-lg-3 text-center"><img src="<?php echo esc_url( $group3['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" /></div>
            <div class="col-lg-6 team-member_details">
                <h3><?= $group3['featured_image_title'] ?></h3>
                <p><?= $group3['featured_image_description'] ?></p>
            </div>
        </div>

        <div class="row mx-auto justify-content-center team-section_block">
            <div class="col-lg-3 text-center"><img src="<?php echo esc_url( $group4['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" /></div>
            <div class="col-lg-6 team-member_details">
                <h3><?= $group4['featured_image_title'] ?></h3>
                <p><?= $group4['featured_image_description'] ?></p>
            </div>
        </div>
    </div>
</div>


@endsection