@php
  $whats = "https://api.whatsapp.com/send?phone=584144554494&text=Me%20gustaría%20saber%20más%20acerca%20de%20sus%20productos";
@endphp

@extends('site.templates.layout')

@section('addCSS')
  <link rel="stylesheet" href="{{ asset('css/article.css') }}">
  <style media="screen">

    body{
      background-image: url('{{ asset('img/assets/trans.png') }}');
    }

    .bgpink{
      background-image: url('{{ asset('img/assets/trans.png') }}');
    }

  </style>
@endsection

@section('body-content')
<!-- START PAGE -->

<!-- [Article]-->
<div class="row white">
  <h1 class="article-title">
    {{ strtoupper($article->title) }}
  </h1>
  <h3 class="article-date">
    {{ $article->created_at->format('d/m/Y') }}
  </h3>
  <div class="col s10 offset-s1 m6 white">
    <p class="article-text">{!! $article->text !!}</p>
  </div>
  <div id="article-slider" class="col s10 offset-s1 m6">
    <div class="section slider-for">
      @foreach ($article->images as $image)
        <div>
          <img src="{{ asset('img/articles/' . $image->name)}}" style="width:40%;margin:auto">
        </div>
      @endforeach
    </div>

    <div class="section slider-nav">
      @foreach ($article->images as $image)
        <div>
          <img src="{{ asset('img/articles/' . $image->name)}}" style="width:60%;margin:auto">
        </div>
      @endforeach
    </div>
  </div>
</div>
<!-- End [Article text]-->

<!-- [Video]-->
<div class="section center">
  {!! $article->video !!}
</div>

<!-- End [Video]-->

<!-- [Contact banner]-->
<div class="section banner">
  <h1 class="center-align white-text">CONTACTO</h1>
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
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true
  });
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
