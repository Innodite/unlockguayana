<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>UnlockGuayana</title>
  <script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
    function hideURLbar(){ window.scrollTo(0,1); } 
  </script>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

  <!-- Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
  <link href="{{ url('/') }}/css/app.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Lato';
    }

    .fa-btn {
      margin-right: 6px;
    }
  </style>
</head>
<body id="app-layout">
  <div class="header_top">
    <div class="col-sm-6 header-top-left">
      <div class="box">
        <select tabindex="4" class="dropdown drop">
          <option value="" class="label" value="">Dollar</option>
          <option value="1">Dollar</option>
          <option value="2">Euro</option>
          <option value="3">Bolívar</option>
        </select>
      </div>
      <div class="box1">
        <select tabindex="4" class="dropdown lang_changed">
          <option value="{{ App::getLocale() }}" class="label" value="">{{ Config::get('languages')[App::getLocale()] }}</option>
          @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
              <option value="{{ $lang }}">{{$language}}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="col-sm-6 header-top-right">
      <div class="col-xs-8 phone"><p>{{ trans('app.snood.support') }}</p></div>
      <div class="col-xs-4 check_box">
        <a href="#"> 
          <ul class="check">
            <i class="cart"> </i>
            <li class="cart_desc">{{ trans('app.snood.checkout') }}</li>
            <div class="clearfix"> </div>
          </ul>
        </a>
      </div>
      <div class="clearfix"></div>  
    </div>
    <div class="clearfix"></div>
  </div>

  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ url('/') }}/images/logo.png" alt="" class="imglogo" />
        </a>
      </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav" id="nav">
        <li class="current"><a href="{{ url('/home') }}">{{ trans('app.menu.home') }}</a></li>
        <li><a href="{{ url('/about') }}">{{ trans('app.menu.about') }}</a></li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {{ trans('app.menu.services.parent') }} <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown_wli">
              <a href="{{ route('unlock_imei_service') }}">
                {{ trans('app.menu.services.unlock_imei') }}
              </a>
            </li>
            <li class="dropdown_wli">
              <a href="{{ route('check_imei_service') }}">
                {{ trans('app.menu.services.check_imei') }}
              </a>
            </li>
            <li class="dropdown_wli">
              <a href="{{ route('unlock_hash_service') }}">
                {{ trans('app.menu.services.unlock_hash') }}
              </a>
            </li>
            <li class="dropdown_wli">
              <a href="services.html">
                {{ trans('app.menu.services.activations') }}
              </a>
            </li>
            <li class="dropdown_wli">
              <a href="services.html">
                {{ trans('app.menu.services.credits') }}
              </a>
            </li>
            <li class="dropdown_wli">
              <a href="services.html">
                {{ trans('app.menu.services.direct_care') }}
              </a>
            </li>
          </ul>
        </li>
        <li><a href="{{ url('/blog') }}">{{ trans('app.menu.blog') }}</a></li>
        <li><a href="{{ url('/contact') }}">{{ trans('app.menu.contact') }}</a></li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
          <li><a href="{{ url('/login') }}">{{ trans('app.menu.login') }}</a></li>
          <li><a href="{{ url('/register') }}">{{ trans('app.menu.register') }}</a></li>
        @else

          @if (Entrust::hasRole(['root','admin']))
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Config <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown_wli">
                  <a href="{{ route('app_configs.index') }}">
                    App Config
                  </a>
                </li>
                @if (Entrust::hasRole('root'))
                  <li class="dropdown_wli">
                    <a href="{{ route('roles.index') }}">
                      Roles
                    </a>
                  </li>
                @endif
                <li class="dropdown_wli">
                  <a href="{{ route('users.index') }}">
                    Users
                  </a>
                </li>
                <li class="dropdown_wli">
                  <a href="{{ route('apis_configs.index') }}">
                    Apis Config
                  </a>
                </li>
                <li class="dropdown_wli">
                  <a href="{{ route('exchanges_rates.index') }}">
                    Exchanges Rates
                  </a>
                </li>
                <li class="dropdown_wli">
                  <a href="{{ route('currencies.index') }}">
                    Currencies
                  </a>
                </li>
              </ul>
            </li>
          @endif

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ url('/logout') }}">
                  <i class="fa fa-btn fa-sign-out"></i>
                  {{ trans('app.menu.logout') }}
                </a>
              </li>
            </ul>
          </li>
        @endif
      </ul>
    </div>
    </div>
  </nav>

  <!-- Si recibe algún mensaje instantaneo -->
  @include('flash::message')
  @if(\Session::has('message'))
    @include('store.partials.message')
  @endif
  @include('vendor.flash.message')
  <!-- Si es la pagina principal -->
  @if(Request::path() == '/')
    <div class="header">
      <div class="header_bot_grid">
        <h1>{{ trans('app.text_in_banner') }}</h1>
        <div class="header-btns">
          <a class="plans btn btn-primary1 btn-normal btn-inline" href="{{ url('plans') }}">
            {{ trans('app.see_plans') }}
          </a>
          <a class="plans btn btn-primary2 btn-normal btn-inline" href="#">
            {{ trans('app.buy_now') }}
          </a>
        </div>
        <span> </span>
      </div>
    </div>
  @endif

  @yield('content')

  @include('footer.footer')
  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  <script src="{{ url('/') }}/js/all.js"></script>
  <script src="{{ url('/') }}/js/jquery.easydropdown.js"></script>
  @yield('scripts')
</body>
</html>
