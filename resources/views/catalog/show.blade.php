@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-offset-4">
            <h1>{{ $peli["title"] }}</h1>
        </div>

    <div class="row">
        <div class="col-sm-3 col-sm-offset-2">
            <br><br>
          <img src="{{ $peli->poster }}" style="max-width:100%" />

        </div>
        <div class="col-sm-5">
            <br><br>
            <p><b>Año: </b>{{ $peli->year }}</p>
            <p><b>Director: </b>{{ $peli->director }}</p>
            <p><b>Sinopsi: </b>{{ $peli->synopsis }}</p>
            <p><b>Estat:</b>
                @if( $peli->rented )
                    Alquilada<br><br>
                    <button type="button" class="btn btn-info col-sm-4">Devolver</button>
                @else
                    Disponible<br><br>
                    <button type="button" class="btn btn-info col-sm-4">Alquilar</button>
                @endif

                <button type="button" class="btn btn-info col-sm-4" onclick="location.href='{{url('/')}}/catalog/edit/{{$peli->id}}'">
                    <span aria-hidden="true"></span> Editar peli</button>
                <button type="button" class="btn btn-info col-sm-4" onclick="window.history.back()">
                    <span aria-hidden="true"></span> Atrás</button>
            </p>
        </div>

    </div>

@endsection