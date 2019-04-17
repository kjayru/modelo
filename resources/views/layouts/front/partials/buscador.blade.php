  
<form id="form-search" method="POST" action="{{route('front.search')}}">
        @csrf
        <div class="input-box">
            
            <div class="fields">
                <div class="search-input">
                    
                    <div  class="tagsinput" style="width: 300px; min-height: 62px; height: 62px;">
                        <div >
                            <input  value="" name="buscar" data-default="" placeholder="Nombre, Edad, Ubicación, Color de pelo, etc" style="color: rgb(102, 102, 102); width: 100%;">
                        </div>
                        <div class="tags_clear"></div>
                    </div>
                    <button class="remove tooltipstered" data-toggle="tooltip" data-original-title="Limpiar búsqueda"> <i class="fa fa-times"></i> </button>
                </div>
                <button type="submit" class="submit"><i class="fa fa-search"></i></button>
            </div>
            <input type="hidden" name="lugar" value="{{ @$lugar }}">
        </div>
        <div class="input-options">
            <ul>
                <li ><a href="#" data-lugar="{{ @$lugar }}" data-value="video" class="filtro" >Con Video</a></li>
                <li ><a href="#" data-lugar="{{ @$lugar }}" data-value="cara" class="filtro">Cara Visible</a></li>
                <li ><a href="#" data-lugar="{{ @$lugar }}" data-value="experiencia" class="filtro">Con Experiencias</a></li>
                <li ><a href="#" data-lugar="{{ @$lugar }}" data-value="disponible" class="filtro">Disponibles</a></li>
                <li ><a href="#" data-lugar="{{ @$lugar }}" data-value="promocion" class="filtro">En Promoción</a></li>
            </ul>
        </div>
                                    
</form>