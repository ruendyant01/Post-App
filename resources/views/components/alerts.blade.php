<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    @if(session()->has("message"))
    <p class="bg-green-300">{{session()->get("message")}}</p>
    @elseif(session()->has("error"))
    <p class="bg-red-300">{{session()->get("error")}}</p>
    @endif

    @if($errors->any()) 
    <div>
        @foreach ($errors->all() as $error)
        <p class="bg-red-300">{{$error}}</p>
        @endforeach
    </div>
    @endif
</div>