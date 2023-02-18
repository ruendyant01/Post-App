<div class="w-full">
    <div class="flex space-x-6 items-center justify-center">
        <h1 class="text-3xl">Add Steps</h1>
        <span class="fas fa-plus cursor-pointer" wire:click="increment"></span>
    </div>
    <div class="flex flex-col space-y-4 items-center pt-8">
        @foreach($step as $x) 
            <div class="flex space-x-4 items-center justify-center" wire:key='{{$x}}'>
                <input type="text" name="step[]" placeholder="{{($x+1).' Steps'}}" class="w-32"/>
                <span class="fas fa-times cursor-pointer" wire:click="decrement({{$x}})"></span>  
            </div>
        @endforeach
        </div>
</div>
