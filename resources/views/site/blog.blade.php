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
    background-image: url('{{ asset('img/assets/trans.jpg') }}');
    background-size:;
  }

  .card .card-content{
    padding: 14px
  }

  .flex {
  display: flex;
  flex-wrap: wrap;
}

  .slick-slide:focus { outline: none; }
  </style>
@endsection

@section('body-content')
<!-- START PAGE -->

<!-- [Contact banner]-->
<div class="section">
  <h1 class="center-align white-text">Noticias</h1>
</div>
<!-- End [Contact banner] -->

<!-- [Blog]-->
  <div class="" style="margin:10px 50px">
      @foreach ($articles as $article)
        @if ($loop->first)
          <div class="row flex" style=";background-color:#be2865;height:150px;">
            <div class="col s12 m6">
              <h5 style="color:#fff;">{{ strtoupper($article->title) }}</h5>
              <p class="grey-text text-lighten-2" style="font-weight:100; font-size:15px">
                {{ $article->description }}
              </p>
              <div class="row nobottom" style="position:absolute;bottom:10px;left:0;width:100%;">
                <div class="col s12 m6">
                  <a class="blue-grey-text text-lighten-3" href="#">SEGUIR LEYENDO >></a>
                </div>
                <div class="col s12 m6 right-align">
                  <p class="blue-grey-text text-lighten-3">{{ $article->created_at->format('d M') }}</p>
                </div>
              </div>
            </div>

            <div class="col s12 m6">
              <img src="{{ asset('img/articles/' . $article->image) }}" style="width:100%">
            </div>
          </div>
        @else
        @endif
      @endforeach
  </div>

<!-- End [Blog] -->

<!-- [Contact banner]-->
<div class="section banner">
  <h1 class="center-align">SUCURSALES</h1>
</div>
<!-- End [Contact banner] -->

<!-- [Contact]-->
<div class="" id="contacto" style="background-color:#dddddd">
  <div class="row nobottom">
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
    <div class="col s12 m12 l6">
      <div class="w3-display-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14934.03202158524!2d-100.44111977562712!3d20.648901508596094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDM4JzU2LjAiTiAxMDDCsDI1JzU2LjUiVw!5e0!3m2!1ses!2smx!4v1523416643375" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="row w3-display-bottom">
          <div class="col s6" style="background-color:rgba(243,53,127,.8)">
            <h5 class="white-text center">QUERÉTARO</h5>
            <h6 class="white-text center">Plaza urban center jurica, planta alta frente a cinemex</h6>
          </div>
          <div class="col s6"style="background-color:rgba(243,53,127,.8)">
            <h5 class="white-text center">IRAPUATO</h5>
            <h6 class="white-text center">Plaza Jacarandas, Soriana, Av. Arboledas #1200 loc. 20B.</h6>
          </div>
        </div>
      </div>
      {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.951745061328!2d-101.37423878539242!3d20.67154210525353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c7fb4b3a75dc5%3A0xd05f16c502b4458d!2sPlaza+Jacarandas!5e0!3m2!1ses!2smx!4v1523416722510" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
      {{-- <div class="row" style="height:100px;background-color:rgba(243,53,127,.5)">
        <h4>hola</h4>
      </div> --}}
    </div>
  </div>
</div>
<!-- End [Contact] -->

<!-- END PAGE -->
@endsection

@section('addScripts')

@endsection
