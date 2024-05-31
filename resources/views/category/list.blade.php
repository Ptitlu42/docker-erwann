@extends('layouts.app')

@section('header')
    <h1>My categories</h1>
@endsection


@section('content')
<div class="d-flex justify-content-center">
    <ul class="list-group list-group-flush">
    @foreach ($categories as $categorie)
        <li class="list-group-item list-group-item-action">
        {{ $categorie->name }} 
            @foreach ($categorie->tags as $tag)
                <span class="badge text-bg-secondary">{{$tag->name}}</span>
            @endforeach
        </li>
    @endforeach
    </ul>
</div>
@endsection