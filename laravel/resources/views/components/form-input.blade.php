@props(['label', 'placeholder', 'name', 'type'])

<div class="flex flex-col items-center justify-center gap-2">
    <label class="text-start w-full" for="{{$name}}">{{$label}}</label>
    <input class="border rounded focus:outline-none w-full p-2" type="{{$type}}" placeholder="{{$placeholder}}" name="{{$name}}" id="{{$name}}">
</div>