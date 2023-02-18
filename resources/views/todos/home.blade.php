@extends("layouts.main")

@section("content")
    <div class="flex space-x-6">
        <h1 class="text-4xl font-bold">All Todos</h1>
        <a href="/create" class="bg-blue-500 text-3xl text-white p-2 rounded-xl">Create New</a>
    </div>
    <x-alerts />
    @foreach($todos as $todo)
    <div class="flex space-x-4">
    <a href="{{route('todo.show', $todo->id)}}">
        @if($todo->completed)
            <p class="text-xl line-through">{{$todo->title}}</p>
        @else
            <p class="text-xl">{{$todo->title}}</p>
        @endif
        </a>
        <a href={{'/'. $todo->id .'/edit'}}>
            <span class="fas fa-edit text-yellow-500 text-xl"></span>
        </a>
        @if(!$todo->completed)
        <div>
            <span onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()" class="fas fa-check text-xl text-gray-400 cursor-pointer"></span>
            <form action="{{route('todo.complete', $todo->id)}}" method="POST" id="{{'form-complete-'.$todo->id}}">
                @csrf
                @method("patch")
            </form>
        </div>
        @else
        <div>
            <span onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()" class="fas fa-check text-xl text-green-500 cursor-pointer"></span>
            <form action="{{route('todo.incomplete', $todo->id)}}" method="POST" id="{{'form-incomplete-'.$todo->id}}">
                @csrf
                @method("patch")
            </form>
        </div>
        @endif
        <div>
            <span onclick="event.preventDefault();document.getElementById('form-delete-{{$todo->id}}').submit()" class="fas fa-trash-can text-xl text-red-500 cursor-pointer"></span>
            <form action="{{route('todo.deleteTodo', $todo->id)}}" method="POST" id="{{'form-delete-'.$todo->id}}">
                @csrf
                @method("delete")
            </form>
        </div>
    </div>
    @endforeach
@endsection