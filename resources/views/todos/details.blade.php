@extends("layouts.main")

@section("content")
    <h1 class="text-4xl font-bold">{{$todo->title}}</h1>
        <p>{{$todo->description}}</p>
        <div class="flex flex-col space-y-4 py-4">
            <h4 class="text-3xl font-semibold">Steps</h4>
            @forelse($todo->step as $x) 
                <p>{{$x->name}}</p>
            @empty
                <h6>No Steps Provided</h6>
            @endforelse
        </div>
    <a href="/" class="bg-blue-500 rounded-xl p-2 text-white">Back</a>

@endsection