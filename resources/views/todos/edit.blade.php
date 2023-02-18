@extends("layouts.main")

@section("content")

    <x-alerts />
    <h1 class="text-4xl font-bold">Update Todo Item</h1>
    <div class="flex space-x-4 items-center">
        <h3>{{$todo->title}}</h3>
        <p>{{$todo->description}}</p>
    </div>
    <form action="{{route('todo.update', ['todo'=> $todo->id])}}" method="POST" class="flex flex-col space-y-4 items-center">
        @csrf
        @method("patch")
        <input type="text" id="title" name="title" class="border-b border-black" placeholder="Title">
        <input type="text" id="description" name="description" class="border-b border-black" placeholder="Description">
        @livewire('edit-step', ["step" => $todo->step])
        <div class="flex space-x-2 items-center">
            <input type="submit" value="Update" class="cursor-pointer bg-blue-500 text-white p-2 rounded-xl">
            <a href="/" class="bg-blue-500 rounded-xl p-2 text-white">Back</a>
        </div>
    </form>

@endsection