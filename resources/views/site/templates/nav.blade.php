<!-- Little nav bar for desktop -->
<div class="navbar-fixed hide-on-med-and-down" style="height: 40px" id="prueba">
  <nav style="z-index: 4;height:40px" role="navigation" class="z-depth-0" id="topnav">
    <div class="nav-wrapper" height="40px">
      <ul>
        <li>
          <a href="tel:4624201075" class="white-text">
            <i style="font-size: 13px;" class="material-icons left">phone</i>
            <span style="font-size: 13px;">+52 (1) 4624201075</span>
          </a>
        </li>
        <li>
          <a href="mailto:contacto@maritelascountry.com.mx?Subject=Hola" target="_top" class="white-text">
            <i style="font-size: 13px;" class="material-icons left ">mail</i>
            <span style="font-size: 13px;">contacto@maritelascountry.com.mx</span>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.facebook.com/wtcqueretaro/">
            ¡PONTE EN CONTACTO CON NOSOTROS!
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
  <!-- End little nav bar for desktop -->

  <!-- Little nav bar for mobil -->
<div class="navbar-fixed hide-on-large-only">
  <nav style="z-index: 4;" role="navigation" class="z-depth-0 " id="topnav-movil">
    <div class="nav-wrapper">
      <ul>
        <li>
          <a href="tel:4624201075" class="white-text">
            <i class="fa fa-phone" style="font-size: 13px;"></i>
          </a>
        </li>
        <li>
          <a href="mailto:contacto@maritelascountry.com.mx?Subject=Hola" target="_top" class="white-text">
            <i class="fa fa-envelope-o" style="font-size: 13px;"></i>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.facebook.com/wtcqueretaro/">
            <i class="fa fa-facebook-f" style="font-size: 13px;"></i>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.linkedin.com/in/wtcqueretaro/" class="white-text">
            <i class="fa fa-linkedin-square" style="font-size: 13px"></i>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.instagram.com/wtcqro/">
            <i class="fa fa-instagram" style="font-size: 13px"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Nav menu -->
<!-- For desktop -->
<div class="navbar-fixed hide-on-med-and-down">
  <nav role="navigation" id="undernav">
    <div class="nav-wrapper">
      <a class="center" href="Home" id="menulogo">
        <img class="menulogo" src="{{ asset('img/logo/logo.png') }}">
      </a>
      <a class="brand-logo center hide" href="Home" id="menupe">
        <img class="menupe" src="{{ asset('img/logo/simple.png') }}" class="hide">
      </a>
      <ul class="right" style="margin-right:50px">
        <li class="lh84" id="menuinicio">
          <a class="menu-link" href="#cover">
            INICIO
          </a>
        </li>
        <li class="lh84" id="menuproductos">
          <a class="menu-link" href="#productos">
            PRODUCTOS
          </a>
        </li>
        <li class="lh84" id="menublog">
          <a class="menu-link" href="#noticias">
            BLOG
          </a>
        </li>
        <li class="lh84" id="menucursos">
          <a class="menu-link" href="#cursos">
            CURSOS
          </a>
        </li>
        <li class="lh84" id="menucontacto">
          <a class="menu-link" href="#contacto">
            CONTACTO
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Mobile menu -->
<div class="navbar-fixed hide-on-large-only" >
  <nav class="z-depth-0" style="z-index: 4;" role="navigation" id="undernav-movil">
    <div class="nav-wrapper valign-wrapper ">
      <a href="#" data-activates="mobile-demo" class="button-collapse ">
        <i class="material-icons white-text" id="iconmenumovil">menu</i>
      </a>
      <a href="Home">
        <img src="{{ asset('img/logos/logomenumovilblanco.png') }}" class=" logonav" id="logocolormovil">
      </a>

    </div>
  </nav>
</div>
<!-- End Desktop navigation -->

<!-- Collapsible menu for movil -->
<ul class="side-nav collapsible" id="mobile-demo"  data-collapsible="accordion">
  <li><a href="Home">Home</a></li>
  <li><a href="Home">Home</a></li>
  <li><a href="Home">Home</a></li>
  <li><a href="Home">Home</a></li>
  <li><a href="Home">Home</a></li>
  <li><a href="Home">Home</a></li>
</ul>
<!-- End mobil navigation -->
