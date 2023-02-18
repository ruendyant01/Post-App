@extends("layouts.main")

@section("content")
<h1 class="text-4xl font-bold">Create Todo Item</h1>
    <x-alerts />
    <form action="/create" method="POST" class="flex flex-col space-y-10">
        @csrf
        <input type="text" id="title" name="title" class="border-b border-black" placeholder="Title">
        <input type="text" id="description" name="description" class="border-b border-black" placeholder="Description">
        @livewire("step")
        <input type="submit" value="Create" class="cursor-pointer bg-blue-500 text-white py-1 px-2 rounded-xl">
    </form>
    <a href="/" class="bg-blue-500 rounded-xl p-2 text-white">Back</a>
@endsection