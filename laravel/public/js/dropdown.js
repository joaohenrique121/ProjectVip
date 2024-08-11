const hideElment = (element, _class) => {
    if(element.hasClass(_class) ){
        element.removeClass(_class)
    }else{
        element.addClass(_class)
    }
}

<<<<<<< HEAD
$("#dropdown").on("click", ()=>{
=======
$("#dropdown").on("click", (e)=>{

>>>>>>> 5f9f7ad6ccd483ed104a3d46956f77a24c404de5
    const dropdown = $("#dp-profile")
    hideElment(dropdown, 'dropProfile')
})
<<<<<<< HEAD
=======


>>>>>>> 5f9f7ad6ccd483ed104a3d46956f77a24c404de5
$("#nav-button").on('click', () => {
    const aside = $("aside")
    const button = $(this)
    button.prop('disabled', true)

<<<<<<< HEAD
    if (!aside.hasClass('hide')){
        setTimeout(()=>{
            aside.addClass('hide').removeClass('show')
=======
    if (!aside.hasClass('hiddenn')){
        setTimeout(()=>{
            aside.addClass('hiddenn').removeClass('show')
>>>>>>> 5f9f7ad6ccd483ed104a3d46956f77a24c404de5
            button.prop('disabled', false)
        }, 500)
    }
    else{
        setTimeout(()=>{
<<<<<<< HEAD
            aside.addClass('show').removeClass('hide')
=======
            aside.addClass('show').removeClass('hiddenn')
>>>>>>> 5f9f7ad6ccd483ed104a3d46956f77a24c404de5
            button.prop('disabled', false)
        }, 500)
    }
})

$("#upload-image").on('click', ()=>{
    $("input[type='file']").click()
    $("#profile_picture").on("change", (event)=>{
        const file = event.target.files[0];
        const csrfToken = $('meta[name=csrf-token]').attr('content');
        if (file) {
            const formdata= new FormData()
            formdata.append("profile_picture", file);
            const imageUrl = URL.createObjectURL(file);
            $("#preview-image").attr("src", imageUrl);
            $("#profile-image").attr("src", imageUrl);
            $.ajax({
                type: "POST",
                url: "/profileUpdate",
                data: formdata,
                contentType: false,
                processData: false,
                headers:{
                    'X-CSRF-TOKEN': csrfToken
                }
            });
        }
    })
})