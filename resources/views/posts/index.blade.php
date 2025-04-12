@extends("layouts.posts")

@section("title","tutti i post")

@section('content')



<table>
    <thead>
        <tr>
            
            <th>Titolo</th>
            <th>Autore</th>
            <th>Categoria</th>
            <th>contenuto</th>
        </tr>
    </thead>
    <tbody>
            @foreach($posts as $post)
            <tr>

                <td>{{$post->title}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->category}}</td>
                <td>{{$post->content}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <h3>{{$post->title}}</h3> -->


@endsection