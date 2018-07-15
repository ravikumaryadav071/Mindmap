<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    @yield('css')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/base.js') }}"></script>
  </head>
  <body>
    <nav class="nav-bar">
      <div class="close-btn">
        <i class="fas fa-times"></i>
      </div>
      <!-- <div class="nav-bar-item">
        Home
      </div> -->
      <div class="nav-bar-item collapsible" data-toggle="collapse" data-target="#why-us-dropdown">
        <a href="home">Home</a>
        <i class="fas fa-angle-right collapse-icon"></i>
      </div>
      <div id="why-us-dropdown" class="collapse">
        <div class="collapse-item">
          For Quality
        </div>
        <div class="collapse-item">
          Time and Quality
        </div>
        <div class="collapse-item">
          Strength
        </div>
      </div>
      <div class="nav-bar-item">
        <a href="our-team">Our Team</a>
      </div>
      <div class="nav-bar-item">
        <a href="our-services">Our Services</a>
      </div>
      <div class="nav-bar-item">
        <a href="our-network">Our Network</a>
      </div>
      <div class="nav-bar-item">
        <a href="our-clients">Our Clients</a>
      </div>
      <div class="nav-bar-item">
        <a href="contact-us">Contact Us</a>
      </div>
    </nav>
    <div id="main" class="col-md-12 zero-padding">
      <header class="menu-bar">
        <div class="hamburger" href="javascript: void(0)">
          <i class="fas fa-bars hamburger-icon" id="hamburger-icon"></i>
        </div>
        <ul class="company-name">
          <li>M</li>
          <li>i</li>
          <li>n</li>
          <li>d</li>
          <li>M</li>
          <li>a</li>
          <li>p</li>
        </ul>
      </header>
      <main class="main-content">

        @yield('content')

      </main>
      <footer class="footer">
        © 2018, All Rights Reserved. MindMap Advance Research Pvt. Ltd.
      </footer>
    </div>
  </body>
</html>
