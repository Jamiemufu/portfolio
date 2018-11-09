//basic functionality

//add click to strikethrough on list
$("ul").on("click", "li", function (e) {
    $(this).toggleClass("completed");
});

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
});

//keypress event listener on input
$("input[type='text']").on("keypress", function (e) {
    
});


