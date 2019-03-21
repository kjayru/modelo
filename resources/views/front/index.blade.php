@extends('layouts.front.master')
@section('content')


      
 
@endsection
<div id="selector" class="" style="display:none;">
        <div class="selector-box">
                <div class="box-logo"> 
                    <img src="/assets/logo.png" alt="El Silencio">
                </div>
            <div class="box-text">
                <p>Encuentra las mejores Escorts, Damas de Compañía y Masajes Eróticos en Santiago y Las Regiones de Chile.
                    <br><br>
                    Declaras ser mayor de 18 años.</p>
            </div>
            <h2 class="box-title">selecciona una ubicación</h2>
            <form action="" class="box-form" method="POST" id="form-selector">
                @csrf
                <div class="form-field"> 
                    <select id="select-region" required>
                        <option value="">Seleccione</option>
                        @foreach($regions as $region)
                        <option value="{{ $region->name }}">{{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="form-field"> 
                    <button class="button button-small" type="submit">Entrar</button>
                </div>
            </form>
        </div>
</div>
