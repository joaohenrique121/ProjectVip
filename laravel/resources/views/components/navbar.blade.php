@props(['nome' => "", 'email' => "", 'contato' => ""])
<nav>
    <div class="d-flex h-100 justify-content-between align-items-center">
        <button id="nav-button" type="button">
            <i class="bi bi-list fs-2 text-white"></i>
        </button>
        <div class="drop-profile">
            <button class="padding">{{$nome}}</button>
            <x-profile-dropdown nome="{{$nome }}" email="{{ $email }}" contato="{{ $contato }}" />
        </div>
    </div>

</nav>