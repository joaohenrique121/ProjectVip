const hideElment = (element, _class) => {
    if(element.hasClass(_class) ){
        element.removeClass(_class)
    }else{
        element.addClass(_class)
    }
}

$("button[class='padding']").on("click", ()=>{
    const dropdown = $("#dp-profile")

    hideElment(dropdown, 'dropProfile')
})

$("#nav-button").on('click', () => {
    const aside = $("aside")
    if (!aside.hasClass('hidden')){
        aside.addClass('hidden').removeClass('show')
    }
    else{
        aside.addClass('show').removeClass('hidden')
    }
})