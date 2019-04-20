@extends('layouts.front.master')
@section('content')

<section class="section is-search" id="introduce">
        <div class="section-background bg">
            <div class="image background-image-loaded image-loaded" style="background-image: url(&quot;/images/bg-introduce.jpg&quot;);"> <img src="/images/bg-introduce.jpg" alt=""></div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-box">
                            <h1 class="line"> Encuentra tu <strong>experiencia perfecta</strong></h1>
                            
                          @include('layouts.front.partials.buscador')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section" id="gallery">
            <div class="section-content">
                <div class="container">
                    <div id="grid-data" class="row">
                        <div class="grid isotope">
                            
                            @foreach($scorts as $key => $scort)
                                <article data-order="{{@$scort->id}}" class="article-escort grid-item isotope-item is-big is-load">
                                    <figure>
                                        <div class="inner">
                                            <div class="girl bg">
                                                <a href="{{ @$region->name }}/{{ @$scort->id}}/{{ @$scort->name}}" target="_top" class="image background-image-loaded image-loaded" style="background-image:(@if(empty($scort->galleries[0]->thumb)) '/assets/no-foto.jpg'  @else '/storage/galeria/thumb/{{@$scort->galleries[0]->thumb }}' @endif)">
                                                    <picture>
                                                        @if(empty($scort->galleries[0]->thumb))
                                                        <img role="image" src="/assets/no-foto.jpg" class="img-responsive" alt="{{@$scort->name}}">
                                                        @else 
                                                            <img role="image" src="/storage/galeria/thumb/{{ @$scort->galleries[0]->thumb }}" alt="{{@$scort->name}}">
                                                        @endif
                                                    </picture>
                                                </a> <i aria-hidden="true" class="fa fa-video-camera video"></i></div>
                                            <figcaption>
                                                <p></p>
                                                    <p>
                                                        <a href="#">
                                                            <i aria-hidden="true" class="fa fa-circle" style="display: none;"></i>
                                                            <span>
                                                                <span class="brown">{{ @$scort->name }}</span> 
                                                                <span class="brown number">{{ @$scort->edad }},</span>
                                                                Escort {{ $scort->package->name }} de Apariencia {{ @$scort->etnia}}, Ubicada en {{ @$region->name }}. Servicio de 1:00 hora por 
                                                                <span class="brown number">S/{{ @$scort->costohora }}</span>
                                                            </span>
                                                        </a>
                                                    </p>
                                                <p></p>
                                            </figcaption>
                                        </div>
                                    </figure>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--/videos-->

@endsection
