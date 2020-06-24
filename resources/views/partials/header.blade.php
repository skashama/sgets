<header class="banner">
  <div class="col top-bar pt-1">
      <div class="top-logo">
        <a class="brand" href="{{ home_url('/175-2') }}"><img src="<?= get_theme_root_uri(); ?>/sgets/dist/images/logo.png"></a>
      </div>
      <div class="mid-info">
      </div>
      <div class="top-info">
        <a class="pr-3 text-white mail-link" href="mailto: shaloombowa@gmail.com">example@gmail.com<i class="fas fa-envelope pl-1"></i></a>
      </div>
  </div>
  <!-- <div class="container"> -->
    <!-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> -->
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif 
    </nav>  
  <!-- </div> -->
</header>
