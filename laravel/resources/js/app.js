import ajax from "../../public/js/utils.js";

$("#cadastrar-turma").on('click', () => {

   ajax({
       method: 'post',
       url: '/turma',
       data: {
           name: $("#nome").val()
       },
       success: response => {
            if (response.data){
                window.location.reload()
            }
            $("#nome").val(null)
       },
       error: (jqXHR) => {
            if (jqXHR.responseJSON.errors){
               alert(jqXHR.responseJSON.errors.name)
            }
       }
   })
})

