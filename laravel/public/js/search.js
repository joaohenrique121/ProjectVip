
const alunos = []

$("#search").on("keyup", function (){
    const inputValue = $(this).val().toLowerCase();

    const searchClasses = "border border-collapse border-8 border-black/50 rounded relative bg-white h-fit w-full p-2"

    if (inputValue.length === 0) {
        $("#search-container").empty("").removeClass(searchClasses);
        return
    }
        $.ajax({
            url: "/search/alunos",
            method: "GET",
            data: { name: inputValue },
            contentType: "json",
            success: function (response) {
                const data = response.map(item => `<p class="item-list w-full text-start cursor-pointer">${item.name}</p>`).join('')
                if (data.length > 0) {
                    $("#search-container").html(data).addClass(searchClasses)
                }
            }
        });
})