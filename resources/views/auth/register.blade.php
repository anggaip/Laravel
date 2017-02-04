@extends('layouts.app')

@section('content')
            <br>
            
            <form method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
            <div class="mdl-grid">
                <div class="mdl-card mdl-cell--8-col-desktop mdl-cell--2-offset mdl-shadow--4dp mdl-layout--large-screen-only">
                    <div class="mdl-card-title" style="padding: 20px; background-color: #607D8B; color: #ffffff">Sign Up</div>

                  <div class="mdl-card__supporting-text">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            <br>
                        @endif
                        
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <br>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--2-offset mdl-cell--8-col">
                        <input class="mdl-textfield__input" type="text" name="name" id="name" value="{{ old('name') }}" pattern="[A-Z,a-z, ]*" autofocus>
                        <label class="mdl-textfield__label" for="name">Name</label>
                      </div>
                        
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--2-offset mdl-cell--8-col">
                        <input class="mdl-textfield__input" type="email" name="email" id="email" value="{{ old('email') }}" pattern="[A-Z,a-z,@,.]*" autofocus>
                        <label class="mdl-textfield__label" for="email">E-Mail Address</label>
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--2-offset mdl-cell--8-col"">
                        <input class="mdl-textfield__input" type="password" id="password" name="password">
                        <label class="mdl-textfield__label" for="password">Password</label>
                        
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--2-offset mdl-cell--8-col"">
                        <input class="mdl-textfield__input" type="password" id="password_confirm" name="password_confirmation">
                        <label class="mdl-textfield__label" for="password_confirm">Password Confirmation</label>
                        
                      </div>

                    <span class="mdl-cell--5-col mdl-cell--2-offset">By clicking signup, you accept our <a href="#">terms and cookie use</a>.</span>
                  </div>
                  <div class="mdl-card__actions">
                  <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-cell--7-offset mdl-cell--2-col" style="height: 50px; margin-bottom: 20px">Sign Up</button>
                  </div>
                </div>
            </div>
            </form>
            

            <!--for mobile only-->
            <div class="mdl-cell mdl-layout--small-screen-only mdl-cell--12-col-tablet">
                <form method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-phone mdl-cell--12-col-tablet">
                        <input class="mdl-textfield__input" type="text" name="name" id="name" value="{{ old('name') }}" pattern="[A-Z,a-z, ]*" autofocus>
                        <label class="mdl-textfield__label" for="name">Name</label>
                        
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-phone mdl-cell--12-col-tablet">
                        <input class="mdl-textfield__input" type="email" name="email" id="email" value="{{ old('email') }}" pattern="[A-Z,a-z,@,.]*" autofocus>
                        <label class="mdl-textfield__label" for="email">E-Mail Address</label>
                        
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-phone mdl-cell--12-col-tablet">
                        <input class="mdl-textfield__input" type="password" id="password" name="password">
                        <label class="mdl-textfield__label" for="password">Password</label>
                        
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-phone mdl-cell--12-col-tablet">
                        <input class="mdl-textfield__input" type="password" id="password_confirm" name="password_confirmation">
                        <label class="mdl-textfield__label" for="password_confirm">Password Confirmation</label>
                        
                      </div>

                      <span>By clicking signup, you accept our <a href="#">terms and cookie use</a>.</span>

                        <br><br>
                        <center>
                      <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-cell--12-col-phone mdl-cell--5-col-tablet" style="height: 4em">Sign Up</button>
                      </center>
                        <br>
                      <span>Or <a href="{{url('/login')}}">Sign In</a> if you have an account.</span>
                </form>
            </div>
            <!-- ./for mobile only -->

@endsection
