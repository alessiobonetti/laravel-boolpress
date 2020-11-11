@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>{{$article->title }}</h3>

        <div>
            <img src="{{ asset("storage/".$article->image)}}" alt="immagine di {{$article->title}}">
        </div>

        <div>
            {{$article->content}}
        </div>
    </div>