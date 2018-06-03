<footer class="page-footer" style="background-color:#f3357f">
  <div class="">
    <a id="fblink" class="white-text" target="_blank" href="https://www.facebook.com/maritelascountry/"><i class="fa fa-facebook socialfooter"></i></a>
    <a id="iglink" class="white-text" target="_blank" href="https://www.instagram.com/maritelascountrymexico/"><i class="fa fa-instagram socialfooter"></i></a>
    <a id="phlink" class="white-text" target="_blank" href="tel:4626071044"><i class="fa fa-phone socialfooter"></i></a>
    <a id="emlink" class="white-text" target="_blank" href="mailto:direccion-comercial@gp.org.mx?Subject=Información"><i class="fa fa-envelope-o socialfooter"></i></a>
    <br class="hide-on-med-and-up">
    @if (Route::currentRouteName() == 'site.index')
    <a onclick="toTop()" class="menu-link white-text left300">Inicio</a> /
    <a href="#productos" class="menu-link white-text">Productos</a> /
    <a href="/blog" class="white-text">Blog</a> /
    <a href="#cursos" class="menu-link white-text">Cursos</a> /
    <a href="#contacto" class="menu-link white-text">Contacto</a>
    @elseif (Route::currentRouteName() == 'site.blog.index')
    <a href="/" class="white-text left300">Inicio</a> /
    <a href="/#productos" class="white-text">Productos</a> /
    <a onclick="toTop()" class="white-text">Blog</a> /
    <a href="/#cursos" class="white-text">Cursos</a> /
    <a href="#contacto" class="menu-link white-text">Contacto</a>
    @elseif (Route::currentRouteName() == 'site.blog.article')
    <a href="/" class="white-text left300">Inicio</a> /
    <a href="#productos" class="white-text">Productos</a> /
    <a href="/blog" class="white-text">Blog</a> /
    <a href="/#cursos" class="white-text">Cursos</a> /
    <a href="#contacto" class="menu-link white-text">Contacto</a>
    @endif
  </div>
</footer>
