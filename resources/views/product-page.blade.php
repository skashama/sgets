{{--
  Template Name: Product Page
--}}


<?php
$group1 = get_field('featured_image_group1');
$group2 = get_field('featured_image_group2');
$group3 = get_field('featured_image_group3');

// if( $group1 ): ?>
<!-- <//?php echo var_dump($group1['featured_image']   ) ?> -->
    <div id="featured_image_group1">
        <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
        <div class="content">
            <h2 class="featured-image-title">
                <?= esc_attr( $group1['featured_image_title'] ); ?>
            </h2>
            <div class="featured-image-desc">
                <?php echo esc_attr( $group1['feature_image_description'] ); ?>
            </div>
        </div>
    </div>

    <div id="featured_image_group2">
        <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
        <div class="content">
            <h2 class="featured-image-title">
                <?= esc_attr( $group1['featured_image_title'] ); ?>
            </h2>
            <div class="featured-image-desc">
                <?php echo esc_attr( $group1['feature_image_description'] ); ?>
            </div>
        </div>
    </div>
    
    <div id="featured_image_group3">
        <img src="<?php echo esc_url( $group1['featured_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['featured_image']['alt'] ); ?>" />
        <div class="content">
            <h2 class="featured-image-title">
                <?= esc_attr( $group1['featured_image_title'] ); ?>
            </h2>
            <div class="featured-image-desc">
                <?php echo esc_attr( $group1['feature_image_description'] ); ?>
            </div>
        </div>
    </div>

<?
// php endif; 

?> 