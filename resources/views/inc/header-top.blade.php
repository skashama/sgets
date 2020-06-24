{{--
  Template Name: header top Page
--}}

<?php 
  $sgets_logo = get_field('site_logo');
?>

<div class="col top-bar pt-1">
    <div class="top-logo">
    <!-- Try other format for img src in blade syntax  -->
      <img src="<?= $sgets_logo['url']; ?>" alt="SGETS">
    </div>
    <div class="mid-info">
    </div>
    <div class="top-info">
      <div class="infoBox">(123)456-7890</div>
      <div class="infoBox">example@eg.com</div>
    </div>
</div>