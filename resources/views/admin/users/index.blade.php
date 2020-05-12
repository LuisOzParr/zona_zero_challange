@extends('layouts.app')

@section('title')
    Usuarios
@endsection

@section('content')
    <br>
    <br>
    <div style="overflow-x: auto;">
        <table class="table is-fullwidth">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Perfil</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->profile}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


