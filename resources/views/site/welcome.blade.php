@extends('site.templates.layout')

@section('addCSS')
  <style media="screen">
  *{
    font-family: Nunito;
  }

  h1,h2,h3,h4,h5,h6{
    font-family: Nunito;
  }

  body{
    background-image: url('{{ asset('img/assets/background.png') }}');
    background-size: 1000px;
  }

  .bgpink{
    background-color: #f8337c;
  }

  .botonbg{
    background-image: url('{{ asset('img/assets/background.png') }}');
  }

  .transbg{
    background-image: url('{{ asset('img/assets/trans.png') }}');
    /* background-size: 1000px; */
  }

  .card .card-content{
    padding: 14px
  }

  .slick-slide:focus { outline: none; }

  #wrapper { position: relative; padding: 0}
  #over_map { position: absolute; bottom: 0px; z-index: 99; }

  @media only screen and (max-width: 600px) { .row.valign-wrapper { display: inherit; } }
  </style>
@endsection

@section('body-content')
<!-- START PAGE -->

<!-- [Cover]-->
<div id="slider">
  @foreach ($covers as $cover)
    <div style="height:67vh;background-image: url('{{ asset('img/slider/'.$cover->name) }}'); background-size:cover">
      <h1 class="center" style="color:white; font-size:40px; margin-top:25vh">{{ $cover->title }}</h1>
      <h3 class="center" style="color:white; font-size:30px">{{ $cover->subtitle }}</h3>
    </div>
  @endforeach
</div>
<!-- End [Cover] -->

<!-- [Social]-->
  <div class="row nobottom" style="background-color:white">
    <div class="col s4" style="color:#f3357f;background-color:white">
      <div class="row nobottom valign-wrapper">
        <div class="col s2" style="padding-right:0px">
          <i class="fa fa-facebook fa-2x socialnav" style="padding-top: 7px"></i>
        </div>
        <div class="col s10 center" style="padding-left:0px">
          <p style="font-weight:100;font-size:13px"><span style="font-weight:900;font-size:13px">FACEBOOK</span><br> registrate y pregunta por nuestros productos.</p>
        </div>
      </div>
    </div>
    <div class="col s4" style="color:#f3357f;background-color:white">
      <div class="row nobottom valign-wrapper">
        <div class="col s2" style="padding-right:0px">
          <i class="fa fa-instagram fa-2x socialnav" style="padding-top:5px"></i>
        </div>
        <div class="col s10 center" style="padding-left:0px">
          <p style="font-weight:100;font-size:13px"><span style="font-weight:900;font-size:13px">INSTAGRAM</span><br> síguenos en nuestras redes sociales.</p>
        </div>
      </div>
    </div>
    <div class="col s4" style="color:white;background-color:#80c357;padding-left:0">
      <div class="row nobottom valign-wrapper">
        <div class="col s2 right-align" style="padding-right:0px">
          <i class="fa fa-whatsapp fa-3x center"></i>
        </div>
        <div class="col s10 center" style="padding-left:0px">
          <p style="font-weight:100;font-size:13px"><span style="font-weight:900;font-size:13px">WHATSAPP</span><br> registrate y pregunta por nuestros productos.</p>
        </div>
      </div>
    </div>
  </div>
<!-- End [Social] -->

<!-- [Courses banner]-->
<div id="cursos" class="section banner">
  <h1 class="center-align">¡CURSOS PENSADOS PARA TI!</h1>
</div>
<!-- End [Courses banner] -->

<!-- [Courses]-->

<div class="section bg">
  <div id="courses" style="margin:10px 50px">
      @foreach ($courses as $course)
        <div class="card z-depth-4" style="margin-left:10px;margin-right:10px">
          <div class="card-image">
            <img src="{{ asset('img/courses/' . $course->image) }}" style="height:45vh">
          </div>
          <div class="card-content" style="padding:10px;background-color:#f7f8f9;height:200px;position:relative">
            <h5 class="center" style="color:#f3357f;margin:0px 6px">{{ $course->name }}</h5>
            <p class="center">
              {{ $course->description }}
            </p>
            <div class="bottom-fixed center">
              <a href="#"><i class="fa fa-phone fa-2x socialcourse" style="font-size:1.75em;padding-top:7px"></i></a>
              <a href="#"><i class="fa fa-whatsapp fa-2x socialcourse" style="padding-top:3px"></i></a>
            </div>
          </div>
        </div>
      @endforeach
  </div>
</div>

<!-- End [Courses] -->

<!-- [Product banner]-->
<div id="productos" class="section banner">
  <h1 class="center-align">¡PRODUCTOS ÚNICOS!</h1>
</div>
<!-- End [Product banner] -->

<!-- [Products]-->
<div class="section bg" style="padding-top:0">
  <div id="products" style="margin:10px 50px">
    <div class="" style="margin-top:38px">
      <div class="row">
        @php
          $j=0;
          $i=0;
        @endphp
        @foreach ($products as $product)
          @if ($i<4)
            <div class="col s10 offset-s1 m3" >
              <div class="card z-depth-4">
                <div class="card-image activator waves-effect waves-block waves-light">
                  <img src="{{ asset('img/products/' . $product->image) }}" style="height:35vh">
                  <span class="card-title activator center" style="color:white;background-color:rgba(248,51,124,.6);font-size:15px;width:100%;padding:10px">{{$product->name}}</span>
                </div>
                <div class="card-reveal" style="background-color: rgba(248,51,124,.9); color:white">
                  <span class="card-title white-text" style="font-size:15px">{{$product->name}}<i class="material-icons right">close</i></span>
                  <p class="center" style="font-size:13px">{{ $product->description }}.</p>
                  <div class="bottom-fixed center">
                    <a href="#"><i class="fa fa-phone fa-2x socialproduct" style="font-size:1.75em;padding-top:7px"></i></a>
                    <a href="#"><i class="fa fa-whatsapp fa-2x socialproduct" style="padding-top:3px"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @if($i==3)
              @if ($j==1)
              </div>
                </div>
                <div class="">
                  <div class="row">
                  @php
                    $i=0;
                    $j=0;
                  @endphp
              @else
                </div>
                <div class="row">
                @php
                  $i=0;
                  $j++;
                @endphp
              @endif
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
</div>

<!-- End [Products] -->

<!-- [Blog banner]-->
<div id="noticias" class="section banner trans">
  <h1 class="center-align">NOTICIAS</h1>
</div>
<!-- End [Blog banner] -->

<!-- [Blog]-->

<div class="transbg">
  <div class="" id="articles" style="margin:0px 50px;padding-top:20px;padding-bottom:20px">
      @foreach ($articles as $article)
        <div class="card z-depth-4" style="margin-left:10px;margin-right:10px">
          <div class="card-content" style=";background-color:#fafafa;height:180px;position:relative">
            <h5 style="color:#f3357f;font-weight:900">{{ strtoupper($article->title) }}</h5>
            <p style="font-weight:100; font-size:15px;color:#ff1c74">
              {{ $article->description }}
            </p>
            <div class="row nobottom" style="position:absolute;bottom:10px;left:0;width:100%;">
              <div class="col s12 m6">
                <a href="#" style="color:#f335af">SEGUIR LEYENDO >></a>
              </div>
              <div class="col s12 m6 right-align">
                <p style="color:#f335af">{{ $article->created_at->format('d M') }}</p>
              </div>
            </div>
          </div>
          <div class="card-image">
            <img src="{{ asset('img/articles/' . $article->image) }}" style="height:25vh">
          </div>
        </div>
      @endforeach
  </div>
</div>

<!-- End [Blog] -->

<!-- [Brands banner]-->
<div class="section banner">
  <h1 class="center-align">NUESTRAS MARCAS</h1>
</div>
<!-- End [Brands banner] -->

<!-- [Brands]-->

<div class="marcas" id="brands">
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
<div id="contacto" style="background-color:#dddddd">
  <div class="row nobottom valign-wrapper">
    <div class="col s12 m12 l6 center">
      <h1 style="font-weight:900;font-size:40px;color:#5d5d5d;margin: 35px 0 5px 0;">¡QUE QUIERES APRENDER!</h1>
      <div class="row nobottom" style="margin-top:20px">
        <div class="col s12 m6">
          <div class="row valign-wrapper nobottom">
            <div class="col s3"><i class="fa fa-phone right" aria-hidden="true" style="font-size: 33px;color:#5d5d5d"></i></div>
            <div class="col s9 left-align" style="padding-left:0">
              <p class="nobottom notop" style="color:#f3357f;font-size:18px;font-weight:900">LLÁMANOS AHORA <br><a style="color:#5d5d5d;font-weight:100;font-size:13px" href="tel:5588513585"> 5588513585 </a></p>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="row valign-wrapper nobottom">
            <div class="col s2" style="padding:0"><i class="fa fa-envelope-o left" aria-hidden="true" style="font-size: 33px;color:#5d5d5d"></i></div>
            <div class="col s10 left-align" style="padding-left:0">
              <p class="nobottom notop" style="color:#f3357f;font-size:18px;font-weight:900">ESCRÍBENOS <br><a style="color:#5d5d5d;font-weight:100;font-size:13px" href="mailto:direccion-comercial@gp.org.mx?Subject=Requiero"> contacto@maritelascountry.mx</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="contactform" style="padding:0 23px">
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
            <div class="col s12 m6 input-field but" style="padding-right:0px">
              <button class="btn-flat transparent" type="submit" style="width:100%;color:#f3357f;font-weight:100;border:1px solid #f3357f; padding: 2px 2px;height:50px;font-size:20px">¡COMENZAR AHORA!</button>
            </div>
            <div class="col s12 m6" style="margin-top:14px;padding-right:0px">
              <a href="#">
                <div class="row valign-wrapper nobottom" style="background-color: #80c357;height:50px">
                  <div class="col s2">
                    <i class="fa fa-whatsapp fa-2x" style="color:white;font-size:2.6em"></i>
                  </div>
                  <div class="col s10">
                    <h6 class="nobottom notop white-text left-align" style="font-weight:900;margin-left:54px">WHATSAPP</h6>
                    <p style="font-size: 13px;font-weight:100;color:white;margin:0 0 0 48px">(442)3773461</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col s12 m12 l6" id="wrapper">
      <div id="google_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14934.03202158524!2d-100.44111977562712!3d20.648901508596094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDM4JzU2LjAiTiAxMDDCsDI1JzU2LjUiVw!5e0!3m2!1ses!2smx!4v1523416643375" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.951745061328!2d-101.37423878539242!3d20.67154210525353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c7fb4b3a75dc5%3A0xd05f16c502b4458d!2sPlaza+Jacarandas!5e0!3m2!1ses!2smx!4v1523416722510" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
      </div>
      <div class="row nobottom" id="over_map" style="padding: 0 0.75em">
        <div class="col s6" style="padding:0 .75em">
          <div style="background-color:rgba(243,53,127,.9); padding-top:3px;padding-bottom:3px">
            <h5 class="white-text center">QUERÉTARO</h5>
            <h6 class="white-text center">Plaza urban center jurica, planta alta frente a cinemex</h6>
          </div>
        </div>
        <div class="col s6" style="padding:0 .75em">
          <div style="background-color:rgba(243,53,127,.9); padding-top:3px;padding-bottom:3px">
            <h5 class="white-text center">IRAPUATO</h5>
            <h6 class="white-text center">Plaza Jacarandas, Soriana, Av. Arboledas #1200 loc. 20B.</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End [Contact] -->

<!-- END PAGE -->
@endsection

@section('addScripts')

@endsection
