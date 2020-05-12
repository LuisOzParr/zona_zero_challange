@extends('layouts.app')

@section('content')
    @component('components.box',['title'=>__('Register') ])
        <form method="POST" action="{{ route('register') }}">
            @csrf
            @include('components.errors')
            @component('components.field',['icon'=>'fa-user','fieldName'=>'name'])
                <input type="text"
                       class="input @error('name') is-danger @enderror"
                       name="name"
                       value="{{ old('name') }}"
                       placeholder="{{ __('Name') }}"
                       required autocomplete="name"
                       autofocus>
            @endcomponent

            @component('components.field',['icon'=>'fa-envelope','fieldName'=>'email'])
                <input type="email"
                       class="input @error('email') is-danger @enderror"
                       name="email"
                       value="{{ old('email') }}"
                       placeholder="{{ __('Email') }}"
                       required
                       autocomplete="email">
            @endcomponent

            @component('components.field',['icon'=>'fa-id-badge','fieldName'=>'profile'])
                <textarea rows="50"
                          class="input @error('password_confirmation') is-danger @enderror"
                          placeholder="{{ __('Profile') }}"
                          name="profile"
                          required
                          autocomplete="profile">{{old('profile')}}</textarea>
            @endcomponent

            <hr>

            @component('components.field',['icon'=>'fa-lock','fieldName'=>'password'])
                <input type="password"
                       class="input @error('password') is-danger @enderror"
                       placeholder="{{ __('Password') }}"
                       name="password"
                       required autocomplete="new-password">
            @endcomponent

            @component('components.field',['icon'=>'fa-lock','fieldName'=>'password_confirmation'])
                <input type="password"
                       class="input @error('password_confirmation') is-danger @enderror"
                       placeholder="{{ __('Confirm Password') }}"
                       name="password_confirmation"
                       required autocomplete="new-password">
            @endcomponent
            <hr>

            <div class="field">
                <p class="control">
                    <button class="button is-success">
                        {{ __('Register') }}
                    </button>
                </p>
            </div>
        </form>
    @endcomponent

@endsection
