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
                            
                            
                            <form id="form-search" data-autocomplete="/api/searchtags">
                                @csrf
                                <div class="input-box">
                                    
                                    <div class="fields">
                                        <div class="search-input">
                                            
                                            <div  class="tagsinput" style="width: 300px; min-height: 62px; height: 62px;">
                                                <div >
                                                    <input  value="" data-default="" placeholder="Nombre, Edad, Ubicación, Color de pelo, etc" style="color: rgb(102, 102, 102); width: 100%;">
                                                </div>
                                                <div class="tags_clear"></div>
                                            </div>
                                            <button class="remove tooltipstered" data-toggle="tooltip" data-original-title="Limpiar búsqueda"> <i class="fa fa-times"></i> </button>
                                        </div>
                                        <button type="submit" class="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    
                                </div>
                                <div class="input-options">
                                    <ul>
                                        <li ><a href="#" data-lugar="{{ $lugar }}" data-value="video" class="filtro" >Con Video</a></li>
                                        <li ><a href="#" data-lugar="{{ $lugar }}" data-value="cara" class="filtro">Cara Visible</a></li>
                                        <li ><a href="#" data-lugar="{{ $lugar }}" data-value="experiencia" class="filtro">Con Experiencias</a></li>
                                        <li ><a href="#" data-lugar="{{ $lugar }}" data-value="disponible" class="filtro">Disponibles</a></li>
                                        <li ><a href="#" data-lugar="{{ $lugar }}" data-value="promocion" class="filtro">En Promoción</a></li>
                                    </ul>
                                </div>
                                
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
                        <div class="grid isotope">
                            @foreach($scorts as $key => $scort)
                                <article data-order="131" class="article-escort grid-item isotope-item is-big is-load">
                                    <figure>
                                        <div class="inner">
                                            <div class="girl bg">
                                                <a href="{{ $region->name }}/{{$scort->id}}/{{$scort->name}}" target="_top" class="image background-image-loaded image-loaded" style="background-image:('/storage/galeria/thumb/{{ $scort->galleries[0]->thumb }}')">
                                                    <picture><img role="image" src="/storage/galeria/thumb/{{ $scort->galleries[0]->thumb }}" alt="{{$scort->name}}"></picture>
                                                </a> <i aria-hidden="true" class="fa fa-video-camera video"></i></div>
                                            <figcaption>
                                                <p></p>
                                                    <p>
                                                        <a href="#">
                                                            <i aria-hidden="true" class="fa fa-circle" style="display: none;"></i>
                                                            <span>
                                                                <span class="brown">{{ $scort->name }}</span> 
                                                                <span class="brown number">{{ $scort->edad }},</span>
                                                                Escort Gold de Apariencia {{ $scort->etnia}}, Ubicada en {{ $region->name }}. Servicio de 1:00 hora por 
                                                                <span class="brown number">${{ $scort->costohora }}</span>
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
@endsection
