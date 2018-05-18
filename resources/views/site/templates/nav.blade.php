<!-- Little nav bar for desktop -->
<div class="navbar-fixed hide-on-med-and-down" style="height: 40px" id="prueba">
  <nav style="z-index: 4;height:40px" role="navigation" class="z-depth-0" id="topnav">
    <div class="nav-wrapper" height="40px">
      <ul>
        <li>
          <a href="tel:4626071044" class="white-text">
            <i style="font-size: 13px;" class="material-icons left">phone</i>
            <span style="font-size: 13px;">+52 (1) 4626071044</span>
          </a>
        </li>
        <li>
          <a href="mailto:contacto@maritelascountry.com.mx?Subject=Hola" target="_top" class="white-text">
            <i style="font-size: 13px;" class="material-icons left ">mail</i>
            <span style="font-size: 13px;">contacto@maritelascountry.com.mx</span>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.facebook.com/maritelascountry/">
            ¡PONTE EN CONTACTO CON NOSOTROS!
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<!-- End little nav bar for desktop -->

<!-- Little nav bar for mobil -->
  <div class="navbar-fixed hide-on-large-only" style="height: 40px">
    <nav style="z-index: 4;height:40px" role="navigation" class="z-depth-0" id="topnavmovil">
      <div class="nav-wrapper" height="40px">
        <ul>
          <li>
            <a href="tel:4626071044" class="white-text">
              <i style="font-size: 13px;" class="material-icons center">phone</i>
            </a>
          </li>
          <li>
            <a href="mailto:contacto@maritelascountry.com.mx?Subject=Hola" target="_top" class="white-text">
              <i style="font-size: 13px;" class="material-icons center ">mail</i>
            </a>
          </li>
          <li>
            <a class="white-text" target="_blank" href="https://www.facebook.com/maritelascountry/" style="font-size:10px">
              ¡PONTE EN CONTACTO CON NOSOTROS!
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
<!-- Nav menu -->

{{-- NAV --}}
<!-- For desktop -->
<div class="navbar-fixed hide-on-med-and-down" style="height:78px">
  <nav role="navigation" id="undernav">
    <div class="nav-wrapper">
      <a class="center" href="{{ route('site.index') }}" id="menulogo">
        <img class="menulogo" src="{{ asset('img/logo/logo.png') }}">
      </a>
      <a class="brand-logo hide" href="{{ route('site.index') }}" id="menupe">
        <img class="menupe" src="{{ asset('img/logo/simple.png') }}" class="hide">
      </a>
      <ul class="right" style="margin-right:50px">
        @if (Route::currentRouteName() == 'site.index')
        <li class="lh84" id="menuinicio">
          <a class="" onclick="toTop()">
            INICIO
          </a>
        </li>
        <li class="lh84" id="menucursos">
          <a class="menu-link" href="#cursos">
            CURSOS
          </a>
        </li>
        <li class="lh84" id="menuproductos">
          <a class="menu-link" href="#productos">
            PRODUCTOS
          </a>
        </li>
        <li class="lh84" id="menublog">
          <a href="{{ route('site.blog.index') }}">
            BLOG
          </a>
        </li>
        <li class="lh84" id="menucontacto">
          <a class="menu-link" href="#contacto">
            CONTACTO
          </a>
        </li>
      @elseif (Route::currentRouteName() == 'site.blog.index')
      <li class="lh84" id="menuinicio">
        <a href="/">
          INICIO
        </a>
      </li>
      <li class="lh84" id="menucursos">
        <a href="/#cursos">
          CURSOS
        </a>
      </li>
      <li class="lh84" id="menuproductos">
        <a href="/#productos">
          PRODUCTOS
        </a>
      </li>
      <li class="lh84" id="menublog">
        <a onclick="toTop()">
          BLOG
        </a>
      </li>
      <li class="lh84" id="menucontacto">
        <a class="menu-link" href="#contacto">
          CONTACTO
        </a>
      </li>
      @elseif (Route::currentRouteName() == 'site.blog.article')
      <li class="lh84" id="menuinicio">
        <a href="/">
          INICIO
        </a>
      </li>
      <li class="lh84" id="menucursos">
        <a href="/#cursos">
          CURSOS
        </a>
      </li>
      <li class="lh84" id="menuproductos">
        <a href="/#productos">
          PRODUCTOS
        </a>
      </li>
      <li class="lh84" id="menublog">
        <a href="{{ route('site.blog.index') }}">
          BLOG
        </a>
      </li>
      <li class="lh84" id="menucontacto">
        <a class="menu-link" href="#contacto">
          CONTACTO
        </a>
      </li>
      @endif
      </ul>
    </div>
  </nav>
</div>

<!-- Mobile menu -->
<div class="navbar-fixed hide-on-large-only" >
  <nav class="z-depth-0" style="z-index: 4;" role="navigation" id="undernav-movil">
    <div class="nav-wrapper valign-wrapper ">
      <a href="#" data-activates="mobile-demo" class="button-collapse ">
        <i class="material-icons black-text" id="iconmenumovil">menu</i>
      </a>
      <a href="Home">
        <img class="brand-logo center menulogomovil" src="{{ asset('img/logo/logo.png') }}" class=" logonav" id="logocolormovil">
      </a>

    </div>
  </nav>
</div>
<!-- End Desktop navigation -->

<!-- Collapsible menu for movil -->
<ul class="side-nav collapsible" id="mobile-demo"  data-collapsible="accordion">
@if (Route::currentRouteName() == 'site.index')
    <li><a onclick="toTop()" style="letter-spacing:1px">INICIO</a></li>
    <li><a href="#productos" style="letter-spacing:1px">PRODUCTOS</a></li>
    <li><a href="/blog" style="letter-spacing:1px">BLOG</a></li>
    <li><a href="#cursos" style="letter-spacing:1px">CURSOS</a></li>
    <li><a href="#contacto" style="letter-spacing:1px">CONTACTO</a></li>
@elseif (Route::currentRouteName() == 'site.blog.index')
    <li><a href="/" style="letter-spacing:1px">INICIO</a></li>
    <li><a href="/#productos" style="letter-spacing:1px">PRODUCTOS</a></li>
    <li><a onclick="toTop()" style="letter-spacing:1px">BLOG</a></li>
    <li><a href="/#cursos" style="letter-spacing:1px">CURSOS</a></li>
    <li><a href="#contacto" style="letter-spacing:1px">CONTACTO</a></li>
@elseif (Route::currentRouteName() == 'site.blog.article')
    <li><a href="/" style="letter-spacing:1px">INICIO</a></li>
    <li><a href="/#productos" style="letter-spacing:1px">PRODUCTOS</a></li>
    <li><a href="/blog" style="letter-spacing:1px">BLOG</a></li>
    <li><a href="/#cursos" style="letter-spacing:1px">CURSOS</a></li>
    <li><a href="#contacto" style="letter-spacing:1px">CONTACTO</a></li>
@endif
</ul>
<!-- End mobil navigation -->
