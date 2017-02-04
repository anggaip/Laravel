@extends('layouts.app')

@section('content')
            <br>
            <form method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
            <div class="mdl-card mdl-shadow--4dp mdl-cell--6-col mdl-cell--3-offset mdl-layout--large-screen-only">
                <div class="mdl-card-title" style="padding: 20px; background-color: #536DFE; color: #ffffff">Sign In</div>

              <div class="mdl-card__supporting-text">
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
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--8-col mdl-cell--2-offset">
                    <input class="mdl-textfield__input" type="email" name="email" id="email" value="{{ old('email') }}" pattern="[A-Z,a-z,@,.]*" autofocus>
                    <label class="mdl-textfield__label" for="email">E-Mail Address</label>
                    
                  </div>

                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--8-col mdl-cell--2-offset">
                    <input class="mdl-textfield__input" type="password" id="password" name="password">
                    <label class="mdl-textfield__label" for="password">Password</label>
                    
                  </div>

                  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--8-col mdl-cell--2-offset" for="remember" style="text-align: left">
                      <input type="checkbox" id="remember" name="remember" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Remember Me</span>
                    </label>

              </div>
              <div class="mdl-card__actions">
                <a class="btn btn-link mdl-cell--2-offset" href="{{ url('/password/reset') }}" style="text-decoration: none">Forgot Your Password?</a>
              <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-cell--2-col mdl-cell--2-offset">Sign In</button>
              <br><hr>
              <span class="mdl-cell--2-offset">Or <a href="{{url('/register')}}">Sign Up</a> if you don't have Account</span>
              </div>
              <br>
            </div>
            </form>
            
            <!--for mobile only-->
            <div class="mdl-cell mdl-layout--small-screen-only mdl-cell--12-col-tablet">
                <form method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-phone mdl-cell--12-col-tablet">
                        <input class="mdl-textfield__input" type="email" name="email" id="email" value="{{ old('email') }}" pattern="[A-Z,a-z,@,.]*" autofocus>
                        <label class="mdl-textfield__label" for="email">E-Mail Address</label>
                        
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-phone mdl-cell--12-col-tablet">
                        <input class="mdl-textfield__input" type="password" id="password" name="password">
                        <label class="mdl-textfield__label" for="password">Password</label>
                        
                      </div>

                        <br><br>
                        <center>
                      <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-cell--12-col-phone mdl-cell--5-col-tablet" style="height: 4em">Sign In</button>
                      <br><br>
                      <a class="btn btn-link" href="{{ url('/password/reset') }}" style="text-decoration: none">Forgot Your Password?</a>
 <br>                       <br>
                        <span>Or <a href="{{url('/register')}}">Sign Up</a> if you don't have Account</span>
                      </center>
                </form>
            </div>
            <!-- ./for mobile only -->

@endsection
