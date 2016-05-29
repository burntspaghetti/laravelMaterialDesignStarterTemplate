<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link rel="shortcut icon" href="{!! asset('parallax-template/enso.png') !!}">
  <title>Nick Bertanzetti</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{!! asset('parallax-template/css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{!! asset('parallax-template/css/style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="{!! asset('font-awesome-4.6.2/css/font-awesome.min.css') !!}">
</head>
<body>
<nav class="teal lighten-2" role="navigation">
  <div class="nav-wrapper container">
    {{--<a id="logo-container" href="#" class="brand-logo white-text">Nick Bertanzetti</a>--}}
    <ul class="right hide-on-med-and-down">
      <li><a href="#" class="white-text">Navbar Link</a></li>
    </ul>

    <ul id="nav-mobile" class="side-nav">
      <li><a href="#">Navbar Link</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>

<div id="index-banner">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l8 offset-l2">
          <div class="card hoverable" style="overflow: hidden;">
            <div class="card-image waves-effect waves-block waves-light">
              <img src="{!! asset('me3.jpg') !!}">
              {{--<h1 class="card-title activator">Nick Bertanzetti</h1>--}}
              {{--<span class="card-title activator " style="font-size:15px !important">IT Guru</span>--}}
            </div>
            <div class="card-content">
              <a>
                <span class="activator"><i class="material-icons right">more_vert</i></span>
              </a>
              <span class="card-title grey-text text-darken-4">Nick Bertanzetti</span>
              <p class="teal-text text-lighten-2">IT Guru</p>
              <br>
              <div class="card-action center">
                <a class="waves-effect waves-light btn">What can I do for you?</a>
              </div>
            </div>

            {{--<div class="card-action">--}}
              {{--<a href="#">What can I do for you?</a>--}}
            {{--</div>--}}

            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Hi there.<i class="material-icons right">close</i></span>
              <p class="light flow-text">My name is Nick Bertanzetti and I'd like to help you navigate the electric age. Whether you want to build an entire system from scratch or chat about an idea, I'm always open for discussion. Scroll on down to learn more about what I can do for you.</p>
              <img src="{!! asset('parallax-template/calvin.jpg') !!}" alt="Unsplashed background img 2" style="display: block;margin-left: auto;margin-right: auto; width:75%;">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <br><br>
    </div>
  </div>
</div>
<div class="container">
  <div class="section">
    <h3 class="center">Services</h3>
    <!--   Icon Section   -->
    <ul id="staggered-row-1">
      <div class="row">
        <li style="opacity: 0">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h2>
              <h5 class="center">Consulting</h5>
              <p class="light flow-text">Survey and analyze your workflow. Improve your processes. Increase efficiency. Leverage technology.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="fa fa-keyboard-o" aria-hidden="true"></i></h2>
              <h5 class="center">Software Development</h5>
              <p class="light flow-text">Full lifecycle development: plan, anaylze, design, build, test, deploy, and maintain your systems.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="fa fa-desktop" aria-hidden="true"></i>
                <i class="fa fa-tablet" aria-hidden="true"></i>
                <i class="fa fa-mobile" aria-hidden="true"></i>
              </h2>
              <h5 class="center">Responsive Design</h5>
              <p class="light flow-text">Mobile-first development. Make your app look and feel great on devices of all sizes.</p>
            </div>
          </div>
        </li>
      </div>
    </ul>
    <ul id="staggered-row-2">
      <div class="row">
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="fa fa-database" aria-hidden="true"></i>
              </h2>
              <h5 class="center">Database Administration</h5>
              <p class="light flow-text">Migrate your Excel spreadsheets into a database, optimize performance, and feed the data into your systems. </p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
              </h2>
              <h5 class="center">Data Analytics</h5>
              <p class="light flow-text">Process, analyze, and visualize important information. Perform machine learning analysis to automate the data mining process.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="fa fa-server" aria-hidden="true"></i>
              </h2>
              <h5 class="center">Server Administration</h5>
              <p class="light flow-text">Hosting solutions: installation, configuration, maintenance, and service management.</p>
            </div>
          </div>
        </li>
      </div>
    </ul>
    <ul id="staggered-row-3">
      <div class="row">
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="fa fa-calendar" aria-hidden="true"></i>
              </h2>
              <h5 class="center">Project Management</h5>
              <p class="light flow-text">Utilize the right methodologies and tools to efficiently deliver your project on schedule. Foster collaboration and transparent communication.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="fa fa-wheelchair" aria-hidden="true"></i>
              </h2>
              <h5 class="center">Accessibility</h5>
              <p class="light flow-text">Adhere to W3C Web Content Accessibility Guidelines (WCAG) and ensure accessibility for disabled peoples.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </h2>
              <h5 class="center">Security</h5>
              <p class="light flow-text">Encrypt your data, authenticate and authorize your users, manage access. Test and analyze vulnerabilities.</p>
            </div>
          </div>
        </li>
      </div>
    </ul>
  </div>
</div>

<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h3>Portfolio</h3>
      </div>
    </div>
    <div class="row">
      <div class="col s12 center">
        <h4 class="light">Card Action Options</h4>
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/philo/login.png') !!}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">This is a link</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
        <h4 class="light">Card Action Options</h4>
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/supplystore/supplyStoreHome.png') !!}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">This is a link</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
        <h4 class="light">Card Action Options</h4>
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/nursingCheckout/checkout.png') !!}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">This is a link</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s8 m4">
        <h4 class="light">Card Action Options</h4>
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/immunizations/immunizations.png') !!}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">This is a link</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
    </div>
      <div class="col s8 m4">
        {{--<h4 class="light">Card Action Options</h4>--}}
        {{--<div class="card">--}}
        {{--<div class="card-image waves-effect waves-block waves-light">--}}
        {{--<img class="activator" src="{!! asset('screenshots/supplystore/supplyStoreHome.png') !!}">--}}
        {{--</div>--}}
        {{--<div class="card-content">--}}
        {{--<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>--}}
        {{--<p><a href="#!">This is a link</a></p>--}}
        {{--</div>--}}
        {{--<div class="card-reveal">--}}
        {{--<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>--}}
        {{--<p>Here is some more information about this product that is only revealed once clicked on.</p>--}}
        {{--</div>--}}
        {{--<div class="card-action">--}}
        {{--<a href="#">This is a link</a>--}}
        {{--<a href="#">This is a link</a>--}}
        {{--</div>--}}
        {{--</div>--}}
      </div>
      <div class="col s8 m4">
        <h4 class="light">Card Action Options</h4>
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/immunizations/immunizations.png') !!}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">This is a link</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s8 m4">
        <h4 class="light">Card Action Options</h4>
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/internationalcoursecredit/internationalCourseCreditForm.png') !!}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Data Feed Integration<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">This is a link</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s8 m4">
        <h4 class="light">Card Action Options</h4>
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/promenade/promenadeForm2.png') !!}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">This is a link</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>

  </div>
</div>

<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h3>Tools</h3>
        <ul class="collapsible popout" data-collapsible="accordion">
          <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i><a class="waves-effect waves-light btn">Languages</a></div>
            <div class="collapsible-body">
              <p>
              <div class="chip">
                PHP
              </div>
              <div class="chip">
                PL/SQL
              </div>
              <div class="chip">
                JavaScript
              </div>
              <div class="chip">
                HTML
              </div>
              <div class="chip">
                CSS/SASS
              </div>
              <div class="chip">
                PL/SQL
              </div>
              <div class="chip">
                C#
              </div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">place</i><a class="waves-effect waves-light btn">Frameworks/Libraries</a></div>
            <div class="collapsible-body">
              <p>
              <div class="chip">
                Laravel
              </div>
              <div class="chip">
                jQuery
              </div>
              <div class="chip">
                Vue.js
              </div>
              <div class="chip">
                Twitter Bootstrap
              </div>
              <div class="chip">
                ASP.NET MVC
              </div>
              <div class="chip">
                Highcharts
              </div>
              <div class="chip">
                Chart.js
              </div>
              <div class="chip">
                Image Intervention
              </div>
              <div class="chip">
                DataTables
              </div>
              <div class="chip">
                phpCAS
              </div>
              <div class="chip">
                phpAES
              </div>
              <div class="chip">
                FPDF/FPDI
              </div>
              <div class="chip">
                Font Awesome
              </div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i><a class="waves-effect waves-light btn">APIs</a></div>
            <div class="collapsible-body">
              <p>
              <div class="chip">
                Twitter
              </div>
              <div class="chip">
                Google Maps
              </div>
              <div class="chip">
                Stack Exchange
              </div>
              <div class="chip">
                Alchemy API
              </div>
              <div class="chip">
                OCI
              </div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i><a class="waves-effect waves-light btn">OS</a></div>
            <div class="collapsible-body">
              <p>
              <div class="chip">
                Linux
              </div>
              <div class="chip">
                Microsoft
              </div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i><a class="waves-effect waves-light btn">Databases</a></div>
            <div class="collapsible-body">
              <p>
              <div class="chip">
                Oracle
              </div>
              <div class="chip">
                MySQL
              </div>
              <div class="chip">
                Microsoft
              </div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i><a class="waves-effect waves-light btn">Servers</a></div>
            <div class="collapsible-body">
              <p>
              <div class="chip">
                Apache
              </div>
              <div class="chip">
                Nginx
              </div>
              <div class="chip">
                Microsoft
              </div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i><a class="waves-effect waves-light btn">Other</a></div>
            <div class="collapsible-body">
              <p>
              <div class="chip">
                AMP
              </div>
              <div class="chip">
                WAVE Toolbar
              </div>
              <div class="chip">
                Chrome DevTools
              </div>
              <div class="chip">
                Firebug
              </div>
              <div class="chip">
                Vagrant
              </div>
              <div class="chip">
                Bitbucket
              </div>
              <div class="chip">
                Git
              </div>
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light"><b>Would you like to know more?</b></h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="{!! asset('parallax-template/issTimelapse6.jpg') !!}" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
  <div class="section">

    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h3>Contact</h3>
        <h5 class="light flow-text">Let's team up.</h5>
        <h5 class="light flow-text">What can we do together?</h5>
        {{--<img src="{!! asset('parallax-template/calvin.jpg') !!}" alt="Unsplashed background img 2">--}}
      </div>
    </div>

  </div>
</div>


{{--<div class="parallax-container valign-wrapper">--}}
  {{--<div class="section no-pad-bot">--}}
    {{--<div class="container">--}}
      {{--<div class="row center">--}}
        {{--<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<div class="parallax"><img src="{!! asset('parallax-template/background3.jpg') !!}" alt="Unsplashed background img 3"></div>--}}
{{--</div>--}}

<footer class="page-footer teal">
  <div class="container">
    <div class="row center">
      <a href="mailto:nsbertanzetti@gmail.com" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-fw fa-envelope"></i></a>
      <a href="#" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-fw fa-linkedin"></i></a>
      <a href="#" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-fw fa-git"></i></a>
      <a href="#" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-fw fa-stack-overflow"></i></a>
    </div>
    {{--<div class="row">--}}
        {{--<p class="center-align grey-text text-lighten-4">The long night;</p>--}}
        {{--<p class="center-align grey-text text-lighten-4">The sound of water,</p>--}}
        {{--<p class="center-align grey-text text-lighten-4">Says what I think.</p>--}}
    {{--</div>--}}
  </div>
  <div class="footer-copyright">
    <div class="container center-align">
      <p>Don't worry be happy <i class="fa fa-fw fa-smile-o"></i></p>
    </div>
  </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{!! asset('parallax-template/js/materialize.js') !!}"></script>
<script src="{!! asset('parallax-template/js/init.js') !!}"></script>

<script>
  var options = [
    {selector: '#staggered-row-1', offset: 200, callback: function() {
      Materialize.showStaggeredList("#staggered-row-1");
    } },
    {selector: '#staggered-row-2', offset: 200, callback: function() {
      Materialize.showStaggeredList("#staggered-row-2");
    } },
    {selector: '#staggered-row-3', offset: 200, callback: function() {
      Materialize.showStaggeredList("#staggered-row-3");
    } }
  ];
  Materialize.scrollFire(options);
</script>

</body>
</html>
