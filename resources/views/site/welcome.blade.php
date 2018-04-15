@extends('site.templates.layout')

@section('addCSS')
  <style media="screen">
    body{
      background-image: url('{{ asset('img/assets/background.jpg') }}');
      background-size: 250px;
    }

    .slick-next{
      right: 30px;
      z-index: 99;
    }

    .slick-prev{
      left: 30px;
      z-index: 99;
    }
  </style>
@endsection

@section('body-content')
<!-- START PAGE -->

<!-- [Cover]-->
<div id="slider">
  @foreach ($covers as $cover)
    <div class="valign-wrapper" style="height:67vh;background-image: url('{{ asset('img/slider/'.$cover->name) }}'); background-size:cover">
      <h1 style="color:white">{{ $cover->title }}</h1>
      <h3 style="color:white">{{ $cover->subtitle }}</h3>
    </div>
  @endforeach
</div>
<!-- End [Cover] -->

<!-- [Social]-->
  <div class="row nobottom">
    <div class="col s4" style="color:#f3357f;background-color:white">
      <div class="row nobottom valign-wrapper">
        <div class="col s2">
          <i class="fa fa-phone fa-2x socialnav"></i>
        </div>
        <div class="col s10 center">
          <p style="font-weight:100"><span style="font-weight:900">LLAMANOS</span><br> pregunta por nuestros cursos y productos.</p>
        </div>
      </div>
    </div>
    <div class="col s4" style="color:#f3357f;background-color:white">
      <div class="row nobottom valign-wrapper">
        <div class="col s2">
          <i class="fa fa-facebook fa-2x socialnav"></i>
        </div>
        <div class="col s10 center">
          <p style="font-weight:100"><span style="font-weight:900">FACEBOOK</span><br> registrate y pregunta por nuestros productos.</p>
        </div>
      </div>
    </div>
    <div class="col s4" style="color:white;background-color:#80c357">
      <div class="row nobottom valign-wrapper">
        <div class="col s2">
          <i class="fa fa-whatsapp fa-5x"></i>
        </div>
        <div class="col s10 center">
          <p style="font-weight:100"><span style="font-weight:900">WHATSAPP</span><br> registrate y pregunta por nuestros productos.</p>
        </div>
      </div>
    </div>
  </div>
<!-- End [Social] -->

<!-- [Courses banner]-->
<div id="productos" class="section banner">
  <h1 class="center-align">¡CURSOS PENSADOS PARA TI!</h1>
</div>
<!-- End [Courses banner] -->

<!-- [Courses]-->
<div class="section bg" style="padding: 50px 0">
  <div id="courses" class="container">
    <div class="row">
      @php
        $i=1;
      @endphp
      @foreach ($courses as $course)
        @if ($i<4)
          <div class="col s10 offset-s1 m4">
            <div class="card">
              <div class="card-image">
                <img src="{{ asset('img/courses/' . $course->image) }}">
              </div>
              <div class="card-content">
                <h3 class="center">{{ $course->name }}</h3>
                <p>
                  {{ $course->description }}
                </p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>
          @if($i==3)
            </div>
            <div class="row">
            @php
            $i=0;
            @endphp
          @else
            @php
            $i++;
            @endphp
          @endif
        @endif
      @endforeach
    </div>
  </div>
</div>

<!-- End [Courses] -->

<!-- [Product banner]-->
<div id="cursos" class="section banner">
  <h1 class="center-align">¡PRODUCTOS ÚNICOS!</h1>
</div>
<!-- End [Product banner] -->

<!-- [Products]-->
<div class="section bg">
  <div class="container">
    <div class="row">
      @foreach ($products as $product)
        <div class="col s10 offset-s1 m4">
          <div class="card">
            <div class="card-image activator waves-effect waves-block waves-light">
              <img src="{{ asset('img/products/' . $product->image) }}">
              <span class="card-title activator" style="color:white;background-color:rgba(248,51,124,.6);font-size:13px;width:100%">{{$product->name}}</span>
            </div>
            <div class="card-reveal" style="background-color: rgba(248,51,124,.9); color:white">
              <span class="card-title white-text">{{$product->name}}<i class="material-icons right">close</i></span>
              <p class="center">{{ $product->description }}.</p>
            </div>
          </div>
        </div>
      @endforeach
      <div class="col m4">

      </div>
    </div>
  </div>
</div>
<!-- End [Products] -->

<!-- [Blog banner]-->
<div id="noticias" class="section banner trans">
  <h1 class="center-align">NOTICIAS</h1>
</div>
<!-- End [Blog banner] -->

<!-- [Blog]-->
<!-- End [Blog] -->

<!-- [Brands banner]-->
<div class="section banner">
  <h1 class="center-align">NUESTRAS MARCAS</h1>
</div>
<!-- End [Brands banner] -->

<!-- [Brands]-->

<div class="marcas">
  <div>
    <div class="row nobottom valign-wrapper" style="padding:20px;background-color:white">
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/boye.jpg') }}" style="max-width:100%">
      </div>
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/charles.jpg') }}" style="max-width:100%">
      </div>
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/clothworks.jpg') }}" style="max-width:100%">
      </div>
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/clover.jpg') }}" style="max-width:100%">
      </div>
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/comex.jpg') }}" style="max-width:100%">
      </div>
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/darice.png') }}" style="max-width:100%">
      </div>
    </div>
    <div class="row nobottom valign-wrapper" style="padding:20px;background-color:white">
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/dmc.png') }}" style="max-width:100%">
      </div>
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/dritz.png') }}" style="max-width:100%">
      </div>
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/exclusively.png') }}" style="max-width:100%">
      </div>
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/ez-quilting.png') }}" style="max-width:100%">
      </div>
      <div class="col s4 m2">
        <img src="{{ asset('img/marcas/fiskars.png') }}" style="max-width:100%">
      </div>
    </div>
  </div>
    <div>
      <div class="row nobottom valign-wrapper" style="padding:20px;background-color:white">
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/guetrman.png') }}" style="max-width:100%">
        </div>
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/jesse-james.png') }}" style="max-width:100%">
        </div>
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/logo.gif') }}" style="max-width:100%">
        </div>
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/michael.png') }}" style="max-width:100%">
        </div>
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/moda.jpg') }}" style="max-width:100%">
        </div>
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/omega.jpg') }}" style="max-width:100%">
        </div>
      </div>
      <div class="row nobottom valign-wrapper" style="padding:20px;background-color:white">
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/pellon.jpg') }}" style="max-width:100%">
        </div>
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/prym.png') }}" style="max-width:100%">
        </div>
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/red-rooster.gif') }}" style="max-width:100%">
        </div>
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/spring.png') }}" style="max-width:100%">
        </div>
        <div class="col s4 m2">
          <img src="{{ asset('img/marcas/thermoweb.png') }}" style="max-width:100%">
        </div>
        </div>
      </div>
    </div>
</div>


<!-- End [Brands] -->

<!-- [Contact banner]-->
<div class="section banner">
  <h1 class="center-align">SUCURSALES</h1>
</div>
<!-- End [Contact banner] -->

<!-- [Contact]-->
<div class="" id="contacto" style="background-color:#dddddd">
  <div class="row nobottom">
    <div class="col s12 m12 l6 center">
      <h1 style="font-weight:900;font-size:40px;color:#5d5d5d">¡QUE QUIERES APRENDER!</h1>
      <div class="row">
        <div class="col s12 m6">
          <div class="row valign-wrapper nobottom">
            <div class="col s2"><i class="fa fa-phone" aria-hidden="true" style="font-size: 33px;"></i></div>
            <div class="col s10 left-align">
              <p style="color:#f3357f;font-size:18px;font-weight:900">LLÁMANOS AHORA <br><a style="color:#5d5d5d;font-weight:100;font-size:13px" href="tel:5588513585"> 5588513585 </a></p>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="row valign-wrapper nobottom">
            <div class="col s2"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 33px;"></i></div>
            <div class="col s10 left-align">
              <p style="color:#f3357f;font-size:18px;font-weight:900">ESCRÍBENOS <br><a style="color:#5d5d5d;font-weight:100;font-size:13px" href="mailto:direccion-comercial@gp.org.mx?Subject=Requiero"> contacto@maritelascountry.mx</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="contactform">
        <form id="form2">
          <div class="row nobottom">
            <div class="input-field col s6">
              <input name="name" placeholder="* Nombre" type="text" style="padding-left:5px;" required="">
            </div>
            <div class="input-field col s6">
              <input name="enterprise" placeholder="* Apellído" type="text" style="padding-left:5px;" required="">
            </div>
          </div>
          <div class="row nobottom">
            <div class="input-field col s6">
              <input class="validate" name="email" placeholder="* Correo electrónico" type="email" style="padding-left:5px;" required="">
            </div>
            <div class="input-field col s6">
              <input name="phone" placeholder="* Teléfono" type="text" style="padding-left:5px;" required="">
            </div>
          </div>
          <div class="row nobottom">
            <div class="input-field col s12">
              <input name="message" placeholder="* Mensaje" type="text" style="padding-left:5px;" required="">
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6 input-field but">
              <button class="btn-flat transparent" type="submit" style="width:100%;color:#f3357f;font-weight:100;border:1px solid #f3357f; padding: 2px 2px;height:40px">¡COMENZAR AHORA!</button>
            </div>
            <div class="col s12 m6" style="margin-top:14px">
              <a href="#" >
                <div class="row valign-wrapper nobottom" style="background-color: #80c357;">
                  <div class="col s2">
                    <i class="fa fa-whatsapp fa-2x" style="color:white"></i>
                  </div>
                  <div class="col s10">
                    <p style="text-align: center;font-size: 13px;font-weight:100;color:white;margin:0"><span style="font-weight:900">WHATSAPP</span><br> (442)3773461</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col s12 m12 l6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14934.03202158524!2d-100.44111977562712!3d20.648901508596094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDM4JzU2LjAiTiAxMDDCsDI1JzU2LjUiVw!5e0!3m2!1ses!2smx!4v1523416643375" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
      {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.951745061328!2d-101.37423878539242!3d20.67154210525353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c7fb4b3a75dc5%3A0xd05f16c502b4458d!2sPlaza+Jacarandas!5e0!3m2!1ses!2smx!4v1523416722510" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
    </div>
  </div>
</div>
<!-- End [Contact] -->

<!-- END PAGE -->
@endsection

@section('addScripts')
  <script type="text/javascript">
    $('.marcas').slick({
      infinite: true,
      accessibility:true
    });

    $('#slider').slick({
      infinite: true,
      accessibility:true
    });

    $('#courses').slick({
      infinite: true,
      accessibility:true
    });
  </script>
@endsection
