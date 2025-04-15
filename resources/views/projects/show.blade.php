@extends("layouts.projects")

@section('title', $project->author)

@section('content')

<div class="d-flex m-3 gap-3">
    <a href="{{route('projects.edit', $project)}}" class="btn btn-info">Edit</a>

    <!--  -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Elimina
    </button>
</div>

<h5>{{$project->type->name}}</h5>

<h2>{{$project->cliente}}</h2>

<p>{{$project->conclutions}}</p>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina proggeto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Vuoi eliminare il proggeto definitivamente?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annula</button>
            <form action="{{route('projects.destroy', $project)}}" method="POST">
                @csrf 
                @method('DELETE') 
                <input type="submit" class="btn btn-danger" value="Elimina">
            </form>
        </div>
        </div>
    </div>
    </div>



@endsection
