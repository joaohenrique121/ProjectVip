const modal = $("#modal")[0]

$("#openModal").on('click', ()=>{
    modal.showModal()
})
$("#close").on('click', ()=>{
    modal.close()
})
