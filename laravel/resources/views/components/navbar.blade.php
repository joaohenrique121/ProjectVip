<nav>

    <div class="flex h-full justify-between items-center">
        <button id="nav-button" type="button">
            <i class="fa-solid fa-bars text-3xl text-white"></i>
        </button>
        <div class="drop-profile">
            <button id="dropdown" class="px-2 flex gap-2 items-center"><img class="rounded-full w-12 h-12" id="profile-image" src="{{asset('storage/' . $user->profile_picture) ?? ""}}" alt=""></button>
            <x-dropdown id="dp-profile">
                <x-slot:slot>
                    <ul class="p-3">
                        <div class="flex justify-center">
                            <div class="upload-image-container">
                                <img src="{{asset('storage/' . $user->profile_picture) ?? ""}}" alt="" id="preview-image" class="upload-image-container">
                            </div>
                        </div>
                        <li>Nome: {{$user->nome}}</li>
                        <li>Email: {{$user->email}}</li>
                        <li>Contato: {{$user->contato}}</li>
                        <li class="update-profile-picture" id="upload-image">Alterar foto de perfil</li>
                        <input type="file" name="profile_picture" class="hidden" id="profile_picture" accept="image/*">
                    </ul>
                </x-slot:slot>
            </x-dropdown>
        </div>
    </div>
</nav>