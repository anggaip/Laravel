@extends('layouts.app')

@section('content')
<br>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Welcome
          @if(Auth::check())
            {{Auth::user()->name}}
          @endif
        </h2>
      </div>
      <div class="mdl-card__supporting-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Mauris sagittis pellentesque lacus eleifend lacinia...
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          Get Started
        </a>
      </div>
      <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">share</i>
        </button>
      </div>
    </div>
    
    <br>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col-desktop">

    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col-desktop" style="text-align: center; font-size: 32px;">
            Free Tutorials
        </div>
    </div>
    
    <br>
    <div class="mdl-grid">
        <div class="card-square tutor-1 mdl-cell mdl-cell--3-col-desktop mdl-card mdl-shadow--16dp">
          <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Laravel 5.3</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenan convallis.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Get Started
            </a>
          </div>
        </div>

        <div class="card-square tutor-2 mdl-cell mdl-cell--3-col-desktop mdl-card mdl-shadow--16dp">
          <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Codeigniter 3</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenan convallis.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Get Started
            </a>
          </div>
        </div>

        <div class="card-square tutor-3 mdl-cell mdl-cell--3-col-desktop mdl-card mdl-shadow--16dp">
          <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">PHP For Beginner</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenan convallis.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Get Started
            </a>
          </div>
        </div>

        <div class="card-square tutor-4 mdl-cell mdl-cell--3-col-desktop mdl-card mdl-shadow--16dp">
          <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">AngularJS</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenan convallis.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Get Started
            </a>
          </div>
        </div>
    </div>

    </div>
</div>
@endsection