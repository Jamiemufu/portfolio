//basic functionality

//add click to strikethrough on list
$("ul").on("click", "li", function (e) {
    $(this).toggleClass("completed");
});

$("ul").on("click", "span", function(e){
    //needed to stop click bubbling
    //use parent() for parent element
    $(this).parent().fadeOut(1000, function(e){
        $(this).remove();
    });
    e.stopPropagation();
});

//keypress event listener on input
$("input[type='text']").on("keypress", function (e) {
    
});

$("#down").on("click tap", function() {
    $("input[type='text'").fadeOut(1000);
})
