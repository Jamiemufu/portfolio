//basic functionality

//add click to strikethrough on list
$(".edit-span").on("click", function (e) {
    $(this).parent().toggleClass("completed");
    $(this).children().children().toggleClass(".fa fa-times");
    $(this).toggleClass("un-do");
    e.stopPropagation();
});

if ($("li").hasClass("completed")) {
   
}

$("ul").on("click", "span", function(e){
    //needed to stop click bubbling
    //use parent() for parent element
    $(this).parent().fadeOut(600, function(e){
        $(this).remove();
    });
    e.stopPropagation();
});

$("#down").on("touch click", function (e) { 
    e.preventDefault();
    $("input[type='text']").fadeToggle(300);
    $(this).toggleClass("arrow");
    $("#arrow").toggleClass(".fa fa-arrow-circle-down");

});

//keypress event listener on input
$("input[type='text']").on("keypress", function (e) {
    
});



