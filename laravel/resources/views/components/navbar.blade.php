<nav>

    <div class="flex h-full justify-between items-center">
        <button id="nav-button" type="button">
            <i class="fa-solid fa-bars text-3xl text-white"></i>
        </button>
        <div class="drop-profile">
            <button id="dropdown" class="px-2 flex gap-2 items-center"><img class="rounded-full w-12 h-12" id="profile-image" src="{{asset('storage/' . $user->profile_picture) ?? ""}}" alt=""></button>
            <x-profile-dropdown nome="{{ $user->name }}" email="{{ $user->email }}" contato="{{ $user->contato }}" profile="{{$user->profile_picture}}"/>
        </div>
    </div>
</nav>