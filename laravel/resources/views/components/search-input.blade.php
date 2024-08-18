@props(['label', 'placeholder', 'name', 'type', 'list' => ''])

<div class="flex flex-col items-center justify-center w-full gap-2">
    <label class="text-start w-full" for="{{$name}}">{{$label}}</label>
    <input class="border border-b-0 rounded-top-2 focus:outline-none w-full p-1" type="{{$type}}" placeholder="{{$placeholder}}" name="{{$name}}" id="{{$name}}" list="{{$list}}">
    <div id="search-container">
    </div>
</div>