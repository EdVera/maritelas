@php
  $whats = "https://api.whatsapp.com/send?phone=584144554494&text=Me%20gustaría%20saber%20más%20acerca%20de%20sus%20productos";
@endphp

@extends('site.templates.layout')

@section('addCSS')
  <style media="screen">
    h1,h2,h3,h4,h5,h6{
      color: #f3357f;
    }

    body{
      background-image: url('{{ asset('img/assets/trans.png') }}');
      /* background-size: 1000px; */
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

    .bgpink{
      background-image: url('{{ asset('img/assets/trans.png') }}');
    }

    #contacto h5{
      color: white;
    }
  </style>
@endsection

@section('body-content')
<!-- START PAGE -->

<!-- [Cover] -->
{{-- <div class="parallax-container">
  <div class="parallax"><img src="{{ asset('img/articles/' . $article->image) }}"></div>
</div> --}}
<!-- End [Cover] -->

<!-- [Title]-->
<!-- End [Title] -->

<!-- [Article text]-->
<div class="row white">
  <h1 class="" style="margin-left: 70px;font-size:30px; margin-top:0px;margin-bottom: 5px;padding-top:80px">{{ strtoupper($article->title) }}</h1>
  <h3 class="" style="margin-left: 70px;font-size:16px; margin-top:0px;margin-bottom: 30px;">{{ $article->created_at->format('d/m/Y') }}</h3>
  <div class="col s10 offset-s1 m6" style="padding:0px 30px 20px 70px;background-color:white">
    <p>{{ $article->text }}</p>
  </div>
  <div id="video" class="col s10 offset-s1 m6" style="padding:20px 70px 20px 30px">
    <div class="section slider-for">
      @foreach ($article->images as $image)
        <div>
          <img class="" src="{{ asset('img/articles/' . $image->name)}}" style="width:100%;margin:auto">
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
  </div>
</div>
<!-- End [Article text]-->

<!-- [Gallery]-->
<div class="section center">
  {!! $article->video !!}
</div>

<!-- End [Gallery]-->

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
  </script>

@endsection
