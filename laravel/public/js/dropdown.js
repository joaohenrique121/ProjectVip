const hideElment = (element, _class) => {
    if(element.hasClass(_class) ){
        element.removeClass(_class)
    }else{
        element.addClass(_class)
    }
}

$("#dropdown").on("click", ()=>{
    const dropdown = $("#dp-profile")
    hideElment(dropdown, 'dropProfile')
})
$("#nav-button").on('click', () => {
    const aside = $("aside")
    const button = $(this)
    button.prop('disabled', true)

    if (!aside.hasClass('hide')){
        setTimeout(()=>{
            aside.addClass('hide').removeClass('show')
            button.prop('disabled', false)
        }, 500)
    }
    else{
        setTimeout(()=>{
            aside.addClass('show').removeClass('hide')
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
 
            $.ajax({
                type: "POST",
                url: "/profileUpdate",
                data: formdata,
                contentType: false,
                processData: false,
                headers:{
                    'X-CSRF-TOKEN': csrfToken
                },
                dataType: "multipart/form-data",
                success: function (response) {
                    console.log(response);
                }
            });
        }
    })
})