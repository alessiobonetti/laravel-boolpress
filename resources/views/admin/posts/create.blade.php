@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cre il tuo post</h2>

        <form action="{{route("admin.posts.store")}}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci Titolo">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Inserisci Slug">
            </div>
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>         
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection