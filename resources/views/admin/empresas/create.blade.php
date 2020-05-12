@extends('layouts.app')

@section('content')
    @component('components.box',['title'=>'Nueva empresa' ])
        <form method="POST" action="{{ route('empresa.store') }}">
            @csrf
            @include('components.errors')
            @component('components.field',['icon'=>'fa-user','fieldName'=>'nombre'])
                <input type="text"
                       class="input @error('nombre') is-danger @enderror"
                       name="nombre"
                       value="{{ old('nombre') }}"
                       placeholder="{{ __('Name') }}"
                       required autocomplete="name"
                       autofocus>
            @endcomponent

            @component('components.field',['icon'=>'fa-id-card','fieldName'=>'rfc'])
                <input type="text"
                       class="input @error('rfc') is-danger @enderror"
                       name="rfc"
                       value="{{ old('rfc') }}"
                       placeholder="RFC"
                       required>
            @endcomponent
            <hr>

            @component('components.field',['icon'=>'fa-map-marked-alt','fieldName'=>'domicilio'])
                <input type="text"
                       class="input @error('domicilio') is-danger @enderror"
                       name="domicilio"
                       value="{{ old('domicilio') }}"
                       placeholder="Domicilio"
                       required>
            @endcomponent
            <div class="columns">
                <div class="column">
                    @component('components.field',['icon'=>'fa-map-marked-alt','fieldName'=>'municipio'])
                        <input type="text"
                               class="input @error('municipio') is-danger @enderror"
                               name="municipio"
                               value="{{ old('municipio') }}"
                               placeholder="Municipio"
                               required>
                    @endcomponent
                </div>
                <div class="column">
                    @component('components.field',['icon'=>'fa-map-marked-alt','fieldName'=>'estado'])
                        <input type="text"
                               class="input @error('estado') is-danger @enderror"
                               name="estado"
                               value="{{ old('estado') }}"
                               placeholder="Estado"
                               required>
                    @endcomponent
                </div>
            </div>

            @component('components.field',['icon'=>'fa-home','fieldName'=>'cp'])
                <input type="text"
                       class="input @error('cp') is-danger @enderror"
                       name="cp"
                       value="{{ old('cp') }}"
                       placeholder="CP"
                       required>
            @endcomponent

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
