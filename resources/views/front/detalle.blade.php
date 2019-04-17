@extends('layouts.front.master')
@section('content')
<section class="section" id="breadcrump">
        <div class="section-shadow"></div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <ul class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                                <li class="home" property="itemListElement" typeof="ListItem">
                                    <a property="item" typeof="WebPage" title="Inicio" href="/{{$lugar}}"> <span property="name">Inicio</span> </a>
                                </li>
                                
                                <li class="current" property="itemListElement" typeof="ListItem"> <span property="name">{{ $scort->name }}</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section" id="profile">
            <div class="section-content">
                <div class="container">
                    <article class="article-profile is-big animate animate-in">
                        <figure class="bg">
                            <div class="image background-image-loaded image-loaded" style="background-image: url(&quot;/storage/{{$scort->galleries[0]->photo}}&quot;);"> 
                                <img src="/storage/{{$scort->galleries[0]->photo}}" title="{{$scort->name}}" alt="{{$scort->name}}" style="opacity:0">
                            </div>
                        </figure>
                        <div class="info">
                            <h1 class="info__title line"> {{ $scort->name }} <i class="fa fa-check-circle tooltipstered" data-toggle="tooltip"></i> <span class="info__category">| {{ $scort->package->name }} </span></h1>
                            <h2>Sobre mí:</h2>
                            <p>{{ $scort->description }}</p>
                            <div class="details">
                                <ul>
                                    <li>{{ $scort->nacionalidad }}</li>
                                    <li>{{ $scort->etnia }}</li>
                                    <li>{{ $scort->edad }} años</li>
                                    <li>{{ $scort->talla}} </li>
                                    <li>{{ $scort->peso}} kg</li>
                                    <li> {{ $scort->medidas }} cm</li>
                                </ul>
                            </div>
                            <div class="tags"> 
                                @foreach($scort->characteristics as $caracter)
                                <span>{{ $caracter->name}}</span> 
                                @endforeach
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>



        <section class="section" id="price">
                <div class="section-content">
                    <div class="container">
                        <div class="item item-image">
                            <div class="icon"> <img src="/storage/{{ $scort->galleries[0]->photo }}" title="{{ $scort->name }}" alt="{{ $scort->name }}"></div>
                            <div class="info">
                                <ul>
                                    <li class="pretitle">{{ $scort->edad}} años</li>
                                    <li class="value"> <span>{{ $scort->name }} <i class="fa fa-check-circle tooltipstered" data-toggle="tooltip"></i> </span></li>
                                    <li class="pretitle"> {{ $scort->nacionalidad }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="item animate trigger-phone animate-in"> <a href="tel:+{{ $scort->telefono}}"  class="phone-result" data-phone="{{ $scort->telefono }}">Teléfono</a>
                            <div class="icon icon--icon"><i class="fa fa-phone"></i></div>
                            <div class="info">
                                <ul class="show-info">
                                    <li class="pretitle">&nbsp;</li>
                                    <li class="value">+{{ $scort->telefono }}</li>
                                    <li class="comment">&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="item animate animate-in" style="animation-delay: 0.2s;">
                            <a href="https://wa.me/{{$scort->telefono}}?text=Hola!, te acabo de ver  y me gustaría saber más de ti." class="phone-result" target="_blank" rel="noopener"></a>
                            <div class="icon icon--icon"><i class="fa fa-whatsapp"></i></div>
                            <div class="info">
                                <ul>
                                    <li class="pretitle">&nbsp;</li>
                                    <li class="value">Whatsapp</li>
                                    <li class="comment">&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="item animate animate-in" style="animation-delay: 0.4s;">
                            <div class="icon icon--icon"><i class="fa fa-usd"></i></div>
                            <div class="info">
                                <ul>
                                    <li class="pretitle">&nbsp;</li>
                                    <li class="value">$ {{ $scort->costohora }} <small>por 1 hora</small></li>
                                    <li class="comment">&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="item animate animate-in" style="animation-delay: 0.6s;">
                            <div class="icon icon--icon"><i class="fa fa-map-marker"></i></div>
                            <div class="info">
                                <ul>
                                    <li class="comment">&nbsp;</li>
                                    <li title="El Golf" class="value">El Golf</li>
                                    <li class="pretitle">Tengo estacionamiento.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="item animate animate-in" style="animation-delay: 0.8s;">
                            <div class="icon icon--icon"><i class="fa fa-comments-o"></i></div>
                            <div class="info">
                                <ul>
                                    <li class="pretitle">&nbsp;</li>
                                    <li class="value">Sin eXPeriencias</li>
                                    <li class="comment">&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    
            <section class="section" id="services">
                    <div class="section-content">
                        <div class="container">
                            <div class="tables">
                                <div class="row">
                                    <div class="col-md-6 animate animate-in">
                                        <div class="box services equalize-load" data-equalize="box-item-table" style="height: 254.2px;">
                                            <h2 class="line"> Servicios <small>Algunos servicios podrían tener un costo adicional.</small></h2>
                                            <div class="tags"> 
                                                @foreach($scort->services as $serv)
                                                <span data-toggle="tooltip" data-placement="top" title="">{{ $serv->name }}</span> 
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate animate-in" style="animation-delay: 1s;">
                                        <div class="box schedule equalize-load" data-equalize="box-item-table" style="height: 254.2px;">
                                            <h2 class="line"> Horario <small>La disponibilidad es relativa, recuerda siempre confirmar.</small></h2>
                                            <div class="table">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th><span>LUN</span></th>
                                                            <th><span>MAR</span></th>
                                                            <th><span>MIE</span></th>
                                                            <th><span>JUE</span></th>
                                                            <th><span>VIE</span></th>
                                                            <th><span>SAB</span></th>
                                                            <th><span>DOM</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            @if(@in_array($horarios[0]->id ,$sc))
                                                            <td> 
                                                                    @php  $valor = \App\ScheduleScort::valores(1);
                                                                    @endphp
                                                                <span> {{$valor['inicio']}}<br> a<br> {{$valor['final']}}</span>
                                                            </td>
                                                            @else
                                                            <td></td>
                                                            @endif
                                                            @if(@in_array($horarios[1]->id ,$sc))
                                                            <td> 
                                                                    @php  $valor = \App\ScheduleScort::valores(2);
                                                                    @endphp
                                                                <span> {{$valor['inicio']}}<br> a<br> {{$valor['final']}} </span>
                                                            </td>
                                                            @else
                                                            <td></td>
                                                            @endif
                                                            @if(@in_array($horarios[2]->id ,$sc))
                                                            <td> 
                                                                    @php  $valor = \App\ScheduleScort::valores(3);
                                                                    @endphp
                                                                <span> {{$valor['inicio']}}<br> a<br> {{$valor['final']}}</span></td>
                                                            @else
                                                            <td></td>
                                                            @endif
                                                            @if(@in_array($horarios[3]->id ,$sc))
                                                            <td> 
                                                                    @php  $valor = \App\ScheduleScort::valores(4);
                                                                    @endphp
                                                                <span> {{$valor['inicio']}}<br> a<br> {{$valor['final']}}</span></td>
                                                            @else
                                                            <td></td>
                                                            @endif
                                                            @if(@in_array($horarios[4]->id ,$sc))
                                                            <td> 
                                                                    @php  $valor = \App\ScheduleScort::valores(5);
                                                                    @endphp
                                                                <span> {{$valor['inicio']}}<br> a<br> {{$valor['final']}}</span></td>
                                                            @else
                                                            <td></td>
                                                            @endif
                                                            @if(@in_array($horarios[5]->id ,$sc))
                                                            <td> 
                                                                    @php  $valor = \App\ScheduleScort::valores(6);
                                                                    @endphp
                                                                <span> {{$valor['inicio']}}<br> a<br> {{$valor['final']}}</span></td>
                                                            @else
                                                            <td></td>
                                                            @endif
                                                            @if(@in_array($horarios[6]->id ,$sc))
                                                            <td>
                                                                    @php  $valor = \App\ScheduleScort::valores(7);
                                                                    @endphp
                                                                 <span> {{$valor['inicio']}}<br> a<br> {{$valor['final']}}</span></td>
                                                            @else
                                                            <td></td>
                                                            @endif
                                                           
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
                

                <section class="section" id="media">
                        <div class="section-content">
                            <div class="container">
                                <div class="details">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p> <i class="fa fa-check"></i> <span class="name">{{ $scort->name }}</span> ha sido entrevistada Personalmente, sus fotografías no tienen retoque.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="photoswipe" id="lightgallery">
                                   
                                    @foreach(@$scort->videos as $vid)
                                      @if($vid->status == 2)
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-iframe="true" data-src="/{{$vid->path}}"> 
                                            <article class="article-media animate is-video animate-in"> 
                                                <figure itemprop="associatedMedia" itemtype="http://schema.org/ImageObject"> 
                                                    <a class="image" href="/{{$vid->path}}" id="flowplayer-{{$vid->id}}"> 
                                                        <picture style="background-image:url('/{{ @$scort->cover }}')"> 
                                                            <img src="/{{ @$scort->cover }}"> 
                                                            <img src="/{{ @$scort->cover }}"  class="transparent"> 
                                                        </picture> 
                                                    </a> 
                                                </figure> 
                                            </article>

                                        </div>
                                      @endif
                                    @endforeach

                                    @foreach($scort->galleries as $gal)                                
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 lightgallery imageContainer" data-src="/storage/{{$gal->photo}}" >
                                            <article class="article-media animate animate-in"   style="animation-delay: 0.2s;">
                                                <figure itemprop="associatedMedia"  itemtype="http://schema.org/ImageObject">
                                                    <a class="image fancybox magnific-popup box" href="/storage/{{$gal->photo}}" id="flowplayer-{{$gal->id}}"  itemprop="contentUrl" data-fancybox-group="gallery">
                                                       
                                                            <img src="/storage/galeria/thumb/{{ $gal->thumb }}" alt="{{$scort->name}}"> 
                                                       
                                                        <span class="box-inner"> 
                                                            <i class="fa fa-search-plus"></i> 
                                                            <small>Ampliar imagen</small> 
                                                        </span> 
                                                    </a>
                                                </figure>
                                            </article>
                                        </div>
                                    @endforeach   
                                </div>
                              
                            </div>
                        </div>
                    </section>
@endsection
