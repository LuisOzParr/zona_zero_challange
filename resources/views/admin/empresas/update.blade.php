@extends('layouts.app')

@section('content')
    @component('components.box',['title'=>'Actualizar empresa' ])
        <form method="POST" action="{{ route('empresa.update', ['empresa'=>$empresa->id]) }}">
            @csrf
            @method('PUT')
            @include('components.errors')
            @component('components.field',['icon'=>'fa-user','fieldName'=>'nombre'])
                <input type="text"
                       class="input @error('nombre') is-danger @enderror"
                       name="nombre"
                       value="{{$empresa->nombre}}"
                       placeholder="Nombre de la empresa"
                       required
                       autofocus>
            @endcomponent

            @component('components.field',['icon'=>'fa-id-card','fieldName'=>'rfc'])
                <input type="text"
                       class="input @error('rfc') is-danger @enderror"
                       name="rfc"
                       value="{{$empresa->rfc}}"
                       placeholder="RFC"
                       required>
            @endcomponent
            <hr>

            @component('components.field',['icon'=>'fa-map-marked-alt','fieldName'=>'domicilio'])
                <input type="text"
                       class="input @error('domicilio') is-danger @enderror"
                       name="domicilio"
                       value="{{$empresa->domicilio}}"
                       placeholder="Domicilio"
                       required>
            @endcomponent
            <div class="columns">
                <div class="column">
                    @component('components.field',['icon'=>'fa-map-marked-alt','fieldName'=>'municipio'])
                        <input type="text"
                               class="input @error('municipio') is-danger @enderror"
                               name="municipio"
                               value="{{$empresa->municipio}}"
                               placeholder="Municipio"
                               required>
                    @endcomponent
                </div>
                <div class="column">
                    @component('components.field',['icon'=>'fa-map-marked-alt','fieldName'=>'estado'])
                        <input type="text"
                               class="input @error('estado') is-danger @enderror"
                               name="estado"
                               value="{{$empresa->estado}}"
                               placeholder="Estado"
                               required>
                    @endcomponent
                </div>
            </div>

            @component('components.field',['icon'=>'fa-home','fieldName'=>'cp'])
                <input type="text"
                       class="input @error('cp') is-danger @enderror"
                       name="cp"
                       value="{{$empresa->cp}}"
                       placeholder="CP"
                       required>
            @endcomponent

            <div class="columns">
                <div class="column">
                    <strong>Activar o desactivar empresa</strong>
                    <div class="field">
                        <input name="activa" id="switchRoundedSuccess" type="checkbox" class="switch is-rounded is-success" {{$empresa->activa == 1?'checked':''}}>
                        <label for="switchRoundedSuccess"></label>
                    </div>
                </div>
                <div class="column">

                </div>
            </div>

            <hr>
            <div class="field">
                <p class="control">
                    <button class="button is-success">
                        Guardar
                    </button>
                </p>
            </div>
        </form>
    @endcomponent

@endsection
