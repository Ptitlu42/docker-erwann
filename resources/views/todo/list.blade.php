@extends('layouts.app')

@section('header')
    <h1>Ma todo list</h1>
@endsection


@section('content')
<div class="d-flex justify-content-center">
    <a href="{{route('todo.create')}}"><button type="button" class="btn btn-success">Ajout d'un todo</button></a>
</div>
<div class="d-flex justify-content-center">
    <ul class="list-group list-group-flush">
    @foreach ($todos as $todo)
        <a href='{{ route('todo.show', ['todo' => $todo->id]) }}' class="list-group-item list-group-item-action">
        {{ $todo->name }}
        </a>
    @endforeach
    </ul>
</div>
@endsection