@php
  $whats = "https://api.whatsapp.com/send?phone=584144554494&text=Me%20gustaría%20saber%20más%20acerca%20de%20sus%20productos";
@endphp

@extends('site.templates.layout')

@section('addCSS')
  <style media="screen">

  body{
    background-image: url('{{ asset('img/assets/trans.png') }}');
    /* background-size: 1000px; */
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
<div class="">
  <H3 class="center-align white-text" style="margin:25px 0">NOTICIAS</H3>
</div>
<!-- End [Contact banner] -->

<!-- [Blog]-->
  <div class="" style="margin:10px 50px">
    <div class="row" style="padding:0 .75rem;">
      @foreach ($articles as $article)
        @if ($loop->first)
            <div class="col s12 m6" style="height:312px;position:relative;background-color:white">
              <h5 style="color:#f3357f;font-weight:700">{{ strtoupper($article->title) }}</h5>
              <p style="font-weight:100; font-size:20px;color: #ff1c74">
                {{ $article->description }}
              </p>
              <div class="row nobottom" style="bottom:10px;left:0;width:100%;position:absolute">
                <div class="col s12 m6">
                  <a style="color:#f335af ;" href="/blog/{{ $article->slug }}">SEGUIR LEYENDO >></a>
                </div>
                <div class="col s12 m6 right-align">
                  <p style="color:#f335af ;">{{ $article->created_at->format('d M') }}</p>
                </div>
              </div>
            </div>
            <div class="col s12 m6" style="padding:0;background-image:url('{{ asset('img/articles/' . $article->image) }}'); background-size: cover;height:312px">
            </div>
          </div>
          <div class="row">
        @else
          <div class="col s12 m4" >
            <div class="card z-depth-4" style="margin-left:0;margin-right:0">
              <div class="card-content" style=";background-color:#fafafa;height:180px;position:relative">
                <h5 style="color:#f3357f;font-weight:700;font-size:20px;margin-top:0px">{{ strtoupper($article->title) }}</h5>
                <p style="font-weight:100; font-size:15px;color:#ff1c74">
                  {{ $article->description }}
                </p>
                <div class="row nobottom" style="position:absolute;bottom:10px;left:0;width:100%;">
                  <div class="col s12 m6">
                    <a href="/blog/{{ $article->slug }}" style="color:#f335af">SEGUIR LEYENDO >></a>
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
          </div>
        @endif
      @endforeach
    </div>
  </div>

<!-- End [Blog] -->

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

@endsection
