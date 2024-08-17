$(".open-alert").on('click', function(){
    const targetDialogId = $(this).data('target')
    const targetDialog = $(`#${targetDialogId}`)[0]
    if (targetDialog){
        targetDialog.showModal()
    }
    const csrfToken = $('meta[name=csrf-token]').attr('content');
    let id = $(this).attr('id')

    $('#deletealuno').click(function(){
        $.ajax({
            type: "POST",
            url: `/alunodelete/${id}`,
            dataType: "json",
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                if(response.code === 200){
                    $("#dialog-alerta")[0].close()
                    window.location.reload()
                }
                
            }
        })
    })
})