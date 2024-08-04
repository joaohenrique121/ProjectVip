$(document).ready(function(){

    
    $(".deletebutton").click(function(){
        const csrfToken = $('meta[name="csrf-token"]').attr('content')
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
                    url: `/deleteuser${id}`,
                    dataType: "json",
                    headers:{
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function (response) {
                        if(response.code === 200){
                            Swal.fire({
                                title: "Deletado!",
                                text: "Cadastro deletado com sucesso!",
                                icon: "success"
                            }).then(()=>{
                                location.reload();
                            });
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

    $(".editbutton").click(function(){
        const id = $(this).attr("id");
        const csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "GET",
            url: `/getupdate${id}`,
            dataType: "json",
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                let data = response.user
                $("#name").val(data.name)
                $("#email").val(data.email)
                $("#contato").val(data.contato)
                $(".save").attr('id', data.id) 
            }
        });
    })

    $(".save").click(function(){

        const csrfToken = $('meta[name="csrf-token"]').attr('content')
        const data = {
            id: $(this).attr('id'),
            name: $("#name").val(),
            email: $("#email").val(),
            contato: $("#contato").val()
        };

        $.ajax({
            type: "PATCH",
            url: "/updatealuno",
            data: data,
            dataType: "json",
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                if(response.code === 200){
                    Swal.fire({
                        title: "Sucesso!",
                        text: "Registro editado!",
                        icon: "success"
                    }).then(()=>{
                        location.reload();
                    });
                }
            }
        });
    })
})