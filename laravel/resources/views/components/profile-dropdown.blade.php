<div class="profile" id="dp-profile">
    <ul class="p-3">
        <div class="flex justify-center">
            <div class="upload-image-container">
                <img src="{{asset('storage/' . $profile) ?? ""}}" alt="" id="preview-image" class="upload-image-container">
            </div>
        </div>
        <li>Nome: {{$nome}}</li>
        <li>email: {{$email}}</li>
        <li>contato: {{$contato}}</li>
        <li class="update-profile-picture" id="upload-image">Alterar foto de perfil</li>
        <input type="file" name="profile_picture" class="hidden" id="profile_picture" accept="image/*">
    </ul>
</div>