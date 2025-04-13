@extends("layouts.projects")

@section('title', $project->author)

@section('content')


<h2>{{$project->cliente}}</h2>

<p>{{$project->conclutions}}</p>





@endsection
