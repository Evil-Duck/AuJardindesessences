<!DOCTYPE html>
<html>
  <head>
    <title>Jardin des essences - {{ $title }}</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/unsemantic.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/font-awesome.min.css') }}">
    <script src="{{ elixir('js/jquery.min.js') }}"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
    <META NAME="TITLE" CONTENT="Au jardin des essences">
    <META NAME="AUTHOR" CONTENT="Milad Kirchhof">
    <META NAME="DESCRIPTION" CONTENT="Salon de massage ayurveda">
    <META NAME="KEYWORDS" CONTENT="Massage,ayurveda,huiles,essentielles,Bevaix,NE,Neuchatel,soins,jardin,essences">
    <META NAME="OWNER" CONTENT="Huguenin">
    <META NAME="ROBOTS" CONTENT="index,all">
    <META NAME="Reply-to" CONTENT="jardindesessences.ch">
    <META NAME="REVISIT-AFTER" CONTENT="15">
    <meta name="subject" content="Salon de massage Ayurveda"/>
    <meta viewport="">

  </head>
  <body>
    <nav>
      <ul class="big hide-on-mobile hide-on-tablet">
        <li><a href="/">Accueil</a></li>
        <li><a href="/horaires">Horaires</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/prestations">Prestations</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <div class="menu-btn hide-on-desktop">
        <i class="fa fa-bars"></i>
      </div>
      <ul class="small hide-on-desktop">
        <li><a href="/">Accueil</a></li>
        <li><a href="/horaires">Horaires</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/prestations">Prestations</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>
      @yield('content')
    <footer>
      <p>Copyright &copy; aujardindesessences.ch</p>
    </footer>
  </body>
</html>
