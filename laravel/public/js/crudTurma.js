$("#criarturma").click(function(){

        const csrfToken = $("meta[name='csrf-token']").attr('content');
        const dataTurma = {
            nameturma: $("#nome").val(),
            level_id: $("#level").val(),
        }
        $.ajax({
            type: "POST",
            url: "/turma",
            data: dataTurma,
            dataType: "application/json",
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                if(response.code === 200){
                    alert('ok')
                }else{

                }
            }
        });
    })

