@props(['nome' => "", 'email' => "", 'contato' => ""])
<nav>
    <div class="flex h-full justify-between items-center">
        <button id="nav-button" type="button">
            <i class="fa-solid fa-bars text-3xl text-white"></i>
        </button>
        <div class="drop-profile">
            <button id="dropdown" class="px-2">{{$nome}}</button>
            <x-profile-dropdown nome="{{$nome }}" email="{{ $email }}" contato="{{ $contato }}" />
        </div>
    </div>

</nav>