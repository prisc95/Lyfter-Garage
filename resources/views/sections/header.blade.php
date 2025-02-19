<script src="https://kit.fontawesome.com/ed508f75e6.js" crossorigin="anonymous"></script>

<header class="banner">
  {{-- <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a> --}}

<section class="header">
    <div class="container">
      
    <div class="nav-left">
        <img class="nav-left-img" src="wp-content/themes/sage/resources/images/logo.png" alt="Lyfter Logo">
    </div>

    <div class="nav-right">
        <div class="nav-text-wrapper">
        <a href="#" class="nav-text">Lyfter Garage</a>
        <a href="#" class="nav-text">Lyfter Doorbell</a>
        </div>
        <div class="nav-btn-wrapper">
        <button class="nav-btn btn-left"><a href="#"><i class="fa-regular fa-face-smile" style="color: #000000;"></i>Support</a></button>
        <button class="nav-btn btn-right"><a href="#"><i class="fa-solid fa-arrow-down" style="color: #ffffff;"></i>Download the app</a></button>
        </div>
    </div>

    <div class="dropdown">
        <span><i class="fa-solid fa-bars fa-xl"></i></span>
        <div class="dropdown-content">
          <a href="#" class="nav-text">Lyfter Garage</a>
          <a href="#" class="nav-text">Lyfter Doorbell</a>
          <a href="#" class="nav-text">Support</a>
          <a href="#" class="nav-text">Download the app</a>
        </div>
    </div>

</div> 
</section>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
