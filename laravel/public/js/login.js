$(document).ready(function(){
    $('#loginform').on('submit', e => {
        e.preventDefault()

        const data = {
            email: $("#email").val(),
            password: $("#senha").val(),
        }

        const csrfToken = $('meta[name=csrf-token]').attr('content');

        $.ajax({
            type: "POST",
            url: "/login",
            data: data,
            dataType: "json",
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            success: response => {
                if(response.code === 200){

                    if (!response.is_admin == 1){
                        window.location.href = "/home"
                    }

                    window.location.href = "/dashboard"

                }
                alert('Credenciais inválidas')
            },
        });

    })

    $("#logout").click(function(e){
        e.preventDefault();
        const csrfToken = $('meta[name=csrf-token]').attr('content');
        $.ajax({
            type: "POST",
            url: "/logout",
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                if(response.code === 200){
                    window.location.href = "/"
                }else{
                    alert('erro')
                }
            }
        });
    })

    $("#profile").click(function(){
        $.ajax({
            type: "GET",
            url: "/alunoprofile",
            dataType: "json",
            success: function (response) {
                if(response.code === 200){
                    let user = response.user
                    $("#name").text(user.name)
                    $("#email").text(user.email)
                    $("#contato").text(user.contato)
                }
            }
        });
    })
})