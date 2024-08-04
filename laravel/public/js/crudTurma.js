$(document).ready(function(){
    $("#criarturma").click(function(){

        const csrfToken = $("meta[name='csrf-token']").attr('content');
        
        $.ajax({
            type: "POST",
            url: "/turmacreate",
            data: {name: $("#turma").val()},
            dataType: "json",
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                if(response.code === 200){
                    Swal.fire({
                        title: "Sucesso!",
                        text: "Turma criada com sucesso!",
                        icon: "success"
                    }).then(()=>{
                        $("#turma").val('');
                        location.reload();
                    });
                }else{
                    Swal.fire({
                        title: "Erro!",
                        text: "Erro!",
                        icon: "error"
                    })
                }
            }
        });
    })

    $(".deleteturma").click(function(){
        const csrfToken = $("meta[name='csrf-token']").attr('content');
        const id = $(this).attr('id');

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: "btn btn-success",
              cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
          });
          swalWithBootstrapButtons.fire({
            title: "Tem certeza?",
            text: "Você não podera desfazer a ação!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Sim, delete!",
            cancelButtonText: "Não, cancele!",
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: `/deleteturma${id}`,
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function (response) {
                        if(response.code === 200){
                            Swal.fire({
                                title: "Sucesso!",
                                text: "Registro deletado!",
                                icon: "success"
                            }).then(()=>{location.reload()})
                        }
                    }
                });
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Cadastro seguro:)",
                icon: "error"
              });
            }
          });


    })

})