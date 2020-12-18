<header class="sgets-header container-fluid p-0">
  <div class="col sgets-header_top pt-1">
      <div class="top-logo">
      </div>
      <div class="mid-info">
      </div>
      <div class="top-info">
        <a class="pr-3 text-white mail-link" href="mailto: jpherradura@aol.com">jpherradura@aol.com<i class="fas fa-envelope pl-1"></i></a>
      </div>
  </div>

  <div class="row col-12 sgets-header_main">
    <div class="col-3 logo-wrapper">
      <a class="brand" href="{{ home_url('/175-2') }}">
        <img src="<?= get_theme_root_uri(); ?>/sgets/dist/images/">
      </a>
    </div>
    <div class="col-9 float-right">
      <nav class="sgets-header_menu">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif 
      </nav>  
    </div>
  </div>
</header>
