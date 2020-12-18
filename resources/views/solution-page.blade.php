{{--
  Template Name: Solution Page
--}}

@extends('layouts.app')

@section('content')  

<?php
    $group1 = get_field('featured_solution_group_1');
    $group2 = get_field('featured_solution_group_2');
    $group3 = get_field('featured_solution_group_3');
    $group4 = get_field('featured_solution_group_4');
    $group5 = get_field('featured_solution_group_5');
    $group6 = get_field('featured_solution_group_6');
    $headerImage = get_field('page_header');
    $groupOneModal = get_field('featured_solution_modal_group_1');
    $groupfiveModal = get_field('featured_solution_modal_group_5');
    $groupsixModal = get_field('featured_solution_modal_group_6');
?>
  
  <!-- Modal -->
  <div class="modal fade" id="groupOneModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><?= $groupOneModal['featured_image_title'] ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img style="display: block; margin: auto;" src="<?php echo esc_url( $groupOneModal['featured_image']['url'] ); ?>" class="img-fluid" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
        </div>
        <div class="modal-footer">
            <?= $groupOneModal['featured_image_description'] ?>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="groupTwoModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">EMS Management System</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Functions</th>
                    <th scope="col">Monitoring Standards</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Remote monitoring</td>
                    <td>Once/24h (adjustable)</td>
                  </tr>
                  <tr>
                    <td>Remote management</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Data backup</td>
                    <td>Internal resistance data is kept for 1 year and other data for half a year</td>
                  </tr>
                  <tr>
                    <td>Alarm information</td>
                    <td>60 cycles</td>
                  </tr>
                  <tr>
                    <td>Analysis report</td>
                    <td>Once/month</td>
                  </tr>
                  <tr>
                    <td>Information push</td>
                    <td>Yes</td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="groupFiveModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><?= $groupfiveModal['featured_title'] ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p><?= $groupfiveModal['featured_text'] ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="groupSixModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ESS Topology</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="<?php echo esc_url( $groupsixModal['featured_image_one']['url'] ); ?>" class="img-fluid" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="groupSix_Modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Container Layout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="<?php echo esc_url( $groupsixModal['featured_image_two']['url'] ); ?>" class="img-fluid" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
        </div>
      </div>
    </div>
  </div>

<div class="pages-header col-12 text-center p-4" style="width: 100%;">
  <h3 class="mt-4"><?php the_field('page_title'); ?></h3>
</div>

<div id="solution">
    <div class="container">

    <div class="solution-list row justify-content-center mx-auto">
      <div class="solution-item col-12 col-md-6 col-lg-4 mb-4">
        <div class="solution-media">
          <figure class="featured-image">
            <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
          </figure>
        </div>
        <div class="solution-content">
          <h3><?= $group1['featured_image_title'] ?></h3>
          <p><?= $group1['featured_image_description'] ?></p>
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupTwoModal">Learn more</button>
        </div>
      </div>

      <div class="solution-item col-12 col-md-6 col-lg-4 mb-4">
        <div class="solution-media">
          <figure class="featured-image">
            <img src="<?php echo esc_url( $group2['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
          </figure>
        </div>
        <div class="solution-content">
          <h3><?= $group2['featured_image_title'] ?></h3>
          <p><?= $group2['featured_image_description'] ?></p>
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupTwoModal">Learn more</button>
        </div>
      </div>

      <div class="solution-item col-12 col-md-6 col-lg-4 mb-4">
        <div class="solution-media">
          <figure class="featured-image">
            <img src="<?php echo esc_url( $group3['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
          </figure>
        </div>
        <div class="solution-content">
          <h3><?= $group3['featured_image_title'] ?></h3>
          <p><?= $group3['featured_image_description'] ?></p>
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupTwoModal">Learn more</button>
        </div>
      </div>

      <div class="solution-item col-12 col-md-6 col-lg-4 mb-4">
        <div class="solution-media">
          <figure class="featured-image">
            <img src="<?php echo esc_url( $group4['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
          </figure>
        </div>
        <div class="solution-content">
          <h3><?= $group4['featured_image_title'] ?></h3>
          <p><?= $group4['featured_image_description'] ?></p>
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupTwoModal">Learn more</button>
        </div>
      </div>

      <div class="solution-item col-12 col-md-6 col-lg-4 mb-4">
        <div class="solution-media">
          <figure class="featured-image">
            <img src="<?php echo esc_url( $group5['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
          </figure>
        </div>
        <div class="solution-content">
          <h3><?= $group5['featured_image_title'] ?></h3>
          <p><?= $group5['featured_image_description'] ?></p>
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupTwoModal">Learn more</button>
        </div>
      </div>

      <div class="solution-item col-12 col-md-6 col-lg-4 mb-4">
        <div class="solution-media">
          <figure class="featured-image">
            <img src="<?php echo esc_url( $group6['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
          </figure>
        </div>
        <div class="solution-content">
          <h3><?= $group6['featured_image_title'] ?></h3>
          <p><?= $group6['featured_image_description'] ?></p>
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupTwoModal">Learn more</button>
        </div>
      </div>

    </div>
      

    </div>
</div>
@endsection