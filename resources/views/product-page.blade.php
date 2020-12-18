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

<div class="pages-header col-12 text-center p-4" style="width: 100%;">
  <h3 class="mt-4"><?php the_field('page_title'); ?></h3>
</div>
    
<!-- <//?php echo var_dump($group1['featured_image']   ) ?> -->

<div id="product">
    <div class="container">
        
        <ul class="nav nav-pills nav-fill mb-5" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-lead-tab" data-toggle="pill" href="#pills-lead" role="tab" aria-controls="pills-lead" aria-selected="true">Lead Carbon Battery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-solar-tab" data-toggle="pill" href="#pills-solar" role="tab" aria-controls="pills-solar" aria-selected="false">Solar Panel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-transformer-tab" data-toggle="pill" href="#pills-transformer" role="tab" aria-controls="pills-transformer" aria-selected="false">Transformer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-inverter-tab" data-toggle="pill" href="#pills-inverter" role="tab" aria-controls="pills-inverter" aria-selected="false">Inverter</a>
            </li>
          </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-lead" role="tabpanel" aria-labelledby="pills-lead-tab">
                <div class="row justify-content-center prod-group_one">
                    <div class="col-md-4 col-6 align-self-center single-product">
                        <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                      </div>
                      <div class="col-md-4 col-6 align-self-center single-product-description">              
                        <h3><?= $group1['featured_image_title'] ?></h3>
                        <p><?= $group1['feature_image_description'] ?></p>
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#staticBackdrop">
                            Launch modal
                        </button>  
                    </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="pills-solar" role="tabpanel" aria-labelledby="pills-solar-tab">
                <div class="row justify-content-center prod-group_one">
                    <div class="col-md-4 col-6 align-self-center single-product">
                      <img src="<?php echo esc_url( $group2['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                    </div>
                    <div class="col-md-5 col-6 align-self-center single-product-description">
                        <h3><?= $group2['featured_image_title'] ?></h3>
                        <p><?= $group2['feature_image_description'] ?></p>                
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-transformer" role="tabpanel" aria-labelledby="pills-transformer-tab">
                <div class="row justify-content-center prod-group_two">
                    <div class="col-md-4 col-6 align-self-center single-product">
                        <img src="<?php echo esc_url( $group3['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                    </div>
                    <div class="col-md-4 col-6 align-self-center single-product-description">
                        <h3><?= $group3['featured_image_title'] ?></h3>
                        <p><?= $group3['featured_image_description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-inverter" role="tabpanel" aria-labelledby="pills-inverter-tab">
                <div class="row justify-content-center prod-group_two">
                    <div class="col-md-4 col-6 align-self-center single-product">
                      <img src="<?php echo esc_url( $group4['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
                    </div>
                    <div class="col-md-4 col-6 align-self-center single-product-description">
                      <h3><?= $group4['featured_image_title'] ?></h3>
                      <p><?= $group4['featured_image_description'] ?></p>
                    </div>
                  </div>
            </div>
        </div>

    </div>
</div>
<?
// php endif; 

?> 
@endsection
