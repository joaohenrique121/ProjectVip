$(".open-alerturma").on('click', function (){
    const targetDialogId = $(this).data('target')
    const targetDialog = $(`#${targetDialogId}`)[0]
    if (targetDialog){
        targetDialog.showModal()
    }
    const id = $(this).attr('id')
    const csrfToken = $('meta[name=csrf-token]').attr('content');
    
    $('#deleteturma').click(function(){
        $.ajax({
            type: "delete",
            url: `/turma/${id}`,
            dataType: "application/json",
            headers:{
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                if(response.code === 200){
                    $("#menu-turma")[0].close()
                    window.location.reload()
                }
                
            }
        })
    })
    
})
