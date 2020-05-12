@extends('layouts.app')

@section('title')
    Empresas
@endsection

@section('content')
    <a href="{{route('empresa.create')}}" class="button is-rounded" > + Registrar nueva empresa</a>
    <br>
    <br>
    <div style="overflow-x: auto;">
        <table class="table is-fullwidth">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Rfc</th>
                <th>Domicilio</th>
                <th>Municipio</th>
                <th>Estado</th>
                <th>C.P.</th>
                <th>Fecha de registro</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @if($empresas->isNotEmpty())
                @foreach($empresas as $empresa)
                    <tr>
                        <td>{{$empresa->id}}</td>
                        <td>{{$empresa->nombre}}</td>
                        <td>{{$empresa->rfc}}</td>
                        <td>{{$empresa->domicilio}}</td>
                        <td>{{$empresa->municipio}}</td>
                        <td>{{$empresa->estado}}</td>
                        <td>{{$empresa->cp}}</td>
                        <td>{{$empresa->created_at}}</td>
                        <td>
                            <form method="post" action="{{route('empresa.destroy', [$empresa->id])}}" id="empresaForDelete{{$empresa->id}}">
                                @method('DELETE')
                                @csrf
                                <a class="button is-small is-danger" onclick="deleteButton('empresaForDelete{{$empresa->id}}')">Elimainar</a>
                            </form>
                            <a class="button is-small" href="{{route('empresa.edit', ['empresa'=>$empresa->id])}}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="9"><p style="text-align: center">No hay empresas registradas</p></td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection


