@php
  $whats = "https://api.whatsapp.com/send?phone=584144554494&text=Me%20gustaría%20saber%20más%20acerca%20de%20sus%20productos";
@endphp

@extends('site.templates.layout')

@section('addCSS')
  <style media="screen">

  body{
    background-image: url('{{ asset('img/assets/background.png') }}');
    background-size: 1000px;
  }

  .botonbg{
    background-image: url('{{ asset('img/assets/background.png') }}');
  }

  .transbg{
    background-image: url('{{ asset('img/assets/trans.png') }}');
  }

  </style>
@endsection

@section('body-content')
<!-- START PAGE -->

<!-- [Cover]-->
<div id="slider">
  @foreach ($covers as $cover)
    <div style="height:67vh;background-image: url('{{ asset('img/slider/'.$cover->name) }}'); background-size:cover">
      @if ($cover->title != '-')
        <h1 class="center" style="">{{ $cover->title }}</h1>
      @endif
      @if ($cover->subtitle != '-')
        <h3 class="center" style="">{{ $cover->subtitle }}</h3>
      @endif
    </div>
  @endforeach
</div>
<!-- End [Cover] -->

<!-- [Social]-->
  <div class="row nobottom" style="background-color:#80c357">
    <a href="https://www.facebook.com/maritelascountry/" target="_blank">
      <div class="col s4" style="color:#f3357f;background-color:white">
        <div class="row nobottom valign-wrapper">
          <div class="col s10 offset-s1 m2" style="padding-right:0px">
            <i class="fa fa-facebook fa-2x socialnav" style="padding-top: 7px"></i>
          </div>
          <div class="col m10 hide-on-small-only center" style="padding-left:0px">
            <p style="font-weight:100;font-size:13px"><span style="font-weight:900;font-size:13px">FACEBOOK</span><br> registrate y pregunta por nuestros productos.</p>
          </div>
        </div>
      </div>
    </a>
    <a href="https://www.instagram.com/maritelascountrymexico/" target="_blank">
      <div class="col s4" style="color:#f3357f;background-color:white">
        <div class="row nobottom valign-wrapper">
          <div class="col s10 offset-s1 m2" style="padding-right:0px">
            <i class="fa fa-instagram fa-2x socialnav" style="padding-top:5px"></i>
          </div>
          <div class="col m10 hide-on-small-only center" style="padding-left:0px">
            <p style="font-weight:100;font-size:13px"><span style="font-weight:900;font-size:13px">INSTAGRAM</span><br> síguenos en nuestras redes sociales.</p>
          </div>
        </div>
      </div>
    </a>
    <a id="bannerwhats" href="{{ $whats }}" target="_blank">
    <div class="col s4" style="color:white;background-color:#80c357;padding-left:0">
      <div class="row nobottom valign-wrapper">
        <div class="col s10 offset-s1 m2 center" style="padding-right:0px">
          <i class="fa fa-whatsapp fa-3x center"></i>
        </div>
        <div class="col m10 hide-on-small-only center" style="padding-left:0px">
          <p style="font-weight:100;font-size:13px"><span style="font-weight:900;font-size:13px">WHATSAPP</span><br> registrate y pregunta por nuestros productos.</p>
        </div>
      </div>
    </div>
    </a>
  </div>
<!-- End [Social] -->

<!-- [Courses banner]-->
<div id="cursos" class="section banner">
  <h1 class="center-align">¡CURSOS PENSADOS PARA TI!</h1>
</div>
<!-- End [Courses banner] -->

<!-- [Courses]-->
<div class="section bg">
  <div id="courses">
      @foreach ($courses as $course)
        <div class="card z-depth-4" style="margin-left:10px;margin-right:10px">
          <div class="card-image">
            <img src="{{ asset('img/courses/' . $course->image) }}">
          </div>
          <div class="card-content">
            <h5 class="center">{{ $course->name }}</h5>
            <p class="center">
              {{ $course->description }}
            </p>
            <div class="bottom-fixed center">
              <a id="coursephone" target="_blank" href="tel:4626071044"><i class="fa fa-phone fa-2x socialcourse" style="font-size:1.75em;padding-top:7px"></i></a>
              <a id="coursewhats" target="_blank" href="{{ $course->whatsapp }}"><i class="fa fa-whatsapp fa-2x socialcourse" style="padding-top:3px"></i></a>
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
  <div id="products">
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
                    <a id="productsphone" target="_blank" href="tel:4626071044"><i class="fa fa-phone fa-2x socialproduct" style="font-size:1.75em;padding-top:7px"></i></a>
                    <a id="productswhats" target="_blank" href="{{ $product->whatsapp }}"><i class="fa fa-whatsapp fa-2x socialproduct" style="padding-top:3px"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @if($i==3)
              @if ($j==1)
              </div>
                </div>
                <div class="" style="margin-top:38px">
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
  <div class="" id="articles" style="padding-top:20px;padding-bottom:20px">
      @foreach ($articles as $article)
        <div class="">
          <a href="/blog/{{ $article->slug }}">
            <div class="card z-depth-4" style="margin-left:10px;margin-right:10px">
                <div class="card-content" style=";background-color:#fafafa;height:150px;position:relative">
                  <h6 style="color:#f3357f;font-weight:700;margin-top:0px;font-size:20px">{{ strtoupper($article->title) }}</h6>
                  <p style="font-weight:100; font-size:15px;color:#ff1c74">
                    {{ $article->description }}
                  </p>
                  <div class="row nobottom" style="position:absolute;bottom:10px;left:0;width:100%;">
                    <div class="col s6 m6 linkinfo">
                      <a href="/blog/{{ $article->slug }}" style="color:#f335af">SEGUIR LEYENDO >></a>
                    </div>
                    <div class="col s6 m6 linkinfo right-align">
                      <p style="color:#f335af">{{ $article->created_at->format('d M') }}</p>
                    </div>
                  </div>
                </div>
                <div class="card-image">
                  <img src="{{ asset('img/articles/' . $article->image) }}" style="height:30vh">
                </div>
            </div>
          </a>
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
  @include('site.templates.contact')
<!-- End [Contact] -->

<!-- END PAGE -->
@endsection

@section('addScripts')
  <script type="text/javascript">
    $(document).ready(function(){
       $('.collapsible').collapsible();
     });

    function mapQro() {
      var x = document.getElementById("qro");
      var y = document.getElementById("irapuato");
      if (x.style.display === "none") {
          x.style.display = "block";
          y.style.display = "none";
          $('#txtIr').hide();
          $('#txtQro').show();
           $('.collapsible').collapsible('close', 0);
      }
    }

    function mapIrapuato() {
      var x = document.getElementById("qro");
      var y = document.getElementById("irapuato");
      if (y.style.display === "none") {
          y.style.display = "block";
          x.style.display = "none";
          $('#txtQro').hide();
          $('#txtIr').show();
           $('.collapsible').collapsible('close', 0);
      }
    }
  </script>

@endsection
