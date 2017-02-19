@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:20px">

        <div class="col-md-offset-2 col-md-8">

            <h3 class="text-center">
                Modificar la ficha de la película
            </h3>

            <div class="form-group">
                {{method_field('PUT')}}
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$peli->title}}">
            </div>

            <div class="form-group">
                <label for="anyo">Año</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$peli->year}}">
            </div>

            <div class="form-group">
                <label for="title">Director</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$peli->director}}">
            </div>

            <div class="form-group">
                <label for="title">Poster</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$peli->poster}}">
            </div>

            <div class="form-group">
                <label for="synopsis">Resumen</label>
                <textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{$peli->synopsis}}</textarea>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-info" style="padding:8px 100px;margin-top:25px;">
                    Modificar ficha
                </button>
            </div>

        </div>
    </div>
@stop
