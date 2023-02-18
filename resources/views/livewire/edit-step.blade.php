<div class="w-full">
    <div class="flex space-x-6 items-center justify-center">
        <h1 class="text-3xl">Edit Steps</h1>
        <span class="fas fa-plus cursor-pointer" wire:click="increment"></span>
    </div>
    <div class="flex flex-col space-y-4 items-center pt-8">
        @foreach($step as $key => $x) 
            <div class="flex space-x-4 items-center justify-center" wire:key='{{$loop->index}}'>
                {{-- <div>{{$x['name']}}</div> --}}
                <input type="text" name="step[]" value="{{$x['name'] ?? ''}}" placeholder="{{($loop->index+1).' Steps'}}" class="w-32"/>
                <input type="hidden" name="stepId[]" value="{{$x['id'] ?? null}}">
                <span class="fas fa-times cursor-pointer" wire:click="decrement({{$key}})"></span>  
            </div>
        @endforeach
        </div>
</div>
