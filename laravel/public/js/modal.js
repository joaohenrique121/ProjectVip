$(".open-dialog").on('click', function (){
    const targetDialogId = $(this).data('target')
    const targetDialog = $(`#${targetDialogId}`)[0]
    if (targetDialog){
        targetDialog.showModal()
    }
})

$(".close").on('click', function (){
    const dialog = $(this).closest('dialog')[0]

    if(dialog && dialog.open){
        dialog.close()
    }
})
