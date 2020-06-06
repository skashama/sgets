<header class="banner">
  <div class="col top-bar pt-1">
    <div class="top-logo">
      <a class="navbar-brand" href="#">SRGET</a>
    </div>
    <div class="mid-info"></div>
    <div class="top-info">
      <div class="infoBox">(123)456-7890</div>
      <div class="infoBox">example@eg.com</div>
    </div>
  </div>
  <!-- <div class="container"> -->
    <!-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> -->
    <nav class="nav-primary">
      <!-- <a class="navbar-brand" href="#">SRGET</a> -->
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif 
    </nav>  
  <!-- </div> -->
</header>
