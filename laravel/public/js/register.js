$(document).ready(function(){
    $(".register-form").submit(function(e){
        e.preventDefault();

        const data = {
            email: $("#email").val(),
            name: $("#nome").val(),
            password: $("#senha").val(),
            contato: $("#contato").val()
        }


        const csrfToken = $('meta[name=csrf-token]').attr('content');
        $.ajax({
            type: "POST",
            url: "/register",
            data: data,
            dataType: "json",
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                if(response.code === 200){
                    window.location.href = "/"

                }
            }
        });
    })
})