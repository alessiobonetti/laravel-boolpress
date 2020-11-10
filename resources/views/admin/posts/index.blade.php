@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="table">
            <thead>
                <tr>
                    <th scope="col">TITOLO</th>
                    <th scope="col">SLUG</th>
                    <th scope="col">CONTENUTO</th>
                    <th scope="col">AZIONI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->title}}</td>
                        <td>{{$article->slug}}</td>
                        <td>{{$article->content}}</td>
                        <td> <a href="{{route("admin.posts.show", $article->slug)}}" target="_blank">View</a>
                            EDIT
                            DELETE </td>
                    </tr>
                @endforeach
            </tbody>
        </div>
    </div>
@endsection