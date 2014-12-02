<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>@yield('title', 'Dpolly.me DWATest')</title>
    <link rel="stylesheet" href='{{ URL::asset('css/foundation.css') }}' />
    <link rel="stylesheet" href='{{ URL::asset('css/app.css') }}' />
    <script src="{{ URL::asset('/js/vendor/jquery.js') }}"></script>
    <script src="{{ URL::asset('/js/vendor/fastclick.js') }}"></script>
    <script src="{{ URL::asset('js/foundation/foundation.js') }}"></script>
    <script src="{{ URL::asset('/js/foundation/foundation.accordion.js') }}"></script>

</head>
<body>
    <script>
      $(document).foundation();
    </script>

     <div id="header" class="row">
            <div class="small-2 columns">
                  <img src="{{ URL::asset('img/logo2.png') }}">
            </div>
            <div class="small-10 columns">
                  <div class="panel">
                        <h1>Horticulture Scrapbook</h1>
                        <h4>A Horticulturist's Digital Toolbox</h4>
                  </div>
            </div>
     </div>

    <div id="menu" class="row">
            <div class="panel">
            <div class="small-3 columns">
                <div class="panel" id="menu1">
                        <h6>Welcome!</h6>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="panel" id="menu2">
                        <h6>Sign Up</h6>
                </div>
            </div>
            <div class="small-3 columns">
                  <div class="panel" id="menu3">
                        <h6>Login</h6>
                  </div>
            </div>
            <div class="small-3 columns">
                  <div class="panel" id="menu4">
                        <h6>Logout</h6>
                  </div>
            </div>
        </div>
        </div>
    </div>

  <div id="content" class="row">
        <dl class="accordion" data-accordion>
          <dd class="accordion-navigation">
            <a href="#panel1">Plant Database</a>
            <div id="panel1" class="content active">
                <div class="tabs-content">
                <div class="content active" id="panel2-1">
                   <div id="content" class="row">
                              <div class="small-4 columns">
                                  <a href="plantlist">Plant Database</a><br>
                              </div>
                              <div class="small-8 columns">
                                       @yield('content')
                              </div>
                          </div>


                </div>
              </div>
            </div>
          </dd>
          <dd class="accordion-navigation">
            <a href="#panel2">The Garden</a>
            <div id="panel2" class="content">
              Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </dd>
          <dd class="accordion-navigation">
            <a href="#panel3">Horticulture Tours</a>
            <div id="panel3" class="content">
              Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </dd>
        </dl>

</div>

        <div id="footer" class="row">
            <div class="panel" >
                <h6>CSCIE-15 Dynamic Web Applications DWATest</h6>
            </div>
        </div>

    <script>
      $(document).foundation();
    </script>
</body>
</html>