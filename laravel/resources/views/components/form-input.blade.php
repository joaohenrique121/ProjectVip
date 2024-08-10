@props(['label', 'placeholder', 'for', 'name', 'type'])

<div class="mb-3 d-flex flex-column align-items-center justify-content-center">
    <label class="text-start w-75 py-2" for="{{$for}}">{{$label}}</label>
    <input class="form-control w-75" type="{{$type}}" placeholder="{{$placeholder}}" name="{{$name}}" id="{{$name}}">
</div>