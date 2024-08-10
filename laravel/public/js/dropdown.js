$("button[class='padding']").on("click", ()=>{
    const dropdown = $("#dp-profile")
    if(dropdown.hasClass('dropProfile') ){
        dropdown.removeClass('dropProfile')
    }else{
        dropdown.addClass('dropProfile')
    }
})