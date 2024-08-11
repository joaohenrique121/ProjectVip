
const alunsosDialog = $("#alunos-dialog")[0]
const turmasDialog = $("#turmas-dialog")[0]

$(".registrar-aluno").on('click', () => {
        alunsosDialog.showModal()
})

$("#resgistrar-turma").on('click', ()=>{
    turmasDialog.showModal()
})
$(".close").on('click', ()=>{
    if (turmasDialog.open) turmasDialog.close()
    alunsosDialog.close()
})
$(".button-cancel").on('click', ()=>{
    if (turmasDialog.open) turmasDialog.close()
    alunsosDialog.close()
})

