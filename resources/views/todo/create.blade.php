@extends('layouts.app')

@section('header')
    <h1>Create a Todo</h1>
@endsection

@section('content')
<form action="{{ route('todo.store') }}" method="post">
    @include('todo.form')
</form>
@endsection

@section('footer')

@endsection