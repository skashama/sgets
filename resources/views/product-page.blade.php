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
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Lead Carbon Battery Core Technology</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Operation Mode</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Negative Electrode Carbon Technology</td>
                    <td>Adding carbon materials, which is with
                        Superelevation surface area and
                        Superconductivity, into negative electrode
                        formula can restrain the sulfation of
                        negative electrode active materials,
                        improve electrode’s low temperature
                        performance and charging
                        acceptance. performance.</td>
                  </tr>
                  <tr>
                    <td>Special Positive Electrode Active Substance Structure</td>
                    <td>The network structure of positive electrode
                        active materials can effectively inhibit the
                        softening of positive electrode lead paste,
                        improve high current charge-discharge
                        performance and charging acceptance
                        capacity.</td>
                  </tr>
                  <tr>
                    <td>Corrosion-resistant Alloy Technology</td>
                    <td>With strong corrosion resistance, creep
                        resistance and electrochemical properties,
                        a complete fluid collector structure is
                        maintained during the battery usage cycle,
                        increasing the hydrogen and oxygen
                        evolution potential, reducing water loss
                        and increasing life span.</td>
                  </tr>
                  <tr>
                    <td>Battery Separator with Hydrophobic Group</td>
                    <td>With the features of Patent third electrode,
                        ultra-fine glass fiber AGM + hydrophobic
                        polymer polyolefin fiber, ultrastrong
                        stretch-proof properties, stable oxygen
                        recombination channel, and durable pressure
                        maintenance performane, the battery service
                        life is improved.</td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>

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
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#staticBackdrop">
                    Launch modal
                </button>                  
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