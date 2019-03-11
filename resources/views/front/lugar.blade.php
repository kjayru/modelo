@extends('layouts.front.master')
@section('content')

<section class="section is-search" id="introduce">
        <div class="section-background bg">
            <div class="image background-image-loaded image-loaded" style="background-image: url(&quot;https://vinadelmar.elsilencio.cl/images/bg-introduce.jpg&quot;);"> <img src="https://vinadelmar.elsilencio.cl/images/bg-introduce.jpg" alt=""></div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-box">
                            <h1 class="line"> Encuentra tu <strong>experiencia perfecta</strong></h1>
                            <form id="form-search" data-autocomplete="https://vinadelmar.elsilencio.cl/api/searchtags">
                                <div class="input-box">
                                    <div class="placeholder">
                                        <p>Escribe lo que buscas, servicio, ubicación, contextura, apariencia, etc...</p>
                                    </div>
                                    <div class="fields">
                                        <div class="search-input">
                                            <input name="q" class="search-object" type="text" place="Nombre, Edad, Ubicación, Color de pelo, etc" data-tagsinput-init="true" style="display: none;" id="tags15518028632630">
                                            <div id="tags15518028632630_tagsinput" class="tagsinput" style="width: 300px; min-height: 62px; height: 62px;">
                                                <div id="tags15518028632630_addTag">
                                                    <input id="tags15518028632630_tag" value="" data-default="" style="color: rgb(102, 102, 102); width: 68px;">
                                                </div>
                                                <div class="tags_clear"></div>
                                            </div>
                                            <button class="remove tooltipstered" data-toggle="tooltip" data-original-title="Limpiar búsqueda"> <i class="fa fa-times"></i> </button>
                                        </div>
                                        <button type="submit" class="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><a href="Trigueña">Trigueña<span>Apariencia</span></a></li>
                                        <li><a href="Ojos Castaños">Ojos Castaños<span>Apariencia</span></a></li>
                                        <li><a href="Contextura Delgada">Contextura Delgada<span>Apariencia</span></a></li>
                                        <li><a href="Busto Grande">Busto Grande<span>Apariencia</span></a></li>
                                        <li><a href="Cola Grande">Cola Grande<span>Apariencia</span></a></li>
                                        <li><a href="Depilación Full">Depilación Full<span>Apariencia</span></a></li>
                                        <li><a href="No Fuma">No Fuma<span>Varios</span></a></li>
                                        <li><a href="Besos">Besos<span>Servicios</span></a></li>
                                        <li><a href="Oral Natural">Oral Natural<span>Servicios</span></a></li>
                                    </ul>
                                </div>
                                <div class="input-options">
                                    <ul>
                                        <li data-faceting="video_name" data-value="Con Video" class="first"><a href="#">Con Video</a></li>
                                        <li data-faceting="cara_name" data-value="Cara Visible"><a href="#">Cara Visible</a></li>
                                        <li data-faceting="experiencia_name" data-value="Con Experiencias"><a href="#">Con Experiencias</a></li>
                                        <li data-faceting="open_hours" data-value="Disponibles"><a href="#">Disponibles</a></li>
                                        <li data-faceting="promocion_name" data-value="En Promoción" class="last"><a href="#">En Promoción</a></li>
                                    </ul>
                                </div>
                                <input type="hidden" name="params" value="">
                            </form>
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
                        <!---->
                        <div class="grid isotope">
                            
                            @foreach($scorts as $key => $scort)

                            <article data-order="131" class="article-escort grid-item isotope-item is-big is-load">
                                <figure>
                                    <div class="inner">
                                        <div class="girl bg">
                                            <a href="{{ $region->name }}/{{$scort->id}}/{{$scort->name}}" target="_top" class="image background-image-loaded image-loaded" style="background-image:('/storage/galeria/thumb/{{ $scort->galleries[0]->thumb }}')">
                                                <picture><img role="image" src="/storage/galeria/thumb/{{ $scort->galleries[0]->thumb }}" alt="Jade"></picture>
                                            </a> <i aria-hidden="true" class="fa fa-video-camera video"></i></div>
                                        <figcaption>
                                            <p></p>
                                            <p><a href="#"><i aria-hidden="true" class="fa fa-circle" style="display: none;"></i><span><span class="brown">{{ $scort->name }}</span> <span class="brown number">{{ $scort->edad }}</span>, Escort Gold de Apariencia {{ $scort->etnia}}, Ubicada en {{ $region->name }}. Servicio de 1:00 hora por <span class="brown number">${{ $scort->costohora }}</span></span></a></p>
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
@endsection
