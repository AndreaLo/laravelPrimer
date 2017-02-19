@extends('layouts.master')

@section('content')
    <div >
        <form class="col-xs-8 col-sm-8 col-md-8 text-cente">
            Titulo:<br>
            <input type="text" name="titulo">
            <br>
            Año:<br>
            <input type="text" name="anyo">
            <br>
            Dirección:<br>
            <input type="text" name="direccion">
            <br>
            Poster:<br>
            <input type="text" name="poster">
            <br>
            Sinopsis:<br>
            <input type="text" name="sinopsis">
            <br>
            <button type="button" class="btn btn-info">Crear</button>
            <br><br>
        </form>
    </div>
@stop