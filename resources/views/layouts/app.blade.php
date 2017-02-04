<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Applants') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue-indigo.min.css">
    <style>
    .demo-card-wide.mdl-card {
      width: 100%;
    }
    .demo-card-wide > .mdl-card__title {
      color: #fff;
      height: 275px;
      background: url('images/welcome_card.png') center / cover;
    }
    .demo-card-wide > .mdl-card__menu {
      color: #fff;
    }
    .card-square.mdl-card {
      height: 320px;
    }
    .card-square > .mdl-card__title {
      color: #fff;
    }
    .tutor-1 > .mdl-card__title {
      background: url('images/laravel5.jpg') bottom right 15% no-repeat #46B6AC;
    }
    .tutor-2 > .mdl-card__title {
      background: url('images/codeigniter.png') bottom right 15% no-repeat #46B6AC;
    }
    .tutor-3 > .mdl-card__title {
      background: url('images/php_web.png') bottom right 15% no-repeat #46B6AC;
    }
    .tutor-4 > .mdl-card__title {
      background: url('images/angular.png') bottom right 15% no-repeat #46B6AC;
    }
    </style>
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title"><a href="{{url('/')}}" style="text-decoration: none; color: #ffffff">Applants</a></span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation">
            @if(Auth::guest())
            <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect mdl-layout--large-screen-only" style="margin-right: 8px" href="{{ url('/login') }}">Sign In</a>
            <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect mdl-layout--large-screen-only" style="background-color: #607D8B; color: #ffffff" href="{{ url('/register') }}">Sign Up</a>
            @else
            <!-- Right aligned menu below button -->

            <button id="demo-menu-lower-right"
                    class="mdl-button mdl-js-button mdl-button--icon">
              <i class="material-icons">person</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                for="demo-menu-lower-right">
                <li class="mdl-menu__item">
                    <a class="mdl-navigation__link" href="#" style="color: #616161">{{Auth::user()->name}}</a>
                </li>
              <li class="mdl-menu__item">
                <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </li>
            </ul>
            @endif
          </nav>
        </div>
      </header>

      <div class="mdl-layout__drawer" style="padding: 0px">
        <span class="mdl-layout-title" style="height: 100px; background-color: #EF5350; color: #ffffff; padding-top: 40px; margin-right: 0px; border: none">Applants</span>
        <nav class="mdl-navigation">
            @if(Auth::guest())
          <a class="mdl-navigation__link" href="{{ url('/login') }}">Sign In</a>
          <a class="mdl-navigation__link mdl-js-ripple-effect" href="{{ url('/register') }}">Sign Up</a>
            @else
          <a class="mdl-navigation__link" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            @endif
          <hr>
          <a class="mdl-navigation__link" href="#">PHP For Beginner</a>
          <a class="mdl-navigation__link" href="#">Laravel 5.3</a>
          <a class="mdl-navigation__link" href="#">Codeigniter 3</a>
          <a class="mdl-navigation__link" href="#">AngularJS</a>
          <a class="mdl-navigation__link" href="#">Blog</a>
          <a class="mdl-navigation__link" href="#">Template</a>
        </nav>
      </div>

      <main class="mdl-layout__content">
        <div class="page-content">

            @yield('content')
        
        </div>
            <br><br>
        
<footer class="mdl-mini-footer" style="background-color: #212121">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">Applants</div>
    <ul class="mdl-mini-footer__link-list">
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>
  <div class="mdl-mini-footer__right-section">
      <ul class="mdl-mini-footer__link-list">
          <li><a href="#"><span></span>About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Privacy & Terms</a></li>
        </ul>
  </div>
</footer>
      </main>

    </div>
    
    <!-- Scripts -->
</body>
</html>
