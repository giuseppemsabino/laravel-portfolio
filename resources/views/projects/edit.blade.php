@extends('layouts.projects')

@section('title', 'Modifica Proggeto')

@section('content')

<form action="{{route('projects.update', $project)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-control m-3 d-flex flex-column">
        <label for="author">Autore</label>
        <input type="text" name="author" id="author" value="{{$project->author}}">
    </div>
    <div class="form-control m-3 d-flex flex-column">
        <label for="cliente">Cliente</label>
        <input type="text" name="cliente" id="cliente" value="{{$project->cliente}}">
    </div>
    <div class="form-control m-3 d-flex flex-column">
        <label for="type_id">Tipo di progetto</label>
        <select name="type_id" id="type_id">
            @foreach($types as $type)
            <option value="{{$type->id}}" {{ $project->type_id == $type->id ? 'selected': '' }} >{{$type->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-control m-3 d-flex flex-column">
        <label for="conclutions">Conclusione</label>
        <textarea name="conclutions" id="conclutions">{{$project->conclutions}}</textarea>
    </div>

    <input type="submit" value="salva" class="btn btn-primary">
</form>


@endsection