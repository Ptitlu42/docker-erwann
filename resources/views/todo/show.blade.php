@extends('layouts.app')

@section('header')
    <h1>View a Todo</h1>
    <a href="{{ route('todo.index') }}" class="btn btn-success">Go back to list</a>
@endsection


@section('content')
    <div class="d-flex justify-content-center">

    
        <div class="card border-0" style="width: 70vw">
            <img src="https://cdn-icons-png.flaticon.com/512/4345/4345800.png" class="card-img-top" style="max-height: 15vh; object-fit:contain">
            <div class="card-body">
            <h4 class="card-title text-center">{{  $todo->name }}  <span class="badge text-bg-secondary">{{$todo->category->name}}</span></h4>
            <p class="card-text">{{  $todo->description }}</p>
            <div class="d-flex flex-column ">
                
                <a href='{{ route('todo.edit', ['todo' => $todo->id]) }}' class="btn btn-primary my-2">
                    <button type="button" class="btn btn-primary">
                        Edit the Todo
                    </button>
                </a>
                <form action="{{route('todo.destroy', ['todo' => $todo->id])}}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100">Delete this record</button>
                </form>

            </div>
            
        </div>
    </div>

@endsection

@section('footer')
😗
@endsection