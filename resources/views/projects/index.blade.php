@extends("layouts.projects")

@section("title","tutti i post")

@section('content')


    <a href="{{route('projects.create')}}" class="btn btn-primary"> Aggiungi un proggeto</a>

    <table>
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Autore</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($projects as $project)
                <tr>

                    <td>{{$project->author}}</td>
                    <td>{{$project->cliente}}</td>
                    <td><a href="{{route('projects.show',$project->id)}}">visualizza</a></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection