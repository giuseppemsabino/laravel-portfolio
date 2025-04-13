@extends('layouts.projects')

@section('title', "Aggiungi una Proggeto")

@section('content')

    <form action="{{route('projects.store')}}" method="POST">
        @csrf
        <div class="form-control m-3 d-flex flex-column">
            <label for="author">Autore</label>
            <input type="text" name="author" id="author">
        </div>
        <div class="form-control m-3 d-flex flex-column">
            <label for="cliente">Cliente</label>
            <input type="text" name="cliente" id="cliente">
        </div>
        <div class="form-control m-3 d-flex flex-column">
            <label for="conclutions">Conclusione</label>
            <textarea name="conclutions" id="conclutions"></textarea>
        </div>

        <input type="submit" value="salva" class="btn btn-primary">
    </form>

@endsection
