{{--
  Template Name: Team Page
--}}

@extends('layouts.app')

@section('content')  

<?php 
$group1 = get_field('featured_team_group_1');
$headerImage = get_field('page_header');
?>

<div class="page-header" style="width: 100%;">
    <img src="<?php echo esc_url( $headerImage['url'] ); ?>" alt="<?php echo esc_attr( $headerImage['alt'] ); ?>" />
</div>


<div id="product">
    <div class="container">
        <div class="page-title">
            <h2><?php the_field('page_title'); ?></h2>
            <hr>
        </div>

        <div class="row mx-auto justify-content-center team-section_block">
            <div class="col-lg-3 text-center"><img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" /></div>
            <div class="col-lg-6">
                <h3>Some text</h3>
                <p><?= $group1['featured_image_description'] ?></p>
            </div>
        </div>

        <div class="row mx-auto justify-content-center team-section_block">
            <div class="col-lg-3 text-center"><img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" /></div>
            <div class="col-lg-6">
                <h3>Some text</h3>
                <p><?= $group1['featured_image_description'] ?></p>
            </div>
        </div>

        <div class="row mx-auto justify-content-center team-section_block">
            <div class="col-lg-3 text-center"><img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" /></div>
            <div class="col-lg-6">
                <h3>Some text</h3>
                <p><?= $group1['featured_image_description'] ?></p>
            </div>
        </div>

        <div class="row mx-auto justify-content-center team-section_block">
            <div class="col-lg-3 text-center"><img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" /></div>
            <div class="col-lg-6">
                <h3>Some text</h3>
                <p><?= $group1['featured_image_description'] ?></p>
            </div>
        </div>
    </div>
</div>


@endsection