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

<div class="page-header" style="width: 100%;">
    <img src="<?php echo esc_url( $headerImage['url'] ); ?>" class="img-fluid" alt="<?php echo esc_attr( $headerImage['alt'] ); ?>" />
</div>

<div id="solution">
    <div class="container">
        <div class="page-title">
            <h2><?php the_field('page_title'); ?></h2>
            <hr>
            <p><?php the_field('page_description') ?></p>
        </div>

    <div class="row row-cols-1 row-cols-md-2 mx-auto">  
        <div class="col mb-4">
            <div class="card h-100">
            <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group1['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group1['featured_image_description'] ?></p>
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupOneModal">
                    Launch modal
                </button>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
            <img src="<?php echo esc_url( $group2['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group2['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group2['featured_image_description'] ?></p>
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupTwoModal">
                    Description
                </button>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
            <img src="<?php echo esc_url( $group3['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group3['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group3['featured_image_description'] ?></p>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
            <img src="<?php echo esc_url( $group4['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group4['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group4['featured_image_description'] ?></p>
            </div>
        </div>
        </div>
       </div>

       <div class="row row-cols-1 row-cols-md-2 mx-auto">  
        <div class="col mb-4">
            <div class="card h-100">
            <img src="<?php echo esc_url( $group5['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group5['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group5['featured_image_description'] ?></p>
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupFiveModal">
                    Launch modal
                </button>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
            <img src="<?php echo esc_url( $group6['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $group6['featured_image_title'] ?></h5>
                <p class="card-text"><?= $group6['featured_image_description'] ?></p>
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupSixModal">
                    Launch modal One
                </button>
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#groupSix_Modal">
                    Launch modal Two
                </button>
            </div>
            </div>
        </div>
       </div>

       

    </div>
</div>
@endsection