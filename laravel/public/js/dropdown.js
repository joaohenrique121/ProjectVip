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

    if (!aside.hasClass('hidden')){
        setTimeout(()=>{
            aside.addClass('hidden').removeClass('show')
            button.prop('disabled', false)
        }, 420)
    }
    else{
        setTimeout(()=>{
            aside.addClass('show').removeClass('hidden')
            button.prop('disabled', false)
        }, 420)
    }
})