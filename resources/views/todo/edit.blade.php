@extends('layouts.app')

@section('header')
    <h1>Edit a Todo</h1>
@endsection

@section('content')
<form action="{{ route('todo.update', ['todo' => $todo->id]) }}" method="post">
    @method('PUT')
    @include('todo.form', $todo)
</form>
@endsection

@section('footer')

@endsection