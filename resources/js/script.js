//basic functionality

//add click to strikethrough on list
$("ul").on("click", "li", function () {
    $(this).toggleClass("completed");
});

$("ul").on("click", "span", function(e){
    //needed to stop click bubbling
    //use parent() for parent element
    $("Input").name('item').fadeOut(600, function(){
        $("Input").name('item').remove();
    });
    e.stopPropagation();
});

//keypress event listener on input
$("input[type='text']").on("keypress", function () {
    
});

$("#plus").click(function() {
    $("input[type='text'").fadeToggle(300);
})
