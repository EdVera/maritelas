@extends('site.templates.layout')

@section('addCSS')
  <style media="screen">
  *{
    font-family: Nunito;
  }

  h1,h2,h3,h4,h5,h6{
    font-family: Nunito;
    color: #f3357f;
  }

  body{
    background-image: url('{{ asset('img/assets/background.png') }}');
    background-size: 1000px;
  }

  p{
    /* color: ; */
    font-weight: 100;
    text-align: justify;
    font-size: 18px

  }
  .slick-slide:focus { outline: none; }

  #video iframe{
    width: 100% !important;
  }
  </style>
@endsection

@section('body-content')
<!-- START PAGE -->

<!-- [Cover] -->
<div class="parallax-container">
  <div class="parallax"><img src="{{ asset('img/articles/' . $article->image) }}"></div>
</div>
<!-- End [Cover] -->

<!-- [Title]-->
<div class="section">
  <h1 class="center-align">{{ $article->title }}</h1>
</div>
<!-- End [Title] -->

<!-- [Article text]-->
<div class="row">
  <div class="col s10 offset-s1 m6 offset-m1">
    <p>{{ $article->text }}</p>
  </div>
  <div id="video" class="col s10 offset-s1 m5" style="padding:30px">
    {!! $article->video !!}
  </div>
</div>
<!-- End [Article text]-->

<!-- [Gallery]-->
<div class="section slider-for">
  @foreach ($article->images as $image)
    <div>
      <img class="materialboxed" src="{{ asset('img/articles/' . $image->name)}}" style="width:50%;margin:auto">
    </div>
  @endforeach
</div>

<div class=" section slider-nav">
  @foreach ($article->images as $image)
    <div>
      <img src="{{ asset('img/articles/' . $image->name)}}" style="width:90%;margin:auto">
    </div>
  @endforeach
</div>
<!-- End [Gallery]-->

<!-- [Contact banner]-->
<div class="section banner">
  <h1 class="center-align white-text">SUCURSALES</h1>
</div>
<!-- End [Contact banner] -->

<!-- [Contact]-->
  @include('site.templates.contact')
<!-- End [Contact]-->

<!-- END PAGE -->
@endsection

@section('addScripts')
  <script type="text/javascript">
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true
  });
  </script>

@endsection
