@extends('layouts.app')
@section('title')
    Perfil
@endsection
@section('content')
    @component('components.box')
        <form method="POST" action="{{ route('usuario.update', ['usuario'=>$user->id]) }}">
            @csrf
            @method('PUT')
            @include('components.errors')
            @component('components.field',['icon'=>'fa-user','fieldName'=>'name'])
                <input type="text"
                       class="input @error('name') is-danger @enderror"
                       name="name"
                       value="{{ $user->name }}"
                       placeholder="{{ __('Name') }}"
                       required autocomplete="name"
                       autofocus>
            @endcomponent

            @component('components.field',['icon'=>'fa-envelope','fieldName'=>'email'])
                <input type="email"
                       class="input @error('email') is-danger @enderror"
                       value="{{ $user->email }}"
                       placeholder="{{ __('Email') }}"
                       required
                       disabled
                       autocomplete="email">
            @endcomponent

            @component('components.field',['icon'=>'fa-id-badge','fieldName'=>'profile'])
                <textarea rows="50"
                          class="input @error('password_confirmation') is-danger @enderror"
                          placeholder="{{ __('Profile') }}"
                          name="profile"
                          required
                          autocomplete="profile">{{$user->profile}}</textarea>
            @endcomponent

            <hr>

            @component('components.field',['icon'=>'fa-lock','fieldName'=>'password'])
                <input type="password"
                       class="input @error('password') is-danger @enderror"
                       placeholder="{{ __('Password') }}"
                       name="password"
                       autocomplete="new-password">
            @endcomponent

            @component('components.field',['icon'=>'fa-lock','fieldName'=>'password_confirmation'])
                <input type="password"
                       class="input @error('password_confirmation') is-danger @enderror"
                       placeholder="{{ __('Confirm Password') }}"
                       name="password_confirmation"
                       autocomplete="new-password">
            @endcomponent
            <hr>

            <div class="field">
                <p class="control">
                    <button class="button is-success">
                        Actualizar
                    </button>

                    <form method="post" action="{{route('usuario.destroy', [$user->id])}}" id="userForDelete{{$user->id}}">
                        @method('DELETE')
                        @csrf
                        <button class="button is-danger">Desactivar cuanta</button>
                    </form>
                </p>
            </div>
        </form>
    @endcomponent

@endsection
